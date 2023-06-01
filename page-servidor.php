<?php
/*
Template Name: Página do Servidor
Template Post Type: post, page
*/
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body>
	<?php get_template_part("gov"); ?>
	<?php get_header(); ?>
	<div class="container content">
		<div class="row">
			<?php get_template_part("sidebar_1"); ?>
			<!-- start sidebar -->
			<section class="noticias col-md-9 pb-0">
				<!-- start content -->
				<div class="hero-servidor">
					<h1 class="hero-servidor__title col-sm-6"><?php _e('P&aacute;gina do Servidor', 'ifpr_theme'); ?></h1>
				</div>
				<?php
				$mypages = get_pages(array('sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID)); ?>
				<!-- MENU -->
        <?php wp_nav_menu( array(
                    'menu_class' => 'nav-servidor',
                    'echo' => true,
                    'fallback_cb' => '',
                    'item_spacing' => 'preserve',
                    'walker' => '',
                    'theme_location' => 'nav-servidor' ) ); ?>
				<div class="grid-2-col mb-3">
					<?php dynamic_sidebar('widget-servidor'); ?>
				</div>
				<?php $query = new WP_Query(array('category_name' => 'servidor'));
				if ($query->have_posts()) : $query->the_post(); ?>
					<section class="row news-servidor">
						<h2 class="news-servidor__title col-12"><i class="far fa-newspaper"></i> <?php _e('Not&iacute;cias', 'ifpr_theme'); ?></h2>
						<?php $query = new WP_Query(array('category_name' => 'servidor', 'posts_per_page' => 4));
						if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
								<section class="news-servidor__article col-lg-6">
									<p class="news-servidor__tag"><?php the_tags("", "", ""); ?></p>
									<h3 class="news-servidor__news-title"><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
								</section>
						<?php endwhile;
						endif; ?>
					</section>
					<section class="row justify-content-between pr-3">
						<div class="avisos mb-3">
							<h3 class="avisos__title"><i class="fas fa-bullhorn"></i> <?php _e('Avisos', 'ifpr_theme'); ?></h3>
							<ul class="avisos__list fa-ul ml-4">
								<?php query_posts('category_name=avisos&posts_per_page=5'); ?>
								<?php while (have_posts()) : the_post(); ?>
									<li class="avisos__item"><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?> </a></li><!-- quantidade de noticias no campo mais noticias -->
								<?php endwhile; ?>
							</ul>

							<a class="avisos__plus mb-0" href="<?php echo home_url(), "/category/avisos/"; ?>"><i class="fas fa-plus-square"></i> <?php _e('mais avisos', 'ifpr_theme'); ?></a>
						</div>

						<div class="acesso-rapido mb-3">
							<h3 class="acesso-rapido__title"><i class="fas fa-fast-forward"></i> <?php _e('Acesso R&aacute;pido', 'ifpr_theme'); ?></h3>
							<?php $query = new WP_Query(array('pagename' => 'acesso-rapido'));
							if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
									<?php the_content(); ?>
							<?php endwhile;
							endif; ?>
						</div>

		</div>
		</section>
		</section>
	<?php
				endif;
	?>
	</section><!-- end content -->
	<?php get_footer(); ?>
	</div>
	</div>
</body>

</html>