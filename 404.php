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
					<h1  class="display-1">Erro 404</h1>
					<h2 class="m-0">
						<?php _e( 'Essa p&aacute;gina n&atilde;o existe ou foi removida.', 'ifpr_theme' ); ?>
					</h2>
					<p><?php _e( 'Voc&ecirc ser&aacute; redirecionado para uma lista que pode conter o que estava procurando.', 'ifpr_theme' ); ?></p>
				</div>
				<?php get_footer(); ?>
			</div>
		</div>
	</body>
</html>
