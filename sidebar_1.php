<section id="sidebar__esquerda" class="sidebar col-md-3 d-none d-md-block pt-3">
	<?php if ( has_nav_menu( 'nav-translation' ) ) {
		 wp_nav_menu( array(
		'container' => 'nav',
		'container_class' => 'nav-translation',
		'menu_class' => 'nav',
		'echo' => true,
		'fallback_cb' => '',
		'items_wrap' => '<ul class="%2$s">%3$s</ul>',
		'item_spacing' => 'preserve',
		'walker' => '',
		'theme_location' => 'nav-translation' ) );
	}?>
	<?php dynamic_sidebar( 'esquerda' ); ?>
</section>