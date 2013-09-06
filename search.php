<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Resultados de busca para %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php endwhile; ?>
<?php get_template_part('nav', 'below'); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nada encontrado', 'blankslate' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Lamentamos mas nada foi encontrado para a sua busca. Tente novamente.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>