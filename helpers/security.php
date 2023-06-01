<?php
/**
 *
 * Ajustes de Seguranca
 *
 */

/*
 * Remove versao do Wordpress do codigo fonte
 */
function remove_wp_version() {
    return '';
}
add_filter('the_generator', 'remove_wp_version');

/*
 * Remove versao do Wordpress do css e js
 */
/*
function remove_wp_version_src( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
        return $src;
}
add_filter( 'style_loader_src', 'remove_wp_version_src', 9999 );
add_filter( 'script_loader_src', 'remove_wp_version_src', 9999 );
*/

/**
 *
 * Altera as mensagens de erros de login
 * @link https://gist.github.com/zergiocosta/72f87176b236ed0c6e13
 *
 */
function guwp_error_msgs() {
    $custom_error_msgs = array(
        'Parece que <strong>voc&ecirc;</strong> digitou alguma coisa errada&#33;',
        'Ser&aacute; que o <strong>Caps Lock</strong> est&aacute; ativado&#63;'
    );
    return $custom_error_msgs[array_rand($custom_error_msgs)];
}
add_filter( 'login_errors', 'guwp_error_msgs' );