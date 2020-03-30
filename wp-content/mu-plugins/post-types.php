<?php

function theme_post_types() {
    register_post_type('slider', array(
        'rewrite' => array('slug' => 'Diaporama'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Diaporama',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diaporama'
        ),
        'menu_icon' => 'dashicons-slides',
    ));

    register_post_type('filiere', array(
        'rewrite' => array('slug' => 'filiere'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Filières',
            'add_new_item' => 'Ajouter une filière',
            'edit_item' => 'Modifier filière',
            'all_items' => 'Toutes les filères',
            'singular_name' => 'Filière'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more',
    ));

    register_post_type('raison', array(
        'rewrite' => array('slug' => 'reasons'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Raisons',
            'add_new_item' => 'Ajouter un raison',
            'edit_item' => 'Modifier une raison',
            'all_items' => 'Toutes les raisons',
            'singular_name' => 'Raison'
        ),
        'menu_icon' => 'dashicons-editor-spellcheck',
    ));

    register_post_type('assets', array(
        'rewrite' => array('slug' => 'assets'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Atouts',
            'add_new_item' => 'Ajouter un atout',
            'edit_item' => 'Modifier un atout',
            'all_items' => 'Tous vos atouts',
            'singular_name' => 'Atout'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('testimonial', array(
        'rewrite' => array('slug' => 'testimonial'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Témoignage',
            'add_new_item' => 'Ajouter un Témoignage',
            'edit_item' => 'Modifier un témoignage',
            'all_items' => 'Tous vos Témoignages',
            'singular_name' => 'Témoignage'
        ),
        'menu_icon' => 'dashicons-format-quote',
    ));

    register_post_type('speciality', array(
    'rewrite' => array('slug' => 'specialities'),
    'public' => true,
    'supports' =>array('title','editor'),
    'has_archive' => true,
    'taxonomies' => array('category'),
    'labels' => array(
    'name' => 'Spécialités',
    'add_new_item' => 'Ajouter une spécialité',
    'edit_item' => 'Modifier une spécialité',
    'all_items' => 'Tous vos specialités',
    'singular_name' => 'Specialité'
    ),
    'menu_icon' => 'dashicons-external',
    ));
}

add_action('init', 'theme_post_types');
