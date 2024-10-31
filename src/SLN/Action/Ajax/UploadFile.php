<?php

class SLN_Action_Ajax_UploadFile extends SLN_Action_Ajax_Abstract
{
    public function execute()
    {
        $errors    = array();
        $file_name = '';

        if(!empty($_FILES) && isset($_FILES['file'])) {
            if ( ! function_exists( 'wp_handle_upload' ) ) {
                require_once( ABSPATH . 'wp-admin/includes/file.php' );
            }
            $tmp_file  = $_FILES['file'];
            $file_name = $this->unique_filename(null, $tmp_file['name']);

            $upload_dir = wp_upload_dir();
            $user_id = get_current_user_id();
            $target_dir = $upload_dir['basedir'] . '/salonbookingsystem/user/' . $user_id . '/';

            if (!file_exists($target_dir)) {
                wp_mkdir_p($target_dir);
            }

            add_filter('upload_dir', function ($dirs) use ($target_dir) {
                $dirs['path'] = $target_dir;
                $dirs['subdir'] = '/salonbookingsystem/user/' . get_current_user_id();
                $dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];
                $dirs['basedir'] = $target_dir;
                return $dirs;
            });

            $overrides = array(
                'test_form' => false,
                'unique_filename_callback' => array($this, 'unique_filename'),
            );

            $movefile = wp_handle_upload($tmp_file, $overrides);
            if(isset($movefile['error'])){
                $errors[] = $movefile['error'];
            }

            remove_filter('upload_dir', '__return_false');
        }

	    $ret = array(
            'success' => empty($errors),
            'errors'  => $errors,
            'file'    => $file_name,
        );

        return $ret;
    }

    public function unique_filename($path, $filename){
        return (new DateTime())->getTimestamp(). '_'. $filename;
    }

}
