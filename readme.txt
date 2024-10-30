=== LH RSS Shortcode ===
Contributors: shawfactor
Donate link: https://lhero.org/portfolio/lh-rss-shortcode/
Tags: rss, shortcode, feed, atom, fetch_rss
Requires at least: 4.0
Tested up to: 5.2
Stable tag: trunk

A simple plugin to display RSS feeds in posts and pages using a shortcode.

== Description ==

Adds a simple to use [rss] shortcode with a couple of options:

* feed: to put in the feed URL
* num: to specify the number of items to show, defaults to 5
* template: a wordpress template that will handle the shortcode output (defaults to default.php, you can use the two provided or follow the instructions on creating your own

Example use:

[lh_rss_shortcode feed="https://shawfactor.com/feed/" num="10" ]

Or:

[lh_rss_shortcode feed="https://shawfactor.com/feed/" num="5" template="excerpt.php"]

== Installation ==

1. Upload the `lh-rss-shortcode` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Use the shortcode in your posts and pages.

== Frequently Asked Questions ==

= Why did you write this plugin? =

The existing options did not give me the full flexibility to manipulate the output of the fetched feed so I reviewed several fo the existing plugins and wrote this one to do t better and give me that option.

= How can I add my own template for outputting the rss feed? =

Copy folder lh_rss_shortcode-templates from the plugin into your active child theme directory, then edit or add teamplates as required. The plugin will also look to see if the specified teamplate exists there first.


== Changelog ==

**1.00 May 04, 2019** 
* Initial release