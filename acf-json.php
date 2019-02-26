<?php
/**
 * Plugin Name:     ACF JSON
 * Plugin URI:      https://github.com/itinerisltd/acf-json
 * Description:     Load ACF JSON settings from bedrock/config/acf-json directory
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     acf-json
 */

declare(strict_types=1);

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

// Something is wrong, abort.
if (! defined('ABSPATH')) {
    die;
}

add_filter('acf/settings/save_json', function (): string {
    return ABSPATH . '../../config/acf-json';
}, 10000);

add_filter('acf/settings/load_json', function (array $paths): array {
    return array_merge($paths, [
        ABSPATH . '../../config/acf-json',
    ]);
}, 10000);
