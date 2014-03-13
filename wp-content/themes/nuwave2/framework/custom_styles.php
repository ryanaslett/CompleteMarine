<?php
/*
|---------------------------------------------------------------------
| Apply styles to visual editor
|---------------------------------------------------------------------
*/
function nw_mcekit_editor_style($url) {

    if ( !empty($url) )
        $url .= ',';

    $url .= get_template_directory_uri() . '/css/editor-styles.css';
    return $url;
}
add_filter('mce_css', 'nw_mcekit_editor_style');

/*
|---------------------------------------------------------------------
| Add Styles Dropdown
|---------------------------------------------------------------------
*/
function nw_mce_editor_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
add_filter( 'mce_buttons_2', 'nw_mce_editor_buttons' );

/*
|---------------------------------------------------------------------
| Add styles/classes to the "Styles" drop-down
|---------------------------------------------------------------------
*/ 
function nw_mce_before_init( $settings ) {

    $style_formats = array(
/*
        array(
            'title' => 'Download Link',
            'selector' => 'a',
            'classes' => 'download'
            ),
        array(
            'title' => 'Testimonial',
            'selector' => 'p',
            'classes' => 'testimonial',
        ),
        array(
            'title' => 'Warning Box',
            'block' => 'div',
            'classes' => 'warning box',
            'wrapper' => true
        ),
*/
        array(
            'title' => 'Button',
            'inline' => 'a',
            'classes' => 'btn'
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}
add_filter( 'tiny_mce_before_init', 'nw_mce_before_init' );

/*
|---------------------------------------------------------------------
| Add custom stylesheet to front-end
|---------------------------------------------------------------------
*/
function nw_mcekit_editor_enqueue() {
	wp_enqueue_style( 'nw-custom-styles', get_template_directory_uri() . '/css/editor-styles.css' );
}
add_action('wp_enqueue_scripts', 'nw_mcekit_editor_enqueue');