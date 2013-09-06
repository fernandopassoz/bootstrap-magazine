<?php $args = array(
	'posts_per_page' => 6,
	'order' => 'DESC',
		); 
$principais = get_posts($args);
foreach ($principais as $post) : setup_postdata($post);?>
<div class="row">

	<a href="<?php the_permalink(); ?>"><h4 class="col-md-12">
			<?php the_title();?>
		</h4>
	<h5 class="col-md-12">
		<?php the_excerpt(); ?>
		</h5>
	</a>
</div>
<?php endforeach; 
wp_reset_postdata();?>