<footer>
	<div class="footer-menu">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div>
	<div id="footer-brasil" class="row"></div>
	<?php dynamic_sidebar( 'address' ); ?>
</footer>

<!-- Voltar ao topo -->
<a href="#0" class="cd-top js-cd-top"><i class="fas fa-arrow-up"></i> Topo</a>

<!-- Barra Brasil -->
<script defer="defer" src="//barra.brasil.gov.br/barra_2.0.js"></script>

<!-- Plugin do facebook -->
<div id="fb-root"></div>
<!-- Fim Plugin do facebook -->

<!--  Consentimento -->
<?php get_template_part("cookies"); ?>

<?php
	wp_footer();