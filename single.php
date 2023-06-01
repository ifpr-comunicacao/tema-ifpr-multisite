<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="page" class="container content">
			<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar1 -->
				<div id="content2" class="col-md-9">
					<?php get_template_part("nav");?>
					<p class="destaque__tag"><?php the_tags("","",""); ?></p>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-data"><?php _e( 'Publicado em', 'ifpr_theme' ); ?> <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time></p>
						<?php if ( has_post_thumbnail() ) : ?>
					<figure>
						<?php the_post_thumbnail('full',array( 'class' => 'img-fluid'));?>
						<figcaption><?php the_post_thumbnail_caption();?></figcaption>
					</figure>
						<?php endif; ?>
					<div class="texto__noticia">
						<?php the_content();?>
					</div>
					<div class="crunchify-social">
						<?php 						
							//social share
							echo crunchify_social_sharing_buttons();
						?>
					</div>
					
					<?php endwhile; else: ?>
					<?php _e( 'Desculpe, nenhuma p&aacute;gina corresponde ao seu crit&eacute;rio.', 'ifpr_theme' ); ?>
					<?php endif;
					$orig_post = $post;
					global $post;
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
					$tag_ids = array();
					foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					$args=array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=>4, // Number of related posts to display.
						'ignore_sticky_posts'=>1
						);
					$my_query = new WP_Query( $args );
					if ($my_query->have_posts()){?>
						<h3 class="leia_mais__titulo"><i class="fas fa-plus-circle"></i> <?php _e( 'Leia mais', 'ifpr_theme' ); ?></h3>
						<ul class="fa-ul">
						<?php
						  while( $my_query->have_posts() ) {
						  $my_query->the_post();
						  ?>
							<li><span class="fa-li" ><i class="fas fa-angle-right"></i></span><a rel="external" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						  <?php }
						  }}
						  $post = $orig_post;
						  wp_reset_query();
						?>
						</ul>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
