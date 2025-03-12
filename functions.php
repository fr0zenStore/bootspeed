<?php
// Verifica compatibilità con PHP 8.3
if (version_compare(PHP_VERSION, '8.3', '<')) {
    die('PHP 8.3 o superiore è richiesto.');
}

// Pulizia dell'header per migliorare la velocità e la sicurezza
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Abilitazione del supporto per immagini in evidenza
add_theme_support('post-thumbnails');

// Abilitazione del titolo dinamico
add_theme_support('title-tag');

// Registrazione dei menu di navigazione
function bootspeed_register_menus() {
    register_nav_menus([
        'main-menu' => __('Main Menu', 'bootspeed'),
    ]);
}
add_action('init', 'bootspeed_register_menus');

// Caricamento di Bootstrap e degli stili personalizzati
function bootspeed_enqueue_scripts() {
    // Bootstrap CSS da CDN
    wp_enqueue_style('bootscore', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
    // Stile del tema
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], '1.0.0');

    // Bootstrap JS (differito)
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);

    // Google Fonts caricati in modo ottimizzato
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'bootspeed_enqueue_scripts');
?>
