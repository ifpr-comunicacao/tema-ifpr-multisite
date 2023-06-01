<?php
/*
Template Name: Capa de Seção
Template Post Type: Page
*/
?>
<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
	<?php get_template_part("gov"); ?>
	<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="container content">
				<div class="row">
					<?php get_template_part("sidebar_1"); ?>
					<!-- start sidebar -->
					<div class="<?php echo get_post_meta(get_the_ID(), 'class', true); ?>col-md-9 page">
					<?php get_template_part("partials/img-header");?>
						<?php
						/* Menu páginas do mesmo nivel */
						$siblings = wp_list_pages('title_li=&child_of=' . $post->post_parent . '&echo=0' . '&depth=1');
						$has_siblings = wp_list_pages('title_li=&child_of=' . $post->post_parent . '&echo=0' . '&depth=1' . '&exclude=' . $post->ID);
						$has_menu = get_post_meta(get_the_ID(), 'menu', true);
						if (!$has_menu || $has_menu == false) :
							if ($has_siblings && $post->post_parent) : ?>
								<nav class="page-menu-contextual row">
									<ul class="page-menu-contextual-list col-12">
										<?php echo $siblings; ?>
									</ul>
									<div class="menu-contextual-toggle">
										<i class="fas fa-angle-down"></i>
									</div>
								</nav>
						<?php
							endif;
						endif;
						/* Menu páginas do mesmo nivel */
						?>
						<?php get_template_part("nav"); ?>
						<h1 class="class=" page__title""><?php the_title(); ?></h1>
				<?php
				the_content();
			endwhile;
		else :
			get_template_part('partials/content', 'none');
		endif;
				?>
				<?php
				$mypages = get_pages(array('sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent' => $posts[0]->ID)); ?>
				<ul class="menu__pag-raiz"><?php foreach ($mypages as $page) { ?>
						<?php $icon = get_post_meta($page->ID, 'icon', true);
												if (!$icon) {
													$icon = '<span class="ifpr-icon"></span>';
												} ?>
						<?php $class = get_post_meta($page->ID, 'class', true); ?>
						<li class="page-root-item <?php echo $class; ?>"><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $icon; ?> <span class="menu__item"><?php echo $page->post_title; ?></span> <i class="fas fa-angle-right"></i></li></a>
					<?php } ?>
				</ul>
					</div>
					<?php get_footer(); ?>
				</div>
			</div>
</body>

</html>