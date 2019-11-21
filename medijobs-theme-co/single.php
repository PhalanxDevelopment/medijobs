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
                        <span>Published on</span>
                        <?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date; ?>
                    </div>
                    <div class="article_author">
                        <span>WRITTEN BY</span>
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
                            <h5>About the author</h5>
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
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">Other articles by <?php echo the_author_meta( 'display_name' , $author_id ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="article_quiz" class="article_quiz">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-18/24">
                    <div id="close_quiz" class="article_close"></div>
                    <div id="quiz_step_1" class="step active">
                        <h1 class="step__question">What is your career goal?</h1>
                        <span class="step_info">3 questions left</span>
                        <div class="step__radios_boxes">
                            <div>
                                <input id="step-1" class="input__radio" name="step-1" type="radio">
                                <label for="step-1" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-1.png" alt="">
                                    <h3>Not currently looking to change jobs, but I am open to receive job offers</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-2" class="input__radio" name="step-1" type="radio"> 
                                <label for="step-2" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-2.png" alt="">
                                    <h3 style="margin-top:70px;">Ready to start interviewing</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-3" class="input__radio" name="step-1" type="radio"> 
                                <label for="step-3" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-3.png" alt="">
                                    <h3 style="margin-top:95px;" >Interviewing </h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-4" class="input__radio" name="step-1" type="radio"> 
                                <label for="step-4" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-4.png" alt="">
                                    <h3>Just interested to improve results at my current job</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="quiz_step_2" class="step">
                        <h1 class="step__question">Where would you like to work?</h1>
                        <span class="step_info">2 more questions</span>
                        <div class="mj-form">
                            <input class="mj-input" name="oras"  type="text" placeholder="Type in the city" >
                        </div>
                    </div>
                    <div id="quiz_step_3" class="step">
                        <h1 class="step__question">What are you looking for in your next job?</h1>
                        <span class="step_info">one more question left</span>
                        <p class="inline_form">I have  <input style="width: 100px;" type="number"/> years of experience <br>
                        and would like my next role to be  <input placeholder="Type Job Title " type="text"/> .
                        </p>
                    </div> 
                    <div id="quiz_step_4" class="step">
                        <h1 class="step__question">What other career goals do you have?</h1>
                        <span class="step_info">last question</span>
                        <div class="mj-grid">
                            <div class="grid__item width-5/24">
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-1" name="step-4" type="radio">
                                    <label for="step-4-1">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Communication skills & Patient Care

                                </label>
                                </div>
                                <div class="step_4_box">

                                    <input type="radio" id="step-4-2" name="step-4" type="radio">
                                    <label for="step-4-2">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Be more efficient with my tasks
                                    </label>
                                </div>
                            </div>
                            <div class="grid__item width-2/24"></div>
                            <div class="grid__item width-7/24">
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-3" name="step-4" type="radio">
                                    <label for="step-4-3"><div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Make more time to volunteer 
</label>
                                </div>
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-4" name="step-4" type="radio">
                                    <label for="step-4-4">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Improve relationships with my colleagues</label>
                                </div>
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-5" name="step-4" type="radio">
                                    <label for="step-4-5">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Work-Life balance</label>
                                </div>
                            </div>
                            <div class="grid__item width-2/24"></div>
                            <div class="grid__item width-5/24">
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-6" name="step-4" type="radio">
                                    <label for="step-4-6">
                                    <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Earn more money</label>
                                </div>
                                <div class="step_4_box">
                                    <input type="radio" id="step-4-7" name="step-4" type="radio">
                                    <label for="step-4-7">
                                    <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Invest in my personal brand </label>
                                </div>
                            </div>
                        </div>           
                    </div>
                    <div id="quiz_step_5" class="step">
                        <h1 class="step__question">Congrats! </h1>
                        <span class="step_info">Join the fastest growing digital community for healthcare professionals in NYC! <br> Sign up to get relevant job offers and career advice straight to your inbox! </span>
                        <div class="mj-form">
                            <input class="mj-input" name="email"  type="text" placeholder="Your Email" >
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