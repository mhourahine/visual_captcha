<?php

//get visual object count
$vc_count = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'visual_captcha',
	'limit' => 0,
	'count' => true
));


?>

<p>Visual Captcha Objects: <?php echo $vc_count; ?></p>

<p><a href="<?php echo elgg_get_site_url() ?>vc_image/reset">Reset Visual Captcha</a></p>