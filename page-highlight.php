<?php
/*
Template Name: Menu Siblings
Template Post Type: post, page
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
					<div class="col-md-9">
						<?php if (has_post_thumbnail()) : ?>
							<?php $img_top = $post->img_size; ?>
							<figure <?php if ($img_top) : echo 'class="' . $img_top . '"';
									else : echo 'class="sm"';
									endif; ?>>
								<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
							</figure>
						<?php endif; ?>
						<?php
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
						endif; ?>

						<?php $class = $post->class; ?>
						<article <?php if ($class) : ?> class=<?php echo ".$class.";
															endif; ?>>
							<?php get_template_part("nav"); ?>
							<h1 class="page__title"><?php the_title(); ?></h1>
							<?php if (!has_excerpt()) { ?>
								<?php echo ''; ?>
							<?php	} else { ?>
								<p class="page__subtitle"><?php echo get_the_excerpt(); ?></p>
							<?php	}; ?>
							<?php the_content(); ?>
							<div class="crunchify-social">
						<?php 						
							//social share
							echo crunchify_social_sharing_buttons();
						?>
					</div>
					<?php endwhile;
			else :
				get_template_part('partials/content', 'none');
			endif;
					?>
						</article>
					</div>
					<?php get_footer(); ?>
				</div>
			</div>
</body>

</html>