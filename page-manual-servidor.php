<?php
/*
Template Name: Manual do Servidor
Template Post Type: post, page
*/
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="page" class="container content">
			<div class="row">
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar1 -->
				<div id="content2" class="<?php echo get_post_meta(get_the_ID(),'class',true); ?> col-md-9">
					<?php if ( has_post_thumbnail() ) : ?>
					<figure class="row mb-0 d-none d-md-block">
						<?php the_post_thumbnail('full',array( 'class' => 'img-fluid'));?>
					</figure>
						<?php endif; ?>
					<div class="mb-3 row">
						<?php if ( has_nav_menu( 'nav-manual-servidor' ) ) { ?>
							<h6 class="menu-contextual-toggle m-0 col-12"><span> <?php get_template_part("nav"); ?></span><i class="fas fa-chevron-circle-down d-md-none"></i></h6>
						<?php wp_nav_menu( array(
							'container' => 'nav',
							'container_class' => 'page-menu-contextual col-12 m-0',
							'menu_class' => 'page-menu-contextual-list p-0',
							'echo' => true,
							'fallback_cb' => '',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'item_spacing' => 'preserve',
							'walker' => '',
							'theme_location' => 'nav-manual-servidor' ) );?>
						<?php }?>
					</div>
					<h1 class="page__title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php endwhile; else: ?>
					<?php _e( 'Desculpe, nenhuma p&aacute;gina corresponde ao seu crit&eacute;rio.', 'ifpr_theme' ); ?>
					<?php endif; ?>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
