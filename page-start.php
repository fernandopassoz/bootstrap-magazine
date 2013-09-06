<?php get_header(); ?>
<div class="container propaganda-superior">
	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/468x60" class="img-responsive"></img>
		</div>
			<div class="col-md-6">
			<img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/468x60" class="img-responsive"></img>
		</div>
	</div>
</div>
	<div id="principal" class="container">
		<div class="row">
			<div id="fluxo-principal" class="col-md-4">
				<!-- <div class="row">
					<div id="extra" class="col-md-12">
						
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
							<p data-holder-ipsum-mode="words"
									data-holder-ipsum-words-count="10"
									data-holder-ipsum-words-common="false">
							</p>
						</a>
						<?php endforeach; 
								wp_reset_postdata();?>
					</div>

			</div> -->
			<?php include 'bm-extra.php'; ?>
			<?php include 'bm-principais.php'; ?> 

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

			</div>
			<div id="fluxo-secoes" class="col-md-4">
				<div class="row">
					<h4 class="titulo-secao col-md-12">
						DESTAQUE
					</h4>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js'/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js'/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js'/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<h4 class="titulo-secao col-md-12">
						REGIÃO
					</h4>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<h4 class="titulo-secao col-md-12">
						ESPORTES
					</h4>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
				<div class="row">
					<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/90x60"
						class="col-md-3">
						<h5 class="col-md-9">
							<p data-holder-ipsum-mode="words"
								data-holder-ipsum-words-count="6"
								data-holder-ipsum-words-common="false"></p>
						</h5></a>
				</div>
			</div>

		<div id="fluxo-propaganda" class="col-md-4">
		<div class="row">
			<div class="md-col-12 propaganda">
				<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/300x250">
			</div>
		</div>
		<div class="row">
			<div class="md-col-12 propaganda">
				<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/300x250">
			</div>
		</div>
		<div class="row">
			<div class="md-col-12 propaganda">
				<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/300x250">
			</div>
		</div>
		<div class="row">
			<div class="md-col-12 propaganda">
				<a href="#"><img alt="" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/300x250">
			</div>
		</div>

	</div>
	<div class="container propaganda-superior">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/468x60" class="img-responsive"></img>
			</div>
			<div class="col-md-6">
				<img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/468x60" class="img-responsive"></img>
			</div>
		</div>
	</div>
</div>
</div>
		</div>
<?php get_footer(); ?>