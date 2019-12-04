<?php
/**
 * Template Name: Normal Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="section section_article">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-5/24 hide-on-mobile"></div>
                <div class="grid__item width-14/24">
                    <div class="article_content">
                        <h2 class="headline article"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>