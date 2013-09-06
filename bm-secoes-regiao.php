<?php $args = array(
	'posts_per_page' => 4,
	'order' => 'DESC',
	'offset'           => 0,
	'category_name'         => 'regiao'
); 
$principais = get_posts($args);
foreach ($principais as $post) : setup_postdata($post);?>
<div class="row">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( array(90,90), array('class' => 'img-responsive col-md-3') ); ?>
		<h4 class="col-md-9">
			<?php the_title();?>
		</h4>
</div>
<?php endforeach; 
wp_reset_postdata();?>
