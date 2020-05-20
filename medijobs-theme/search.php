<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title">xxxxx<?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>