<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="section_1_blog" class="section section_1 section_1--blog-article">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-5/24 hide-on-mobile"></div>
            <div class="grid__item width-12/24">
                <h1 class="headline uppercase light"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="mj-grid">
            <div class="grid__item width-24/24">
                <div class="article_image">
                    <?php
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail( 'full' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section_article">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-5/24 hide-on-mobile"></div>
                <div class="grid__item width-14/24">
                    <div class="article_metas">
                        <div class="article_date">
                            <span>Publicat pe</span>
                            <?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date; ?>
                        </div>
                        <div class="article_author">
                            <span>SCRIS DE</span>
                            <?php $author_id= get_post_field( 'post_author', get_the_id()); ?>
                            <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                            <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                        </div>
                    </div>
                    <div class="article_content">
                            <?php the_content(); ?>
                    </div>
                    <div class="sub_article_metas">
                        <div class="categories">
                            <div class="mj-grid">
                                <div class="grid__item width-1/24">
                                    <div class="category_label">
                                        Filled under
                                    </div>
                                </div>
                                <div class="grid__item width-23/24">
                                    <div class="categories_under">
                                    <?php $categories = get_the_category(); 
                                        foreach( $categories as $category ) { ?>
                                            <a href="<?php esc_url( get_category_link( $category->term_id ) ) ?>"><?php echo $category->cat_name; ?></a>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories">
                            <div class="mj-grid">
                                <div class="grid__item width-1/24">
                                    <div class="category_label">
                                        Tags
                                    </div>
                                </div>
                                <div class="grid__item width-23/24">
                                    <?php the_tags( '<div class="categories_under"><a>', '</a><a>', '</a></div>' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="author_box">
                        <div class="author_image">
                            <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                        </div>
                        <div class="author_info">
                            <h5>Despre Autor</h5>
                            <h3><?php echo the_author_meta( 'display_name' , $author_id ); ?></h3>
                            <div class="social_links">
                                <a href="#" class="social__link facebook__link"></a>
                                <a href="#" class="social__link instagram__link"></a>
                                <a href="#" class="social__link linkedin__link"></a>
                                <a href="#" class="social__link youtube__link"></a>
                            </div>
                            <div class="content">
                                <p>
                                    <?php echo the_author_meta( 'description' , $author_id ); ?>
                                </p>
                            </div>
                            <div class="link">
                                <a href="<?php echo get_the_author_meta( 'user_url' , $author_id ); ?>">Alte articole scrise de <?php echo the_author_meta( 'display_name' , $author_id ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="fb_comments">
                        <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="http://developers.facebook.com/docs/plugins/comments/" order_type="social" title_text="Facebook Comment" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>