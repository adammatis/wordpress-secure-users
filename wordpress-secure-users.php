<?php
/**
 * Plugin Name: WordPress Secure Users
 * Description: Hides WordPress REST API user endpoints from anonymous visitors.
 * Version: 1.0.0
 * Author: Mintechapps Kft.
 * License: GPL-2.0-or-later
 */

if (!defined('ABSPATH')) {
    exit;
}

add_filter('rest_endpoints', function ($endpoints) {
    if (!is_user_logged_in()) {
        unset($endpoints['/wp/v2/users']);
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }

    return $endpoints;
});
