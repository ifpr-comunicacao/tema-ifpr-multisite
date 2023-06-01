<?php
/*
Template Name: Página do Servidor - Artigo
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
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar-left -->
				<div class="<?php echo $post->class ?> col-md-9 article">
          <div class="topo-servidor">
						<a class="d-flex" href="/servidor/"><i class="fas fa-chevron-left mr-2"></i><span class="d-none d-sm-block">capa</span></a>
          <h1 class="topo-servidor__title"><?php _e( 'P&aacute;gina do Servidor', 'ifpr_theme' ); ?></h1>
        </div>
		<!-- MENU -->
        <?php wp_nav_menu( array(
                    'menu_class' => 'nav-servidor',
                    'echo' => true,
                    'fallback_cb' => '',
                    'item_spacing' => 'preserve',
                    'walker' => '',
                    'theme_location' => 'nav-servidor' ) ); ?>

					<?php $top_bkg = $post->title_bkg;
					if (!$top_bkg){
						$top_bkg = 'bkg-grey pt-3';
					}?>
						<div class="article-top <?php echo $top_bkg; ?> col-12 mr-1">
							<?php get_template_part("nav"); ?>
							<?php $icon = $post->icon;
							if(!$icon){
								$icon = '';
							}?>
						<h2 class="article-top__title"><?php echo $icon ?> <?php the_title(); ?></h2>
 
					</div>
					<?php
						the_content();
					endwhile; endif;?>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
