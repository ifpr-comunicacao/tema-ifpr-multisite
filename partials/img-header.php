<?php $img_top = $post->img_size; ?>
<?php $img_pos = $post->position; ?>
<?php if (has_post_thumbnail()) : ?>
	<figure <?php if ($img_top) : echo 'class="' . $img_top .' '. $img_pos .' "';
			else : echo 'class="sm'.' '.$img_pos.'"';
			endif; ?>>
		<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
	</figure>
	<?php else : ?>
		<?php $default_image = 'https://ifpr.edu.br/wp-content/uploads/2020/07/topo-institucional.png';?>
	<figure <?php if ($img_top) : echo 'class="' . $img_top .' '. $img_pos .' "';
			else : echo 'class="sm'.' '.$img_pos.'"';
			endif; ?>>
		<img src="<?php echo $default_image;?>" alt=""/> 
	</figure>
<?php endif; ?>