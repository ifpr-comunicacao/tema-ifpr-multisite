<?php
/*
Template Name: Página Covid-19
Template Post Type: post, page
*/
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body>
		<?php get_template_part("gov"); ?>
		<?php
		get_header();
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<div class="container content">
			<div class="row">
			<?php get_template_part("sidebar_1"); ?><!-- start sidebar 1 -->
				<section class="noticias col-md-9 pb-0"><!-- start content -->
					<div class="row hero-covid">
						<div class="hero-covid__title-bkg">
						<h1 class="hero-covid__title">IFPR<br><span><?php _e( 'contra Covid-19', 'ifpr_theme' ); ?></span></h1>
					</div>
				</div>
				<div class="content-covid">
					<?php the_content();
				endwhile; endif;?>
				</div>
					<?php $query = new WP_Query( array( 'category_name' => 'covid-19') );
					if ( $query->have_posts() ) : $query->the_post(); ?>
					<h3 class="covid__title"><i class="far fa-newspaper"> </i> <?php _e( 'Notícias', 'ifpr_theme' ); ?></h3>
					<section class="row covid covid-news">
					<?php $query = new WP_Query( array( 'category_name' => 'covid-19','posts_per_page' => 6 ));
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
						<article class="covid-news__article col-md-4">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('full',array( 'class' => 'img-fluid'));?>
								<?php endif; ?>
							<p class="covid-news__tag"><?php the_tags("","",""); ?></p>
							<h4 class="covid-news__news-title"><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?></a></h4>
						</article>
						<?php endwhile; endif; ?>
</section>
					<?php
					endif;
					?>
					<h3 class="covid__title mt-3"><i class="far fa-file-alt"></i> <?php _e( 'Documentos Institucionais', 'ifpr_theme' ); ?></h3>
					<div class="covid covid-news mb-4">
							<?php $query = new WP_Query( array( 'pagename' => 'documentos-covid' ));
								if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
							<?php the_content();?>
						<?php endwhile; endif; ?>
					</div>
				</section><!-- end content -->
			<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
