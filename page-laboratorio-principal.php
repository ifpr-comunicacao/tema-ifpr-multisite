<?php

/**
 * Template Name: Catálogo de Laboratórios - Principal
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
	<?php get_template_part("gov"); ?>
	<?php get_header(); ?>
	<div class="container content">
		<div class="row">
			<!-- sidebar -->
			<?php get_template_part("sidebar_1"); ?>
			<!-- content -->
			<div id="content2" class="col-md-9">
				<!-- loop padrao -->
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<?php if (has_post_thumbnail()) : ?>
							<div class="row cat-lab-topo" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							<?php else : ?>
								<div class="row cat-lab-topo" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/cat-lab/cat-lab-ifpr-capa.jpg' ?>');">
								<?php endif; ?>
								<h1 class="cat-lab-titulo text-center"><?php the_title(); ?></h1>
								<svg aria-hidden="true" focusable="false" class="seta-baixo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
									<path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
								</svg>
								</div>
								<?php the_content(); ?>
						<?php endwhile;
				else :
					get_template_part('partials/content', 'none');
				endif;
						?>
						<!-- fim loop padrao -->

						<!-- MODELO DE NAVEGAÇÃO POR ABAS -->
						<h2 class="icone-campus">Laboratórios por Campus</h2>
						<div class="cat-lab-nav-abas-container">
							<ul class="nav nav-tabs aba-verde" id="cat-lab-Tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="aba-AtoC" data-toggle="tab" href="#AtoC" role="tab" aria-controls="AtoC" aria-selected="true">A - C</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="aba-FtoL" data-toggle="tab" href="#FtoL" role="tab" aria-controls="FtoL" aria-selected="false">F - L</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="aba-PtoQ" data-toggle="tab" href="#PtoQ" role="tab" aria-controls="PtoQ" aria-selected="false">P - Q</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="aba-TtoU" data-toggle="tab" href="#TtoU" role="tab" aria-controls="TtoU" aria-selected="false">T - U</a>
								</li>
							</ul>
							<div class="tab-content" id="cat-lab-TabContent">
								<div class="tab-pane fade show active" id="AtoC" role="tabpanel" aria-labelledby="aba-AtoC">
									<div class="tab-item">
										<p class="tab-index">A</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/arapongas/">Arapongas</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/assis-chateaubriand/">Assis Chateaubriand</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/astorga/">Astorga</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">C</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/campo-largo/">Campo Largo</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/capanema/">Capanema</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/cascavel/">Cascavel</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/colombo/">Colombo</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/coronel-vivida/">Coronel Vivida</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/curitiba/">Curitiba</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="FtoL" role="tabpanel" aria-labelledby="aba-FtoL">
									<div class="tab-item">
										<p class="tab-index">F</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/foz-do-iguacu/">Foz do Iguaçu</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">G</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/goioere/">Goioêre</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">I</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/irati/">Irati</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/ivaipora/">Ivaiporã</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">J</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/jacarezinho/">Jacarezinho</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/jaguariaiva/">Jaguariaiva</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">L</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/londrina/">Londrina</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="PtoQ" role="tabpanel" aria-labelledby="aba-PtoQ">
									<div class="tab-item">
										<p class="tab-index">P</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/palmas/">Palmas</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/paranagua/">Paranaguá</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/paranavai/">Paranavaí</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/pinhais/">Pinhais</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/pitanga/">Pitanga</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">Q</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/quedas-do-iguacu/">Quedas do Iguaçu</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="TtoU" role="tabpanel" aria-labelledby="aba-TtoU">
									<div class="tab-item">
										<p class="tab-index">T</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/telemaco-borba/">Telêmaco Borba</a>
											</li>
										</ul>
									</div>
									<div class="tab-item pr-0">
										<p class="tab-index">U</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/umuarama/">Umuarama</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/uniao-da-vitoria/">União da Vitória</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- MODELO DE NAVEGAÇÃO POR ABAS -->


						<h2 class="icone-area">Laboratórios por Área</h2>
						<div class="cat-lab-nav-abas-container mb-3">
							<ul class="nav nav-tabs aba-vermelho" id="cat-lab-Tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="aba-AtoF" data-toggle="tab" href="#AtoF" role="tab" aria-controls="AtoF" aria-selected="true">A - H</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="aba-ItoS" data-toggle="tab" href="#ItoS" role="tab" aria-controls="ItoS" aria-selected="false">L - S</a>
								</li>
							</ul>
							<div class="tab-content" id="cat-lab-TabContent">
								<div class="tab-pane fade show active" id="AtoF" role="tabpanel" aria-labelledby="aba-AtoF">
									<div class="tab-item">
										<p class="tab-index">A</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/agrarias/">Agrárias</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">B</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/biologicas/">Biológicas</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">C</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/ciencias-ambientais/">Ciências Ambientais</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">E</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/engenharias/">Engenharias</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/exatas-e-da-terra/">Exatas e da Terra</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">H</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/humanas/">Humanas</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="ItoS" role="tabpanel" aria-labelledby="aba-ItoS">
									<div class="tab-item">
										<p class="tab-index">L</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/linguistica-letras-e-artes/">Linguistica, Letras e Artes</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">M</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/multidisciplinar/">Multidisciplinar</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">R</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/robotica-mecatronica-e-automacao/">Robótica, Mecatrônica e Automação</a>
											</li>
										</ul>
									</div>
									<div class="tab-item">
										<p class="tab-index">S</p>
										<ul class="tab-lista">
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/saude/">Saúde</a>
											</li>
											<li>
												<a class="tab-lista-item" href="<?php echo get_home_url(); ?>/area/sociais-aplicadas/">Sociais Aplicadas</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- MODELO DE NAVEGAÇÃO POR ABAS -->
							</div>
							<!-- fim content -->
							<!-- footer -->
							<?php get_footer(); ?>
			</div>
		</div>
</body>

</html>