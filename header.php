<!-- Header -->
<header class="container">
	<div class="row justify-content-between menu-row">
		
		<!-- Sidebar Esquerdo Mobile -->
		<button class="menu-esquerdo__toggle col-3 d-sm-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="sidebar__esquerda" aria-expanded="false" aria-label="Menu esquerdo toggle">
			<i class="menu-btn-toggle fas fa-bars"></i>
		</button>
		<!-- Fim Sidebar Esquerdo Mobile -->

		<!-- Marca IFPR -->
		<a href="<?php echo home_url(); ?>" class="col-6 col-md-4 logo__link">
			<?php $campus = get_bloginfo(); ?>
			<svg id="logo_ifpr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239 54" role="img" aria-label="[title + description]">
				<title>Instituto Federal do Paran&aacute;</title>
				<desc>Marca do IFPR</desc>
				<path class="st5" d="M37.4 36.4c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M24.4 10.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z"/>
				<path class="st5" d="M37.4 10.3c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z"/>
				<path class="st5" d="M11.4 23.3c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z"/>
				<path class="st5" d="M24.4 23.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z"/>
				<path class="st5" d="M11.4 36.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M24.4 36.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z"/>
				<path class="st5" d="M11.4 49.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z"/>
				<path class="st5" d="M24.4 49.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z"/>
				<path class="st6" d="M11.9 6c0 3.3-2.7 6-6 6C2.7 11.9 0 9.3 0 6S2.7 0 6 0C9.3 0 11.9 2.7 11.9 6"/>
				<?php
				if ($campus == "Instituto Federal do Paraná"){
					$transformLine1 = "44.1899 38.9971";
					$transformLine2 = "44.4702 52.1841";
				} else {
					$transformLine1 = "43.6553 24.1582";
					$transformLine2 = "43.9331 37.5249";
				}
				?>
				<text transform="matrix(1.0017 0 0 1 <?php echo $transformLine1; ?>)">
					<tspan class="st0 st1 st2">  I</tspan>
					<tspan x="5" class="st0 st1 st2">  NS</tspan>
					<tspan x="25.7" class="st0 st1 st2">  TIT</tspan>
					<tspan x="48.3" class="st0 st1 st2">  U</tspan>
					<tspan x="59.7" class="st0 st1 st2">  T</tspan>
					<tspan x="68.5" class="st0 st1 st2">  O F</tspan>
					<tspan x="92.8" class="st0 st1 st2">  EDER</tspan>
					<tspan x="131" class="st0 st1 st2">  A</tspan>
					<tspan x="141.4" class="st0 st1 st2">  L</tspan>
				</text>
				<text transform="matrix(1.0017 0 0 1 <?php echo $transformLine2; ?>)" class="st0 st3 st4">  Paraná</text>
				<?php if ($campus == "Instituto Federal do Paraná"){
					}else{?>
				<text transform="matrix(1.0017 0 0 1 43.9326 50.5059)" class="st0 st3 st4">  <?php echo $campus; ?></text>
				<?php }; ?>
			</svg>
		</a>
		<!-- Fim Marca IFPR -->
		
		<!-- Busca -->
		<button class="col-3 d-sm-block d-md-none busca-btn" type="button" data-toggle="collapse" data-target="#busca" aria-controls="busca" aria-expanded="false" aria-label="Busca toggle">
		<i class="fas fa-search text-center busca__icone_mobile align-self-center"></i>
		</button>
		
		<div id="busca" class="col-8 d-none d-md-block">
			<form role="search" method="get" class="search-form text-right" action="<?php echo home_url( '/' ); ?>">
				<label class="mb-0">
        			<span class="screen-reader-text"><?php echo _x( 'Pesuisar por:', 'label', 'ifpr_theme' ); ?></span>
       				 <input type="search" class="busca__texto_input" 
							placeholder="<?php echo esc_attr_x( 'Pesquisar por', 'placeholder', 'ifpr_theme' ); ?>"
							value="<?php echo get_search_query(); ?>" name="s"
							title="<?php echo esc_attr_x( 'Pesquisar por:', 'label', 'ifpr_theme' ); ?>" />
    			</label>
    			<button type="submit" class="btn busca__botao" value="Submit"><i class="fas fa-search"></i></button>
			</form>
			<p class="mb-0 text-right busca__link_sei"><?php _e( 'Pesquisa pública', 'ifpr_theme' ); ?> no <a onclick="gtag('event', 'Clique', {'event_category' : 'Pesquisa','event_label' : 'Pesquisa Pública SEI'});" href="https://sei.ifpr.edu.br/sei/modulos/pesquisa/md_pesq_processo_pesquisar.php?acao_externa=protocolo_pesquisar&acao_origem_externa=protocolo_pesquisar&id_orgao_acesso_externo=0"><span class="badge badge-ifpr"><?php _e( 'SEI!', 'ifpr_theme' ); ?><i class="fas fa-external-link-alt"></i></span></a></p>
		</div>
		<!-- Fim Busca -->

		<!-- Menu Principal -->
		<?php wp_nav_menu( array(
			'container' => 'nav',
			'container_class' => 'nav-superior col-12',
			'menu_class' => 'nav',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'items_wrap' => '<ul class="%2$s flex-nowrap align-items-center">%3$s</ul>',
			'item_spacing' => 'preserve',
			'walker' => '',
			'theme_location' => 'nav-superior' 
			) ); 
		?>
		<!-- Fim Menu Principal -->

	</div>
</header>
<!-- Fim Header -->