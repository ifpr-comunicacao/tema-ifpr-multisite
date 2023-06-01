<!DOCTYPE html>
	<?php get_template_part("head"); ?>
	<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) NC-UFPR-->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRG5LZ8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
		<?php 
		get_template_part( "gov" );
		get_header();
		?>

		<!-- Container Content -->
		<div class="container nonmodal">
			<!-- Nonmodal -->
			<?php dynamic_sidebar('nonmodal-rodape'); ?>
		</div>
		<div class="container content">
			<!-- Row -->
			<div class="row">
			<!-- Sidebar 1 -->
			<?php get_template_part("sidebar_1"); ?>

				<!-- Noticias -->
				<section class="noticias col-md-9 col-lg-6 pt-3">
					<?php
					//Inicio Loop
					if (have_posts()) :
						the_post();
					?>

					<!-- Noticia Destaque -->
					<article class="destaque">
						<p class="destaque__tag"><?php the_tags("","",""); ?></p>
						<h2 class="destaque__titulo"><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h2>
						<?php 
							if ( has_post_thumbnail() ) : 
								the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ));
							endif; 
							echo wp_trim_words( get_the_excerpt(), 21 ); 
						?>
					</article>
					<!-- Fim Noticia Destaque -->

					<!-- Noticia Complementar -->
					<div class="row noticias-complementares">
						<?php
							$i = 1;
							while ($i <= 4) : the_post(); // Qtd Noticia Secundaria
						?>
							<div class="col-lg-6 mb-3">
								<p class="complementares__tag"><?php the_tags("","",""); ?></p>
								<h4 class="complementares__titulo"><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?></a></h4>
								<?php echo wp_trim_words( get_the_excerpt(), 21 ); ?>
							</div>
						<?php $i++; endwhile; ?>

                        <!-- Quadro PDI-->
                                        <div class="col-12">
                                            <div class="pdi-banner">
                                                <svg id="Camada_2" data-name="Camada 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 277.86 207.9">
                                                    <g id="Camada_1-2" data-name="Camada 1">
                                                        <path style="fill:#009ee2" d="M24.86 207.9.4 183.44l79.29-79.29L0 24.46 24.46 0l104.16 104.15L24.86 207.9z" />
                                                        <path style="fill:#e20613" d="m99.49 207.9-24.47-24.46 79.29-79.29-79.69-79.69L99.09 0l104.15 104.15L99.49 207.9z" />
                                                        <path style="fill:#39a935" d="m174.11 207.9-24.47-24.46 79.29-79.29-79.68-79.69L173.71 0l104.15 104.15L174.11 207.9z" />
                                                        <path style="fill:#0093d2" d="M79.69 104.15.4 183.44l24.46 24.46 103.76-103.75-.2-.2H79.49l.2.2z" />
                                                        <path style="fill:#d10a11" d="m154.31 104.15-79.29 79.29 24.47 24.46 103.75-103.75-.2-.2h-48.93l.2.2z" />
                                                        <path style="fill:#369d32" d="m228.73 103.95.2.2-79.29 79.29 24.47 24.46 103.75-103.75-.2-.2h-48.93z" />
                                                        <path class="cls-7" d="M86.35 85.14c0 12.52-3.91 22.09-11.73 28.72-7.82 6.63-18.95 9.94-33.37 9.94H30.67v41.37H6V48.87h37.15c14.11 0 24.83 3.04 32.18 9.11 7.34 6.07 11.02 15.13 11.02 27.17ZM30.66 103.6h8.11c7.58 0 13.26-1.5 17.02-4.49 3.76-3 5.65-7.36 5.65-13.09s-1.58-10.05-4.73-12.81c-3.16-2.76-8.1-4.14-14.84-4.14H30.65v34.52ZM204.8 105.9c0 19.15-5.45 33.81-16.35 43.99-10.9 10.18-26.64 15.27-47.21 15.27h-32.93V48.87h36.51c18.98 0 33.73 5.01 44.23 15.04 10.5 10.02 15.75 24.02 15.75 42Zm-25.62.64c0-24.98-11.03-37.47-33.09-37.47h-13.13v75.73h10.58c23.76 0 35.64-12.75 35.64-38.26ZM228.9 165.17V48.87h24.66v116.3H228.9Z" />
                                                    </g>
                                                </svg>

                                                <div class="pdi-text">
                                                    <p>Plano de <br>Desenvolvimento<br> Institucional</p>
                                                    <p class="pdi-ano">IFPR 2024-2028</p>
                                                    <a href="/gestao-e-administracao/planejamento-institucional/plano-de-desenvolvimento-institucional-pdi/" class="icone-seta-dir">Saiba mais sobre o PDI</a>
                                                </div>
                                            </div>
                                        </div>

						<div class="mais-noticias col-12">
							<h3><i class="fas fa-newspaper"></i> <?php _e( 'Not&iacute;cias', 'ifpr_theme' ); ?></h3>
							<ul class="mais-noticias__lista">
							<?php
								$i = 1;
								while ($i <= 5) : the_post(); // Qtd Noticia Lista
							?>
								<li><i class="fas fa-angle-right"></i><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?> </a></li><!-- quantidade de noticias no campo mais noticias -->
						<?php 
							$i++; endwhile;
							wp_get_archives( array( 'type' => 'monthly', 'limit' => 1, 'format' => 'custom', 'before' => '<i class="fas fa-plus-square"></i> Mais notícias: ' ) ); 
						?>
							</ul>
						</div>
					</div>
					<!-- Fim Noticia Complementar -->

					<?php else : ?> 
						<div class="row">
						<!-- Caso não encontre nada -->
						<?php _e( 'Desculpe, infelizmente ainda não publicamos nada!', 'ifpr_theme' ); ?>
						</div>					
					<?php endif; ?>

					<!-- Sidebar Centro-->
					<div class="row">
						<?php dynamic_sidebar( 'centro' ); ?>
					</div>
					
					<!-- Like box Facebook -->
					<section class="row widget-fb">
					<?php
						// var in /partials/meta-head.php
					get_template_part('partials/meta', 'head');
						global $fb_likebox;
					?>
					<h3><i class="fab fa-facebook-square"></i> O IFPR no Facebook</h3>
					<iframe class="fb-likebox"
						src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $fb_likebox; ?>%2F&tabs&width=560&height=102&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
						width="560" height="102" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media">
					</iframe>
				</section>
					<!-- Fim Like box Facebook -->

					<!-- Conexao IFPR -->
					<section class="row conexao">
						<div class="conexao__titulo col-12">
							<h3><i class="fas fa-tv"></i> <?php _e( 'Conex&atilde;o IFPR', 'ifpr_theme' ); ?></h3>
						</div>
						<?php dynamic_sidebar( 'video01' ); ?>
						<?php dynamic_sidebar( 'video02' ); ?>
						<p class="col-12 mt-3">
							<?php _e( 'Acesse nosso canal ', 'ifpr_theme' ); ?>
								<a href="https://www.youtube.com/conexaoifpr/">
									<span class="badge badge-ifpr"> <?php _e( 'Conexão IFPR', 'ifpr_theme' ); ?></span>
								</a>
								<?php _e( ' para assistir mais vídeos.', 'ifpr_theme' ); ?>
						</p>
					</section>
					<!-- Fim Conexao IFPR -->

				</section>
				<!-- Fim Noticias -->

			<!-- Sidebar 2 -->
			<?php get_template_part("sidebar_2"); ?>
			
			<!-- Footer -->
			<?php get_footer(); ?>

			</div>
			<!-- Fim Row -->
		</div>
		<!-- Fim Container Content -->
	</body>
</html>
