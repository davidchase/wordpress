=== Lockdown WP Admin ===
Contributors: sean212
Donate link: http://talkingwithsean.com/donate/
Link: http://talkingwithsean.com/2011/01/lockdown-wp-admin/
Tags: security, wp-admin, login, hide login, rename login, http auth, 404, lockdown, talkingwithsean, secure
Requires at least: 3.0
Tested up to: 3.2
Stable tag: 1.5

This plugin will lockdown WP Admin. It can hide wp-admin and wp-login as well as add HTTP auth to the login system. It can change the login URL.

== Description ==

This plugin will hide /wp-admin/ when you aren't logged in. If a user isn't logged in and they attempt to access /wp-admin/ directly, they will be unable to and it will return a 404. It can also rename the login URL.

Also, you can add HTTP authentication directly from WP admin and add custom username/password combinations for the HTTP auth, or use the WordPress credentials.

This doesn't touch any .htaccess files or change the WordPress core files. All the CSS/Images under /wp-admin/ are still accessible, just not the .php ones.

If you enable HTTP authencation, it will add HTTP auth to the PHP files in /wp-admin/

== Installation ==
1. Upload `/lockdown-wp-admin/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to the "Lockdown WP" menu

== Frequently Asked Questions ==
How can we add files to the whitelist to hide from the public eye? We want to have AJAX and use a custom file, but we can't because it hides it from the public.

You can add a file using the 'no_check_files' filter. Use this:
	<?php
	function add_my_cool_filter($data)
	{
		//	You have to accept the $data argument or else it will cause a system meltdown ;)
		$data[] = 'my-file-name.php';	//	JUST the file name.
		return $data;
	}
	add_filter('no_check_files', 'add_my_cool_filter');
	?>

Simple.

== Changelog ==
= 1.0 =
* Initial release

= 1.0.1 =
* Fixed a link to a broken file

= 1.1 =
* Fixed a bug on activating the plugin network wide, we disabled network wide activation.
* Cleaned up the plugin and prevented a double loop of the HTTP check, unnecessary.

= 1.2 =
* Cleaned up more code.
* Security fixes that will prevent somebody from possibly hijacking your website. (Props Jon Cave)

= 1.3.1 =
* Added the ability to change the login URL entirely. It will disable /wp-login.php and give it whatever you want to make it.

= 1.4 =
* Fixed a bug with user's with a index.php base
* Added stats for us to collect about about URL setup and server configuration for our users. This will let us make the plugin even better.
* Fixed bug for having private user management in WP Admin

= 1.4.2 =
* Bug fixes
* Added `admin-ajax.php` to the files that we permit to be access in wp-admin.