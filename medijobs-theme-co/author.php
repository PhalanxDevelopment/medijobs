<?php get_header(); ?>
<div id="section_1_blog" class="section section_1 section_1--blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-12/24">
                    <div class="above_headline">Meet our author</div>
                    <h1 class="headline uppercase"><?php the_author_link(); ?></h1>
                    <p>
                        <?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?>
                    </p>

                </div>
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-8/24">
                    <div id="blog-form" class="mj-register_form mj-form blog-form">
                        <div id="close-form" class="close hide-on-desktop"></div>
                        <h3>GET WEEKLY UPDATES.</h3>
                        <p>Never miss an update, we send a weekly recap of all our articles published.</p>
                        <?php echo do_shortcode('[hubspot type=form portal=5748888 id=edd3916d-4059-4981-986e-36889b6b1681]'); ?>
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
                <h2>Our Latest Articles</h2>
                    <div class="mj-articles">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink(get_the_id()); ?>">
                                    <?php echo get_the_post_thumbnail(get_the_id(), 'full'); ?>
                                </a>
                            </div>
                            <div class="mj-article__category">
                                <?php  $categories = get_the_category(get_the_id());
                                    echo $categories[0]->cat_name;
                                ?>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink(get_the_id()); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php echo get_permalink(get_the_id()); ?>" class="mj-article__link">READ ON</a>
                            <div class="mj-article__author">
                                <?php $author_id= get_post_field( 'post_author', get_the_id() ); ?>
                                <span>WRITTEN BY </span>
                                <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                            </div>
                        </div>
                        
                        <?php endwhile; ?>
                    </div>
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
                                    <h3>ARE YOU A COMPANY OR A CANDIDATE?</h3>
                                    <p>Medical companies have turned to MEDIjobs to successfully hire medical specialists.</p>
                                </div>
                                <div class="grid__item width-2/24 hide-on-mobile">
                                </div>
                                <div class="grid__item width-10/24">
                                    <a href="https://app.medijobs.co/register/" target="_blank" class="mj-btn mj-btn--primary">
                                        GET YOUR FREE ACCOUNT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>