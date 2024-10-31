<?php
// phpcs:ignoreFile WordPress.Security.EscapeOutput.OutputNotEscaped
/**
 * @var string $content
 * @var SLN_Shortcode_Container $salon
 * @var SLN_Plugin $plugin
 */
$style = $salon->getStyleShortcode();
$cce = !$plugin->getSettings()->isCustomColorsEnabled();
$class = SLN_Enum_ShortcodeStyle::getClass($style);
$class_salon = $class;
$class_salon .= !$cce ? ' sln-customcolors' : '';
$class_salon_content = $class . '__content';
$currentTab = $_SESSION['currentTab'] ?? 'services';
?>
    <div id="sln-salon" class="sln-bootstrap container-fluid <?php echo $class_salon ?>">
        <div id="sln-salon__content" class="sln-bootstrap container-fluid <?php echo $class_salon_content ?>">
            <?php if (class_exists('SalonPackages\Addon') && slnpackages_is_pro_version_salon()): ?>
                <?php
                $tabs = [
                    ['name' => 'services', 'shortcode' => '[salon_booking/]'],
                    ['name' => 'packages', 'shortcode' => '[salon_packages/]'],
                ];
                ?>
                <ul class="sln-content__tabs__nav" role="tablist">
                    <?php foreach ($tabs as $tab): ?>
                        <li class="sln-content__tabs__nav__item<?php echo $tab['name'] === $currentTab ? ' active' : '' ?>" role="presentation">
                            <a data-target="#sln-salon__content--<?php echo $tab['name'] ?>"
                               aria-controls="sln-salon__content--<?php echo $tab['name'] ?>"
                               data-tab="<?php echo $tab['name'] ?>"
                               role="tab"
                               data-toggle="tab"
                            >
                                <?php esc_html_e(ucfirst(sprintf('%s', $tab['name'])), 'salon-booking-system'); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="tab-content sln-salon__tab-content">
                    <?php foreach ($tabs as $tab): ?>
                        <div id="sln-salon__content--<?php echo $tab['name'] ?>" role="tabpanel"
                             class="tab-pane sln-content__tab sln-content__tab--<?php echo $tab['name'] ?> sln-salon__content--<?php echo $tab['name'] ?><?php echo $tab['name'] === $currentTab ? ' active' : '' ?>">
                            <?php echo do_shortcode($tab['shortcode']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <?php echo do_shortcode('[salon_booking/]') ?>
            <?php endif; ?>
        </div>
    </div>

<?php if (defined('SLN_SPECIAL_EDITION') && SLN_SPECIAL_EDITION && !isset($_POST['sln'])): ?>
    <div id="sln-plugin-credits" class="sln-credits <?php echo $class . '-credits'; ?>">
        <?php esc_html_e('Proudly powered by', 'salon-booking-system') ?>
        <a target="_blanck"
           href="https://www.salonbookingsystem.com/plugin-pricing/#utm_source=plugin-credits&utm_medium=booking-form&utm_campaign=booking-form&utm_id=plugin-credits"><?php esc_html_e('Salon Booking System', 'salon-booking-system'); ?></a>
    </div>
<?php endif; ?>