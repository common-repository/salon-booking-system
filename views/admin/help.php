

<script type="text/javascript">
	!(function(e, t, n) {
	function a() {
		var e = t.getElementsByTagName("script")[0],
			n = t.createElement("script");
		(n.type = "text/javascript"),
			(n.async = !0),
			(n.src = "https://beacon-v2.helpscout.net"),
			e.parentNode.insertBefore(n, e);
	}
	if (
		((e.Beacon = n = function(t, n, a) {
			e.Beacon.readyQueue.push({ method: t, options: n, data: a });
		}),
		(n.readyQueue = []),
		"complete" === t.readyState)
	)
		return a();
	e.attachEvent
		? e.attachEvent("onload", a)
		: e.addEventListener("load", a, !1);
})(window, document, window.Beacon || function() {});
</script>
<script type="text/javascript">
	window.Beacon("init", "77e6e58b-9688-43dd-af61-8e95b41db6f9");
	window.Beacon("config", {
		color: "#0277bd",
		display: {
			text: "Do you need help?",
			iconImage: '<?php echo esc_html(SLN_PLUGIN_URL) . "/img/logo_help_button.png" ?>',
		},
	});
</script>