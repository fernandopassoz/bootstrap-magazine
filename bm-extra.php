<div class="row">
	<div id="extra" class="col-md-12">
		<!-- Mostra a notícia principal -->
		<?php $args = array(
							'posts_per_page' => 1,
							'order' => 'DESC',
							'meta_key' => 'posicao',
							'meta_value' => 'extra'	); 
			$extra = get_posts($args);
			foreach ($extra as $post) : setup_postdata($post);?>
		
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(340,340), array('class' => 'img-responsive') ); ?>
			<h4>
				<?php the_title();?>
			</h4>
			<h5><?php the_excerpt(); ?></h5>
		</a>
		<?php endforeach; 
		wp_reset_postdata();?>
	</div>

</div>