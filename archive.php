<!DOCTYPE html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php get_template_part("gov"); ?>
		<?php get_header(); ?>
		<div id="page" class="container content">
			<div class="row">
				<?php get_template_part("sidebar_1"); ?><!-- start sidebar1 -->
				<div id="content2" class="col-md-9">
					<?php get_template_part("nav"); ?>
					<h1 class="page__title">
						<i class="fas fa-newspaper"></i> 
						<?php _e('Not&iacute;cias de ', 'ifpr_theme' ); the_time('F, Y'); ?>
					</h1>
					<ul class="arquivo-noticias__lista fa-ul">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li><span class="fa-li" ><i class="fas fa-angle-right"></i></span><?php the_time('j F, Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					</ul>

					<div class="row">
						<!-- Paginacao -->
						<div class="col-12 d-flex justify-content-center">
							<?php echo bootstrap_pagination(); ?>
						</div>
						<!-- Fim Paginacao -->
						<!-- Filtro mensal -->
						<section class="noticias-arquivo-lista col-12 mb-3">
							<select class="custom-select" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
							<option value=""><?php echo esc_attr( __( 'Selecione o mês' ) ); ?></option>
							<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
							</select>
						</section>
						<!-- Fim Filtro mensal -->
					</div>

					<?php else : ?>
					<?php _e( 'Desculpe, nenhuma not&iacute;cia foi publicada neste m&ecirc;s.', 'ifpr_theme' ); ?>
					<?php endif; ?>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
