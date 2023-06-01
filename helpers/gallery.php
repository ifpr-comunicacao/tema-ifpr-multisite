<?php
/**
 * Filtro para galeria nativa do Wordpress
 * Integração do Bootstrap 4
 * Integracao com Fresco Gallery
 * @link https://www.frescojs.com/
 */

function gallery_add_class ($content) {

if ( is_single() ) {

        $carouselid = 'carousel slide carouselPost" data-ride="carousel" data-interval="3000"';
        $replace = array(
            //old class                                //new class
            'wp-block-gallery columns-1 is-cropped"' => $carouselid,
            'wp-block-gallery columns-2 is-cropped"' => $carouselid,
            'wp-block-gallery columns-3 is-cropped"' => $carouselid,
            'wp-block-gallery columns-4 is-cropped"' => $carouselid,
            'wp-block-gallery columns-5 is-cropped"' => $carouselid,
            'blocks-gallery-grid'                   => 'carousel-inner ifpr_gallery',
            'blocks-gallery-item"><figure><a'       => 'carousel-item"><figure><a class="fresco d-flex justify-content-center ifpr_gallery_a" data-fresco-group="fresco-gallery" data-fresco-caption=""',
            'data-full-url'                         => 'class="bd-highlight ifpr_gallery_img img-fluid" data-full-url',
            'blocks-gallery-item__caption'          => 'blocks-gallery-item__caption carousel-caption d-md-block'
        );
        $content = str_replace(array_keys($replace), $replace, $content);
        return $content;

    }

    return $content;
}
add_filter('the_content', 'gallery_add_class', 10, 2);
