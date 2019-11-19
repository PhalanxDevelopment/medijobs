<?php
/**
 * Plugin bootstrap file.
 */
namespace WordPressPopularPosts;

/** Composer autoloder */
require __DIR__ . '/../vendor/autoload.php';

register_activation_hook($wpp_main_plugin_file, [__NAMESPACE__ . '\Activation\Activator', 'activate']);
register_deactivation_hook($wpp_main_plugin_file, [__NAMESPACE__ . '\Activation\Deactivator', 'deactivate']);

$container = new Container\Container();
$container->configure([
    new Container\WordPressPopularPostsConfiguration()
]);

$WordPressPopularPosts = $container['wpp'];
add_action('plugins_loaded', [$WordPressPopularPosts, 'init']);

// WPP_Query will be removed on a future release.
// It was been superseeded by \WordPressPopularPosts\Query.
require __DIR__ . '/WPP_Query.php';

// WPP's template tags
require __DIR__ . '/template-tags.php';
