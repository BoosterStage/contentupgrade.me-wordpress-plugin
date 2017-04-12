<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://contentupgrade.me
 * @since      1.0.0
 *
 * @package    ContentUpgrade_Me_Plugin
 * @subpackage ContentUpgrade_Me_Plugin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->




<div class="info">

	<img class="logo" src="<?php echo plugin_dir_url( dirname(dirname(__FILE__)) ) . 'admin/images/ContentUpgradeMeLogo-300.png'; ?>" />

	<h1>
		ContentUpgrade.me embeds lead magnets
		<span class="nowrap">anywhere, effortlessly.</span>
	</h1>

	<div class="" style="max-width: 640px; margin: 1em auto;">
		<div class="video-container">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/3I5nFa6VQPM" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<p>
		<a href="https://contentupgrade.me/app/new?utm_source=wordpress-plugin" class="button button-primary button-large", target="_blank">Create a new ContentUpgrade</a>
	</p>

</div>
