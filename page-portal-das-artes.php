<?php
/**
 * Template Name: Portal das Artes
 */
?>
<!DOCTYPE html>
<?php get_template_part("head");
get_template_part("gov");
get_header();
?>
<body <?php body_class(); ?>>
		<div class="container content portal pt-0">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="row position-relative">
				<section class="col-12 px-0 topo-portal">
					<div class="portal-logo d-none d-md-flex">
						<img class="marca-topo-portal" src="/wp-content/uploads/2020/06/portal-das-artes-marca.png" alt="<?php _e( 'Portal das Artes do IFPR', 'ifpr_theme' ); ?>">
					</div>
					<h5 class="portal-menu-toggle d-flex d-md-none justify-content-between"><?php _e( 'Menu do Portal das Artes', 'ifpr_theme' ) ?><i class="fas fa-plus-circle"></i></h5>
					<?php wp_nav_menu( array(
			'container' => 'nav',
			'container_class' => 'nav-portal',
			'menu_class' => 'nav',
			'echo' => true,
			'fallback_cb' => '',
			'items_wrap' => '<ul class="%2$s d-none d-md-flex">%3$s</ul>',
			'item_spacing' => 'preserve',
			'walker' => '',
			'theme_location' => 'nav-portal' ) ); ?>
					</section>
				<section class="col-12">
					<div class="row justify-content-center">

						<?php if ( has_post_thumbnail() ) : ?>
							<article class="col-12 portal-welcome py-3" style="background-image: linear-gradient(0deg, hsl(354, 70%, 44%, 0.75) 45%, hsla(134,61%,41%,0.25) 100%),url('<?php the_post_thumbnail_url(); ?>');">
						<?php endif; ?>
						<div class="row">
								<div class="col-12 col-md-6 px-md-5 portal-header">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div>
						</div>
						<small><?php the_post_thumbnail_caption(); ?></small>
						</article>
						<?php $mypages = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID ));
						 if( $mypages ) :
							foreach( $mypages as $page ){
								$title = $page->post_title;
								$noAccTitle = remove_accents($title);?>
			<article id="<?php echo sanitize_title_with_dashes( $noAccTitle ); ?>" class="col-12 portal-page">
				<div class="row">
					<h2 class="portal-page-title col-12"><?php echo get_post_meta( $page->ID, 'icon', true ); ?><?php echo $page->post_title; ?></h2>
			<div class="portal-page-content col-12">
				<?php echo $page->post_content; ?>
			</div>
					</div>
			</article>
						<?php };?>
						<?php else :
							get_template_part( 'partials/content', 'none' );
							endif;
						?>
					</div>
					</section>
	<?php get_footer(); ?>
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar1 -->
			</div>
							<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</body>
</html>