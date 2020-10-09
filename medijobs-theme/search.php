<?php
/* Template Name:  Search */        
get_header(); 
get_sidebar();
?> 

<div class="section section_blog">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-23/24 mj-form">
                <h2>Rezultatele cautarii dupa : <?php echo "$s"; ?></h2>
                <div class="mj-articles">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php the_permalink( ) ?>"><?php  the_title(); ?></a></h3>
                        <a href="<?php the_permalink( ) ?>" class="mj-article__link">Citeste Articolul</a>
                        <div class="mj-article__author">
                            <?php $author_id= get_post_field( 'post_author', get_the_ID() ); ?>
                            <span>SCRIS DE </span>
                            <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                            <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                        </div>
                    </div>
                    
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>