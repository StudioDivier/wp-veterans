<?php

function get_main() {
    include "page-testing.php";
}


add_theme_support( 'post-thumbnails' ); // для всех типов постов

if ( function_exists ( 'add_theme_support' ) )

    add_theme_support ( 'post-thumbnails' );

add_filter( 'excerpt_length', function(){
return 12;
} );

add_filter('excerpt_more', function($more) {
    return '...';
});

add_filter( 'widget_text', 'do_shortcode' );

add_action( 'wp_enqueue_scripts', 'art_feedback_scripts' );
/**
 * Подключение файлов скрипта формы обратной связи
 *
 * @see https://wpruse.ru/?p=3224
 */
function art_feedback_scripts() {

    // Обрабтка полей формы
    wp_enqueue_script( 'jquery-form' );

    // Подключаем файл скрипта
    wp_enqueue_script(
        'feedback',
        get_stylesheet_directory_uri() . '/js/feedback.js',
        array( 'jquery' ),
        1.0,
        true
    );

    // Задаем данные обьекта ajax
    wp_localize_script(
        'feedback',
        'feedback_object',
        array(
            'url'   => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce( 'feedback-nonce' ),
        )
    );

}
?>