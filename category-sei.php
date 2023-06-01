<?php
/*
Template Name: Página do Sei
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
				<div class="hero-sei">
					<h1 class="hero-sei__title col-sm-6"><?php _e('Portal do SEI/IFPR', 'ifpr_theme'); ?></h1>
				</div>
				<div class="grid-2-col mb-3">
					<div class="nav-sei__block">
						<div style="padding-left: 0.5rem;">
							<strong><h3>&Aacute;rea Interna</h3></strong>
						</div>
						<div style="display:flex">
							<ul class="nav-sei" style="width:50%;">	
								<li class="nav-sei__item ">
									<a href="https://sei.ifpr.edu.br/sip/login.php?sigla_orgao_sistema=IFPR&sigla_sistema=SEI" style="background-color: var(--verde);">
										<i class="fa fa-user"></i>Acesso Interno ao SEI!
									</a>
								</li>
								<li class="nav-sei__item ">
									<a href="https://www.escolavirtual.gov.br/curso/74" style="background-color: var(--verde);">
										<i class="fas fa-street-view"></i>Capacitação
									</a>
								</li>
							</ul>
							<ul class="nav-sei" style="width:50%">
								<li class="nav-sei__item ">
									<a style="background-color: var(--verde);" href="https://glpi.ifpr.edu.br/glpi/index.php?redirect=%2Ffront%2Fticket.form.php%3Fitilcategories_id%3D339">
										<i class="fas fa-clipboard-check"></i>Atendimento ao Servidor
									</a>
								</li>
								<li class="nav-sei__item ">
									<a style="background-color: var(--verde);" href="https://sei.ifpr.edu.br/sip/login.php?sigla_orgao_sistema=IFPR&sigla_sistema=SIP">
										<i class="fa fa-users"></i>Gestão de Usuários
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="nav-sei__block">
						<div style="padding-left: 0.5rem;">
							<strong><h3>&Aacute;rea Externa</h3></strong>
						</div>
						<div style="display:flex">
							<ul class="nav-sei" style="width:50%">	
								<li class="nav-sei__item ">
									<a style="background-color: var(--azul);border-color: var(--azul-escuro);" href="https://sei.ifpr.edu.br/sei/controlador_externo.php?acao=usuario_externo_logar&id_orgao_acesso_externo=0">
										<i class="fa fa-user-circle"></i>Acesso Externo ao SEI!
									</a>
								</li>
								<li class="nav-sei__item ">
									<a style="background-color: var(--azul);border-color: var(--azul-escuro);" href="#">
										<i class="fa fa-book"></i>Manual do Usu&aacute;rios Externo
									</a>
								</li>
							</ul>
							<ul class="nav-sei" style="width:50%">
								<li class="nav-sei__item ">
									<a style="background-color: var(--azul);border-color: var(--azul-escuro);" href="https://sei.ifpr.edu.br/sei/controlador_externo.php?acao=usuario_externo_avisar_cadastro&id_orgao_acesso_externo=0">
										<i class="fa fa-user-plus"></i>Cadastrar Usuário Externo
									</a>
								</li>
								<li class="nav-sei__item ">
									<a style="background-color: var(--cinza-escuro);border-color: var(--azul-escuro);" href="https://assinador.iti.br">
									<i class="fa fa-certificate"></i>Assinador GOV.BR
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			
				<div class="grid-1-col mb-3">
					<div><strong><h3>Serviços Comuns</h3></strong></div>
					<ul class="grid-3-col mb-3">
						<li class="nav-sei__item ">
							<a href="https://sei.ifpr.edu.br/sei/modulos/pesquisa/md_pesq_processo_pesquisar.php?acao_externa=protocolo_pesquisar&acao_origem_externa=protocolo_pesquisar&id_orgao_acesso_externo=0" style="background-color: var(--cinza-claro); color: var(--cinza-escuro)">
								<i class="far fa-clock"></i>Consultar Processos e Documentos
							</a>
						</li>
						<li class="nav-sei__item ">
							<a href="https://sei.ifpr.edu.br/sei/publicacoes/controlador_publicacoes.php?acao=publicacao_pesquisar&acao_origem=publicacao_pesquisar&id_orgao_publicacao=0" style="background-color: var(--cinza-claro); color: var(--cinza-escuro)">
								<i class="fas fa-street-view"></i>Consultar Publicações Eletrônicas
							</a>
						</li>
						<li class="nav-sei__item ">
							<a style="background-color: var(--cinza-claro); color: var(--cinza-escuro)" href="https://sei.ifpr.edu.br/sei/controlador_externo.php?acao=documento_conferir&id_orgao_acesso_externo=0">
								<i class="fas fa-clipboard-check"></i>Consultar Autenticidade de Documentos
							</a>
						</li>
					</ul>
				</div>
				<div class="grid-1-col mb-3">
					<div><strong><h3>Outros</h3></strong></div>
					<ul class="grid-3-col mb-3">
						<li class="nav-sei__item ">
							<a style="background-color: var(--cinza-claro); color: var(--cinza-escuro)" href="https://www.gov.br/governodigital/pt-br/assinatura-eletronica">
								<i class="fas fa-clipboard-check"></i>Manual do Assinador
							</a>
						</li>
					<?php
					/* Menu páginas filhas */
					$mypages = get_pages(array('sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID)); ?>
					<?php if (!empty($mypages)) { ?>
					<?php foreach ($mypages as $page) { ?>
						<?php $icon = get_post_meta($page->ID, 'icon', true);
												if (!$icon) {
													$icon = '<i class="ifpr-icon"></i>';
												} ?>
						<?php $class = get_post_meta($page->ID, 'class', true); ?>
						<li class="nav-sei__item <?php echo $class; ?>">
							<a style="background-color: var(--cinza-claro); color: var(--cinza-escuro)" href="<?php echo get_page_link($page->ID); ?>">
								<?php echo $icon; ?> <span class="menu__item"><?php echo $page->post_title; ?></span>
							</a>
						</li>
						<?php } ?>
					<?php } 
					/* Menu páginas filhas */?>
					</ul>
				</div>
				
				
				<?php
				/* Menu de noticia sobre o SEI */
				$query = new WP_Query(array('category_name' => 'sei'));
				if ($query->have_posts()) : $query->the_post(); ?>
					<section class="row news-sei">
						<h2 class="news-sei__title col-12"><i class="far fa-newspaper"></i> <?php _e('Not&iacute;cias', 'ifpr_theme'); ?></h2>
						<?php $query = new WP_Query(array('category_name' => 'sei', 'posts_per_page' => 4));
						if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
								<section class="news-sei__article col-lg-6">
									<p class="news-sei__tag"><?php the_tags("", "", ""); ?></p>
									<h3 class="news-sei__news-title"><a href="<?php the_permalink(); ?>"> <?php the_title_attribute(); ?></a></h3>
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
