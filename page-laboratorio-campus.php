<?php

/**
 * Template Name: Catálogo de Laboratórios - Campus
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
	<?php get_template_part("gov"); ?>
	<?php get_header(); ?>
	<div id="page" class="container content">
		<div class="row">
			<!-- sidebar -->
			<?php get_template_part("sidebar_1"); ?>

			<!-- content -->
			<div id="content2" class="col-md-9">

				<!-- loop padrao -->
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<?php if (has_post_thumbnail()) : ?>
							<div class="row cat-lab-topo-campus" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 40%), url('<?php the_post_thumbnail_url(); ?>');">
							<?php else : ?>
								<div class="row cat-lab-topo-campus" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 40%), url('<?php echo get_template_directory_uri() . '/assets/images/cat-lab/cat-lab-ifpr-capa.jpg' ?>');">
								<?php endif; ?>
								<p class="lab-entalhe">
									<a href="/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/">Catálogo de Laboratórios do IFPR</a>
								</p>
								<h1 class="cat-lab-page-title icone-campus"><?php the_title(); ?></h1>
								</div>
								<?php the_content(); ?>
						<?php endwhile;
				else :
					get_template_part('partials/content', 'none');
				endif;
						?>
						<!-- fim loop padrao -->


						<!--lab por area campus conteúdo -->
						<div class="lab-campus-areas mt-3">

							<?php
							$page_name = get_the_title();
							$args = array(
								'post_type' => 'laboratory',
								'orderby' => 'name',
								'order'     => 'ASC',
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'campus',
										'field'    => 'slug',
										'terms'    => $page_name
									),
								),
							);
							?>

							<?php
							// the area query
							$the_query = new WP_Query($args);
							?>

							<?php if ($the_query->have_posts()) : ?>

								<!-- loop Area -->
								<?php $areas = array(); ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<?php foreach (get_the_terms(get_the_ID(), 'area') as $tax) : ?>
										<?php $areas[] = $tax->name; ?>
									<?php endforeach; ?>
							<?php endwhile;
							endif; ?>
							<?php $areas_unicas = array_unique($areas); ?>
							<?php sort($areas_unicas); ?>
							<!-- loop Area fim -->
							<!-- Lab loop -->
							<?php foreach ($areas_unicas as $lab_area) : ?>
								<div class="lab-area">
									<?php $template_url = get_template_directory_uri(); ?>
									<button class="cat-lab-btn area-pic card-<?php echo sanitize_title($lab_area); ?> fechado">
										<img src="<?php echo $template_url; ?>/assets/images/cat-lab/angle-up-solid.svg" class="btn-slide">
										<?php echo '<h3 class="cat-lab-card-title">' . __($lab_area) . '</h3>'; ?>
									</button>
									<?php $args_labs = array(
										'post_type' => 'laboratory',
										'order'     => 'ASC',
										'posts_per_page' => -1,
										'tax_query' => array(
											'relation' => 'AND',
											array(
												'taxonomy' => 'campus',
												'field'    => 'slug',
												'terms'    => $page_name
											),
											array(
												'taxonomy' => 'area',
												'field'    => 'slug',
												'terms'    => $lab_area
											),
										),
									);
									$the_lab_query = new WP_Query($args_labs); ?>
									<?php if ($the_lab_query->have_posts()) : ?>
										<ul class="cat-lab-list">
											<?php while ($the_lab_query->have_posts()) : $the_lab_query->the_post(); ?>
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endwhile; ?>
										</ul>
									<?php else : ?>
										<p><?php _e('Desculpe, nenhum laboratório com esses critérios.'); ?></p>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
							<!-- Lab loop -->
							<?php wp_reset_postdata(); ?>

						</div>
							</div>
							<?php get_footer(); ?>
			</div>
		</div>
</body>

</html>