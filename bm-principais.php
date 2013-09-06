<div class="row">
	<?php $args = array(
							'posts_per_page' => 2,
							'order' => 'DESC',
							'meta_key' => 'posicao',
							'meta_value' => 'principais'	); 
			$principais = get_posts($args);
			foreach ($principais as $post) : setup_postdata($post);?>
	<div class="col-md-6">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(150,150), array('class' => 'img-responsive') ); ?>
			<h4>
				<?php the_title();?>
			</h4></a>
	</div>
	<?php endforeach; 
				wp_reset_postdata();?>
</div>