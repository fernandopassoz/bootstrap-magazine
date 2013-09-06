<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h1 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Arquivo diário: %s', 'blankslate' ), get_the_time(get_option('date_format') ) ); }
elseif ( is_month() ) { printf( __( 'Arquivo mensal: %s', 'blankslate' ), get_the_time('F Y') ); }
elseif ( is_year() ) { printf( __( 'Arquivo anual: %s', 'blankslate' ), get_the_time('Y') ); }
else { _e( 'Arquivo', 'blankslate' ); }
?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php endwhile; endif; ?>
<?php get_template_part('nav', 'below'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>