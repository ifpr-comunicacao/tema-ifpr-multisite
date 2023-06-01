<!DOCTYPE  html>
<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
		<?php 
			get_template_part("gov");
			get_header(); 
		?>
		<!-- #Page Container Content -->
		<div id="page" class="container content">
			<!-- Row -->
			<div class="row">
				
				<!-- Sidebar -->
				<?php get_template_part("sidebar_1"); ?>
				
				<!-- #Content2 -->
				<div id="content2" class="col-md-9">
					
					<!-- Breadcrumb -->
					<?php get_template_part("nav"); ?>

					<!-- Content entry -->
					<h1>
						<i class="fas fa-newspaper"></i>
						<?php _e( 'Publicações sobre ', 'ifpr_theme' ); the_category( ', ' ); ?>
					</h1>
					<ul class="arquivo-noticias__lista fa-ul">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<span class="fa-li" >
									<i class="fas fa-angle-right"></i>
								</span>
								<?php the_time('j F, Y'); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
					<!-- Fim Content entry -->

					<!-- Paginacao -->
					<div class="row">
						<div class="col-12 d-flex justify-content-center">
						<?php echo bootstrap_pagination(); ?>
						</div>
					</div>
					<!-- Fim Paginacao -->

					<?php else : ?>
						<?php _e( 'Desculpe, nenhuma not&iacute;cia foi publicada neste m&ecirc;s.', 'ifpr_theme' ); ?>
					<?php endif; ?>

				</div>
				<!-- Fim #Content2 -->

				<!-- Footer -->
				<?php get_footer(); ?>

			</div>
			<!-- Fim Row -->
		</div>
		<!-- Fim #Page Container Content -->
	</body>
</html>
