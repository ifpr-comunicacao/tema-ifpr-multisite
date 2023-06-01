<?php
if (is_home() || is_front_page()) : ?>
    <div class="alert alert-danger mt-2 mb-2" role="alert">
    <?php _e( 'Desculpe, n&atilde;o publicamos nada ainda.', 'ifpr_theme' ); ?>
    </div>
<?php else : ?>
    <div class="alert alert-danger mt-2 mb-2" role="alert">
    <?php _e( 'Desculpe, nenhuma p&aacute;gina corresponde ao seu crit&eacute;rio.', 'ifpr_theme' ); ?>
    </div>
<?php
endif;
