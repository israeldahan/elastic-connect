<?php

namespace ElasticConnect\Dashboard;

if (! defined('ABSPATH')) {
    die('-1');
}

// Register the menu.
add_action("admin_menu", "ec_plugin_menu_func");
function ec_plugin_menu_func()
{
    add_submenu_page(
        "options-general.php",  // Which menu parent
         "ElasticSearch Connect",            // Page title
         "ElasticSearch Connect",            // Menu title
         "manage_options",       // Minimum capability (manage_options is an easy way to target administrators)
          "elasticsearch-connect",            // Menu slug
           "ec_plugin_options"     // Callback that prints the markup
    );
}

// Print the markup for the page
function ec_plugin_options()
{
    if (!current_user_can("manage_options")) {
        wp_die(__("You do not have sufficient permissions to access this page."));
    }
    echo "Hello world!";
}
