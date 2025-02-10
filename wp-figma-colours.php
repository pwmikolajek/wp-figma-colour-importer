<?php
/*
Plugin Name: Figma Colour Importer
Description: Imports colours from a Figma JSON file into the theme.json of the active block theme.
Version: 1.0
Author: Your Name
*/

add_action('admin_menu', 'figma_colours_menu');

function figma_colours_menu() {
    add_menu_page(
        'Figma Colours',
        'Figma Colours',
        'manage_options',
        'figma-colours',
        'figma_colours_page'
    );
}

function figma_colours_page() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['figma_json'])) {
        if ($_FILES['figma_json']['error'] === UPLOAD_ERR_OK) {
            $json = file_get_contents($_FILES['figma_json']['tmp_name']);
            update_theme_json($json);
            echo "<div class='updated'><p>Colours imported successfully!</p></div>";
        } else {
            echo "<div class='error'><p>Failed to upload file.</p></div>";
        }
    }

    echo '<div class="wrap">';
    echo '<h1>Import Figma Colours</h1>';
    echo '<form method="POST" enctype="multipart/form-data">';
    echo '<input type="file" name="figma_json" accept="application/json" required>';
    echo '<input type="submit" value="Upload" class="button button-primary">';
    echo '</form>';
    echo '</div>';
}

function update_theme_json($json) {
    $colours = json_decode($json, true);
    $theme_json_path = get_template_directory() . '/theme.json';

    if (!file_exists($theme_json_path)) {
        echo "<div class='error'><p>theme.json not found in the active theme.</p></div>";
        return;
    }

    $theme_json = json_decode(file_get_contents($theme_json_path), true);

    if (!isset($theme_json['settings']['color']['palette'])) {
        $theme_json['settings']['color']['palette'] = [];
    }

    $theme_json['settings']['color']['palette'] = array_map(function ($color) {
        return [
            "name"  => $color['name'],
            "slug"  => strtolower(str_replace(" ", "-", $color['name'])), // Convert name to slug
            "color" => $color['color']
        ];
    }, $colours);

    file_put_contents($theme_json_path, json_encode($theme_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

    echo "<div class='updated'><p>Figma colours imported successfully into theme.json!</p></div>";
}
?>
