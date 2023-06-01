<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<!-- start container content -->
		<div id="page" class="container content">
			<!-- start row -->
			<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar -->
				<!-- start col-md-9 -->
				<div id="content2" class="col-md-9">
					
					<?php get_template_part("nav"); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<p class="destaque__tag"><?php the_tags("","",""); ?></p>
					<h1 class="post__title"><?php the_title(); ?></h1>
					<p><?php _e( 'Publicado em ', 'ifpr_theme'); ?><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F, Y'); ?></time></p>
						
					<figure>
						<?php echo wp_get_attachment_image( get_the_ID(), 'full', '', array( 'class' => 'img-fluid')); ?>
						<figcaption class="entry-caption">
							<?php if ( has_excerpt() ) : ?>
								<div class="entry-caption"><?php the_excerpt(); ?></div><!-- exibe a legenda da imagem -->
							<?php endif; ?>
						</figcaption>
					</figure>
					
					<?php the_content(); //caso exista, exibe a descricao da imagem

					endwhile; else :
						_e( 'Desculpe, nenhuma p&aacute;gina corresponde ao seu crit&eacute;rio.', 'ifpr_theme' );
					endif; 
					?>

				</div>
				<!-- end col-md-9 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container content -->
		<?php get_footer(); ?>
	</body>
</html>