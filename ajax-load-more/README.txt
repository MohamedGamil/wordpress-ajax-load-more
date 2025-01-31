=== Ajax Load More ===
Contributors: dcooney
Donate link: http://connekthq.com/donate/
Tags: ajax, query, loop, paging, filter, jquery, shortcode builder, shortcode, search, tags, category
Requires at least: 3.6
Tested up to: 3.9.1
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Ajax Load More is simple solution for lazy loading your WordPress posts and pages with AJAX.

== Description ==

A simple yet powerful solution for loading WordPress posts and pages via AJAX requests. Build complex WP queries using our shortcode builder and let Ajax Load More handle the rest.


View live examples on the [demo site](http://connekthq.com/ajax-load-more/).


= Features include =

* **Shortcode/Query Builder** - create your own Ajax Load More shortcode by adjusting the various WordPress query parameters (see Shortcode Parameters)
* **Customizable Repeater** - edit and extend the functionality of Ajax Load More by editing the repeater (see screenshots)
* **Setting Panel** - Customize your version of Ajax Load More by updating various plugin settings (see screenshots)
 

= Shortcode Parameters =

Ajax Load More accepts a number of paramaters to pass to the WordPress query. These parameters are passed via shortcode. Don't worry, it's super simple with our custom Shortcode Builder.
 
*   repeater - select from a list of customizable repeaters (Add-on available)
*   post_types - comma seperated list of post types to query
*   category - query by category slug
*   tag - query by tag slug
*   author - query by author id
*   search - query search term ('s') 
*   exclude - comma separated list of post ID's to exclude from query. 
*   offset - offset the initial query (number).
*   posts_per_page - number of posts to load with each request
*   scroll - load more posts as the user scrolls the page (true/false)
*   max_pages - maximum number of pages to load while scrolling (only if scroll == true)  
*   pause - do not load posts until user clicks load button (true/false) 
*   transition - select a loading transition from the drop menu (slide/fade) 
*   button_label - customize the Load More button label.


= Example Shortcode =

    [ajax_load_more post_type="post, portfolio" repeater="default" posts_per_page="5" transition="fade" button_label="Older Posts"]


= Tested Browsers =

* Firefox (mac + pc)
* Safari (mac + pc)
* Chrome	(mac + pc)
* IE8+
* iPhone (Safari, Chrome)
* Android (Native + Chrome)
* BB10


= Add-ons =

The following Add-ons are available to increase the functionality of Ajax Load More.

**Custom Repeaters**
The Custom Repeaters add-on will add five additional customizeable repeaters and allow you to select unique repeaters for different content types throughout your theme.
[More Information](http://connekthq.com/ajax-load-more/custom-repeaters)

= Website =
http://connekthq.com/ajax-load-more


= Please Vote =
Your votes make a big difference! If you like Ajax Load More, please vote for my plugin.


== Frequently Asked Questions ==


= What are my server requirements? =

Your server must be able to read/write/create files. Ajax Load More creates the default repeater on plugin activation and in order to modify the output you are required to write to the file as well. 

= Is the ajax functionality secure? =

Yes, Ajax Load more uses admin-ajax and nonces in order to protect URLs and forms from being misused.

= Can I make modifications to the plugin code? =

Sure, but please be aware that if any modifications are made may affect future updates.

= Can I modify the repeater? =

Yes, visit the Repeaters area in the WordPress admin.

== Installation ==

How to install Ajax Load More.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Ajax Load More'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `ajax-load-more.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `ajax-load-more.zip`
2. Extract the `ajax-load-more` directory to your computer
3. Upload the `ajax-load-more` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard


== Screenshots ==

1. Settings screen
2. The collection of available repeaters
3. Shortcode Builder (Admin screen)
4. Shortcode Builder (Page Edit screen)
5. Content Editor shortcode icon
6. Shortcode and implementation examples

== Changelog ==

= 2.0.0 =
* Ajax Load More

== Upgrade Notice ==

* None 


