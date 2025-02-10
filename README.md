WP Figma Colour Importer
========================

WP Figma Colour Importer is a WordPress plugin that imports colour styles from Figma 
and updates the 'theme.json' file in the active WordPress block theme.

Features:
---------
- Uploads a 'figma-colours.json' file.
- Updates the theme colour palette in 'theme.json'.
- Automates syncing Figma colours to WordPress.

Installation:
-------------
1. Clone the repository:
   git clone https://github.com/yourusername/wp-figma-colour-importer.git

2. Move the plugin folder to WordPress:
   mv wp-figma-colour-importer /wp-content/plugins/

3. Activate the plugin:
   - Go to WordPress Admin → Plugins.
   - Activate 'Figma Colour Importer'.

Usage:
------
1. Go to WordPress Admin → Figma Colours.
2. Upload 'figma-colours.json' (exported from the Figma Colour Exporter plugin).
3. Click 'Upload'.
4. The 'theme.json' file updates automatically!

Example 'figma-colours.json':
-----------------------------
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

Development:
------------
- The main file is 'wp-figma-colours.php'.
- Updates colours in '/wp-content/themes/YOUR-THEME/theme.json'.

Frequently Asked Questions:
---------------------------
Where do I upload the JSON file?
- Go to WordPress Admin → Figma Colours and upload the exported 'figma-colours.json'.

Will this overwrite my existing 'theme.json'?
- Yes, but it only modifies the 'palette' section, keeping other theme settings intact.

Changelog:
----------
1.0 - Initial release.

License:
--------
This project is licensed under the MIT License.
