<<<<<<< HEAD
<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        '1.0'
    );

    // reset style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/scss/style.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );
}
=======
<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
    // google fonts
    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        '1.0'
    );

    // reset style
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main style
    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/scss/style.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );
}
>>>>>>> ef0d8fcecf4ba6012413300936341911d88e3cb1
?>