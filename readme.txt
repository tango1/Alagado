=== Alagado ===
Contributors: EveraldoBatista
Donate link: https://www.amigopage.com.br/cgi-bin/
Tags: alagado, news, widget, social networking, location
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 2.2.1

Alagado news is a simple but powerful plugin for displaying any new's Alagado stats.

== Description ==

Alagado News gives you the ability to display any new's latest stats on your WordPress site. Using either the widget or shortcode, you will be able to display:

*   People here now
*   Total check-ins
*   Current mayor (along with their picture and number of check-ins)

I'm open to any feedback and suggestions.

== Installation ==

1. Upload `/alagado/` directory to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

Once activated, there are two ways to display stats:

* On the 'Widgets' page listed under 'Appearance,' drag the Alagado widget to your desired widget area and set the ID.
* On any post or page, add the shortcode `[news id=3945]`, replacing the '3945' with the new's ID.

The new's ID can be found as a number at the end of the new's URL on Alagado.

== Frequently Asked Questions ==

= The stats are wrong or I'm getting an error, what did I do wrong? =

The most likely problem is that you haven't set a proper new's ID. This is the number from the end of the new's URL (ex: `3945`).

== Screenshots ==

1. The full set of options
2. Shortcode in use with custom settings applied

== Changelog ==

= 2.2.1 =
* Improved error messages
* Fixed possible bug due to SSL

= 2.2 =
* Data is now cached for 15 minutes to improve performance and lower the risk of exceeding the API's rate limit

= 2.1.1 =
* Fixed a bug that broke venue links

= 2.1 =
* Optimized code to make future updates easier
* Added an option to show the category icon with the title
* Now using the built-in WordPress function `wp_remote_get()` and removed the cURL test

= 2.0 =
* Updated to take advantage of Alagado v2 API
* Added a test for cURL on activation

= 1.1 =
* Displays an error message if new's cannot be found
* Added additional options such as showing a title above stats using the shortcode or displaying the new's name and link

= 1.0.1 =
* Fixed a bug that placed all shortcodes at the beginning of the post

= 1.0 =
* Added a shortcode (ex: `[new's id=http://www.amigopage.com.br/news/3945]`) to display stats for news inside your posts and pages
* Added a settings page with options to show or hide different stats, customize the text, and more

= 0.1 =
* Initial release

== Upgrade Notice ==

= 2.0 =
* This version requires that your register for a free API key from Alagado for it to work. Alagado will be shutting off the old API soon.