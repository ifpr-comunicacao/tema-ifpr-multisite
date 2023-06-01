<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<div id="page" class="container content">
			<div class="row">
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar1 -->
				<div id="content2" class="col-lg-9">
					<?php get_template_part("nav"); ?>
					<h1 class="page__title"><?php _e( 'Resultado da busca:', 'ifpr_theme' ); ?></h1>
					<ul class="arquivo-noticias__lista fa-ul">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<span class="fa-li" ><i class="fas fa-angle-right"></i></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>|<?php the_time('j F, Y'); ?><?php the_excerpt(); ?></li>
					<?php endwhile;?>
					</ul>
					
					<!-- Paginacao -->
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
						<?php echo bootstrap_pagination(); ?>
						</div>
					</div>
					<!-- Fim Paginacao -->

					<?php else: ?>
					<?php _e( 'Desculpe, nenhuma p&aacute;gina corresponde ao seu crit&eacute;rio.', 'ifpr_theme' ); ?>
					<?php endif; ?>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
