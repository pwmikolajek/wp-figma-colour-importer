=== WP Figma Colour Importer ===
Contributors: YourName
Tags: figma, colors, theme.json, WordPress, Gutenberg
Requires at least: 5.8
Tested up to: 6.4
Stable tag: 1.0
License: MIT
License URI: https://opensource.org/licenses/MIT

== Description ==
WP Figma Colour Importer is a WordPress plugin that imports colour styles from Figma 
and updates the 'theme.json' file in the active WordPress block theme.

== Features ==
* Upload a `figma-colours.json` file.
* Updates the theme colour palette in `theme.json`.
* Automates syncing Figma colours to WordPress.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/wp-figma-colour-importer/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to **WordPress Admin → Figma Colours**.
4. Upload `figma-colours.json` (exported from the Figma Colour Exporter plugin).
5. Click **Upload**.
6. The `theme.json` file updates automatically.

== Example 'figma-colours.json' ==
[
  {
    "name": "Green 10",
    "color": "#4dff8b"
  },
  {
    "name": "Green 9",
    "color": "#5fff97"
  }
]

== Development ==
* The main file is `wp-figma-colours.php`.
* Updates colours in `/wp-content/themes/YOUR-THEME/theme.json`.

== Frequently Asked Questions ==
= Where do I upload the JSON file? =
Go to **WordPress Admin → Figma Colours** and upload the exported `figma-colours.json`.

= Will this overwrite my existing theme.json? =
Yes, but it only modifies the `palette` section, keeping other theme settings intact.

== Changelog ==
= 1.0 =
* Initial release.

== License ==
This project is licensed under the MIT License.
