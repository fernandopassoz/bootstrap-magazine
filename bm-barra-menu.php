<!--
<nav id="menu" role="navigation" class="navbar navbar-default">
<!-- <div id="search" class="menu-principal">
<?php get_search_form(); ?>
</div>
<div class="menu-principal">
	
<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
	</div>
</nav>
-->
<div class="bar">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">

			<div class="menu-principal">
				<?php include('bm-menu.php'); ?>
				
				<div class="collapse navbar-collapse navbar-ex1-collapse">
						<div class="nav navbar-nav navbar-right pad-pequeno"><a href="#">ANUNCIE</a><div>
						<?php include('bm-menu-social.php'); ?>
				</div>
			</div>

		</nav>
	</div>
</div>

