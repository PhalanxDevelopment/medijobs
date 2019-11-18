<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="section_1_blog" class="section section_1 section_1--blog-article">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-5/24 hide-on-mobile"></div>
            <div class="grid__item width-16/24">
                <div class="breadcrumb hide-on-mobile"><?php get_breadcrumb(); ?></div>
                <h1 class="headline article "><?php the_title(); ?></h1>
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
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">Alte articole scrise de <?php echo the_author_meta( 'display_name' , $author_id ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article_quiz">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-18/24">
                    <div id="close_quiz" class="article_close"></div>
                    <div id="first_step" class="step active">
                        <h1 class="step__question">What is your career goal?</h1>
                        <span class="step_info">3 more questions to go</span>
                        <div class="step__radios_boxes">
                            <label for="step-1" class="radio_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-1.png" alt="">
                                <h3>Not currently looking to change jobs, but I am open to receive job offers</h3>
                                <div class="input">
                                    <input id="step-1" class="input__radio" name="step-1" type="radio"> 
                                </div>
                            </label>
                            <label for="step-2" class="radio_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-2.png" alt="">
                                <h3 style="margin-top:70px;">Ready to start interviewing</h3>
                                <div class="input">
                                    <input id="step-2" class="input__radio" name="step-1" type="radio"> 
                                </div>
                            </label>
                            <label for="step-3" class="radio_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-3.png" alt="">
                                <h3 style="margin-top:95px;" >Start interviewing</h3>
                                <div class="input">
                                    <input id="step-3" class="input__radio" name="step-1" type="radio"> 
                                </div>
                            </label>
                            <label for="step-4" class="radio_box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-4.png" alt="">
                                <h3>Just interested to improve results at my current job</h3>
                                <div class="input">
                                    <input id="step-4" class="input__radio" name="step-1" type="radio"> 
                                </div>
                            </label>
                        </div>
                    </div>
                    <div id="second_step" class="step">
                        <h1 class="step__question">Where would you like to work?</h1>
                        <span class="step_info">2 more questions to go</span>
                        <div class="mj-form">
                            <input class="mj-input" name="nume"  type="text" placeholder="Type in your city" >
                        </div>
                    </div>
                    <div id="third_step" class="step">
                        <h1 class="step__question">What are you looking for in your next job?</h1>
                        <span class="step_info">1 more questions to go</span>
                        <p class="inline_form">I have <input style="width: 100px;" type="number"/> Years of experience <br>
                            and would like my next role to be <input placeholder="type your next job here " type="text"/> .
                        </p>
                    </div> 
                    <div id="forth_step" class="step">
                        <h1 class="step__question">What other career goals do you have?</h1>
                        <span class="step_info">this is the last question</span>
                        <div class="mj-grid">
                            <div class="grid__item width-4/24">
                                <div class="step_4_box">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="grid__item width-7/24">
                            
                            </div>
                            <div class="grid__item width-4/24">
                            
                            </div>
                        </div>           
                    </div>
                    <div class="article_quiz__footer">
                        <div id="prev_step" class="article_quiz__footer__link">Previous step</div>
                        <button style="width: 224px;" id="next_step" class="mj-btn mj-btn--primary mj-btn--alt">
                            Next step
                        </button>
                        <div id="skip" class="article_quiz__footer__link skip">Skip this step</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fb_comments">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-5/24 hide-on-mobile"></div>
                <div class="grid__item width-14/24">
                    <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="'.get_permalink().'" title_text="Facebook Comment" order_type="social" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="5" ]'); ?> 
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>