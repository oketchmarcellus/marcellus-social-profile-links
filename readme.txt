=== Express Social Links ===
Contributors:      marcellus89
Tags:              social media, links, logo, icons, share
Tested up to:      7.0
Stable tag:        0.1.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/oketchmarcellus/express-social-links/

A social media plugin for adding dynamic social media profile links and custom logos to your WordPress website.

== Description ==

Boost your website engagement with Express Social Links, a lightweight and modern social media sharing plugin built specifically for the WordPress block editor (Gutenberg). 
Easily add beautiful, responsive social sharing buttons to any post, page, or widget area without slowing down your site.

= Key Features =
* Seamless Block Integration: Add and customize social links directly inside the native WordPress editor using built-in block editor components.
* Performance First: Built using native modern JavaScript libraries, ensuring zero bloated frameworks or site-slowing scripts.
* Fully Translatable: Ready for global audiences with full internationalization (i18n) compliance.
* Clean Output: Outputs clean, accessible HTML optimized for all screen sizes and modern themes.


= Search Keywords =
social links, social sharing, share buttons, social icons, block editor, gutenberg block, express social links, share post


== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to 'Express Socials links' in your sidebar to configure.

== Technical Details ==

This plugin is built using modern WordPress block development standards. 
It utilizes the following core libraries and technologies:

* WordPress Block Editor (@wordpress/block-editor): Powers the user interface and components inside the Gutenberg editor.
* WordPress Blocks (@wordpress/blocks): Handles block registration, configuration, and structural behavior.
* WordPress Internationalization (@wordpress/i18n): Provides localization utilities to make the plugin fully translatable.
* WordPress Scripts (@wordpress/scripts): Drives the build system, code formatting, and asset packaging.

* [View on GitHub](https://github.com/oketchmarcellus/express-social-links/)
* [Report Issues](https://github.com/oketchmarcellus/express-social-links/issues)
* [Follow the Developer](https://github.com/oketchmarcellus/)


For more, see the developer guide at the end of this documentation.

== Frequently Asked Questions ==

= Why can't I see all the options available in the Global settings in the Gutenberg editor =

Currently, only three options are available. The controls are toggles for visibility of widget, platform label, and icon border.
More options to be added to both the global settings and inside block editor.

= Are page builders like Elementor and the Classic Editor supported? =

No. Express Socials Links is currently supported only in the Gutenberg editor. These will soon also be added to the editor.

== Screenshots ==

1. This is a screenshot of the plugin widget in use in the Gutenberg editor.
2. This is a screenshot of the plugin admin page tab for adding you social platform icon, labels and URL.
3. This is a screenshot of the plugin admin page tab for updating the plugin global settings and defaults.

== Changelog ==

= 0.1.0 =
* Initial release.
* Added core social media sharing blocks.
* Integrated `@wordpress/block-editor` components for seamless block customization.
* Implemented translation-ready text strings using `@wordpress/i18n`.

== Arbitrary section ==


== Developer Guide ==

Follow these steps to set up, modify, and run this plugin locally.

= Prerequisites =
Ensure you have the following installed on your machine:
* Node.js (LTS version recommended)
* NPM (comes packaged with Node.js)
* A local WordPress development environment (e.g., LocalWP, DevKinsta, or wp-env)

= Dev Installation & Setup =
1. Clone or move this plugin folder into your local WordPress installations directory:
   `/wp-content/plugins/express-social-links`
2. Open your terminal and navigate to the plugin root directory:
   cd /path/to/wp-content/plugins/express-social-links
3. Install the required development dependencies:
   npm install

= Development Workflow =
* Start Local Development Server:
  Run the watch script to automatically compile your code changes in real-time.
  npm start

* Build for Production:
  Minify assets and prepare your code for distribution.
  npm run build

* Format Code:
  Automatically fix code formatting to match WordPress standards.
  npm run format

* Lint JavaScript & CSS:
  Check your code for errors, warnings, and code-style violations.
  npm run lint:js
  npm run lint:css

= Testing Changes =
1. Activate the plugin via the WordPress Admin Dashboard.
2. Open a post or page in the Block Editor (Gutenberg).
3. Search for "Express Social Links" in the block inserter menu.