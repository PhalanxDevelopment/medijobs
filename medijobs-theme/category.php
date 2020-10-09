<?php get_header();
get_sidebar();
?>
<div id="section_1_blog" class="section section_1 section_1--blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-12/24">
                    <div class="above_headline">Bine ai venit in categoria</div>
                    <h1 class="headline uppercase"><?php single_term_title(); ?></h1>
                    <p>
                        <?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?>
                    </p>

                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-8/24">
                    <div id="blog-form" class="mj-register_form mj-form blog-form open">
                        <div id="close-form" class="close hide-on-desktop"></div>
                        <h3>Newsletter săptămânal</h3>
                        <p>Nu pierde nici un articol, săptămânal îți trimitem o recapitulare cu cele mai noi publicări.</p>
                        <?php echo do_shortcode('[hubspot type=form portal=5748888 id=f8052d4d-af90-45d5-bf00-c1f134635f57]'); ?>
                        <div class="mj-grid">
                            <div class="grid__item width-12/24">

                            </div>
                            <div class="grid__item width-12/24 hide-on-mobile">
                                <div class="newsletter_logo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                <h2>Articole Recente</h2>
                    <div class="mj-articles">
                    <?php
                    $category = get_the_category();
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 6, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'category_name'    => $category[0]->slug,
                    ));
                    foreach($recent_posts as $post) : ?>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                </a>
                            </div>
                            <div class="mj-article__category">
                                <?php  $categories = get_the_category($post['ID']);
                                    echo $categories[0]->cat_name;
                                ?>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="mj-article__link">Citeste Articolul</a>
                            <?php if(get_field('sponsored', $post['ID'])) { ?>
                                <div class="mj-article__author">
                                    <span>SPONSORIZAT DE </span>
                                    <img class="mj-article__author__image" src="<?php the_field('sponsor_logo',$post['ID']) ?>" alt="">
                                </div>
                            <?php } else { ?>
                                <div class="mj-article__author">
                                    <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                                    <span>SCRIS DE </span>
                                    <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                    <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                                </div>
                            <?php } ?>
                        </div>

                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                    <a href="<?php the_field('recent_articles_link',65); ?>?cat=<?php echo $category[0]->slug; ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="company_bg">
                        <div class="company_box mj-form">
                            <div class="mj-grid">
                                <div class="grid__item width-12/24">
                                    <h3>Ești companie sau candidat?</h3>
                                    <p>Companiile medicale din toata Romania au apelat la MEDIjobs pentru a angaja cu succes specialisti medicali.</p>
                                </div>
                                <div class="grid__item width-2/24 hide-on-mobile">
                                </div>
                                <div class="grid__item width-10/24">
                                    <a href="https://app.medijobs.ro/register/" target="_blank" class="mj-btn mj-btn--primary">
                                        Creează-ți un cont gratuit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h2 class="headline light">Cele mai citite articole.</h2>
                    <?php
                        if ( function_exists('wpp_get_mostpopular') ) {
                            $args = array(
                                'range' => 'all',
                                'order_by'=> 'views',
                                'limit' => 6,
                                'cat' => $category[0]->term_id,
                                'stats_author' => 1,
                                'post_type' => 'post',
                            );
                            wpp_get_mostpopular( $args );

                        }
                    ?>
                    <a href="<?php the_field('most_popular_link', 65); ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="above_headline">BLOG</div>
                    <h2 class="headline light"> Cele mai populare articole ale lunii</h2>
                    <?php
                        if (function_exists('wpp_get_mostpopular')) {
                            $args = array(
                                'range' => 'all',
                                'order_by'=> 'views',
                                'limit' => 9,
                                'cat' => $category[0]->term_id,
                                'freshness' => 1,
                                'stats_author' => 1,
                                'post_type' => 'post',
                            );
                            wpp_get_mostpopular($args);
                        }
                    ?>
                    <a href="<?php the_field('most_read_link', 65); ?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
