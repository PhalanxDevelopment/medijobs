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
                            the_post_thumbnail( 'full', [ 'alt' => esc_html ( get_the_title() ) ] ); 
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
                                        Categorii
                                    </div>
                                </div>
                                <div class="grid__item width-23/24">
                                    <div class="categories_under">
                                    <?php $category = get_the_category();
                                        $hierarchy = array_reverse( get_ancestors( $category[0]->term_id, 'category' ) );
                                        $hierarchy[] = $category[0]->term_id;
                                        foreach( $hierarchy as $category ) { ?>
                                            <a href="<?php esc_url( get_category_link( $category  ) ) ?>"><?php echo get_cat_name($category); ?></a>
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
    <div id="article_quiz" class="article_quiz">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-3/24 hide-on-mobile"></div>
                <div class="grid__item width-18/24">
                    <div id="close_quiz" class="article_close"></div>
                    <div id="quiz_step_1" class="step active">
                        <h1 class="step__question">Unde te afli in cariera?</h1>
                        <span class="step_info">mai sunt 3 intrebari</span>
                        <div class="step__radios_boxes">
                            <div>
                                <input id="step-1" class="input__radio" name="step-1" type="radio" value="Nu vreau sa imi schimb jobul, dar sunt deschis(a) sa primesc oferte relevante">
                                <label for="step-1" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-1.png" alt="">
                                    <h3>Nu vreau sa imi schimb jobul, dar sunt deschis(a) sa primesc oferte relevante</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-2" class="input__radio" name="step-1" type="radio" value="Sunt pregatit(a) sa incep interviurile"> 
                                <label for="step-2" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-2.png" alt="">
                                    <h3 style="margin-top:70px;">Sunt pregatit(a) sa incep interviurile</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-3" class="input__radio" name="step-1" type="radio" value="Particip la interviuri"> 
                                <label for="step-3" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-3.png" alt="">
                                    <h3 style="margin-top:95px;" >Particip la interviuri</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input id="step-4" class="input__radio" name="step-1" type="radio" value="Caut resurse pentru a ma dezvolta profesional"> 
                                <label for="step-4" class="radio_box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quiz/step_1-4.png" alt="">
                                    <h3>Caut resurse pentru a ma dezvolta profesional</h3>
                                    <div class="input">
                                        <div class="inner_input"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="quiz_step_2" class="step">
                        <h1 class="step__question">In ce orase ai vrea sa lucrezi?</h1>
                        <span class="step_info">mai sunt 2 intrebari</span>
                        <div class="mj-form">
                            <input class="mj-input" name="oras"  type="text" placeholder="Tasteaza orasul" >
                        </div>
                    </div>
                    <div id="quiz_step_3" class="step">
                        <h1 class="step__question">Ce iti doresti de la urmatorul job?</h1>
                        <span class="step_info">mai este o singura intrebare</span>
                        <p class="inline_form">Am  <input style="width: 100px;" name="ani" type="number"/> ani de experienta <br>
                        si as vrea sa ma dezvolt profesional ca <input placeholder="Scrie titulatura" name="profesia" type="text"/> .
                        </p>
                    </div> 
                    <div id="quiz_step_4" class="step">
                        <h1 class="step__question">Ce alte aspecte ti-ai dori sa imbunatatesti profesional?</h1>
                        <span class="step_info">este ultima intrebare</span>
                        <div class="mj-grid">
                            <div class="grid__item width-5/24">
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-1" name="step-4[]" class="aspecte" value="Abilitati de comunicare & Patient Care">
                                    <label for="step-4-1">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                    Abilitati de comunicare & Patient Care
                                </label>
                                </div>
                                <div class="step_4_box">

                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-2" name="step-4[]" class="aspecte" value="Cum sa fiu mai efficient(a) la job">
                                    <label for="step-4-2">
                                    <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Cum sa fiu mai efficient(a) la job</label>
                                </div>
                            </div>
                            <div class="grid__item width-2/24"></div>
                            <div class="grid__item width-7/24">
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-3" name="step-4[]" class="aspecte" value="Mai multe activitati de voluntariat">
                                    <label for="step-4-3"><div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Mai multe activitati de voluntariat</label>
                                </div>
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-4" name="step-4[]" class="aspecte" value="Sa imbunatatesc relatia cu colegii">
                                    <label for="step-4-4">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Sa imbunatatesc relatia cu colegii </label>
                                </div>
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-5" name="step-4[]" class="aspecte" value="Echilibru viata profesioana/personala">
                                    <label for="step-4-5">
                                        <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Echilibru viata profesioana/personala</label>
                                </div>
                            </div>
                            <div class="grid__item width-2/24"></div>
                            <div class="grid__item width-5/24">
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-6" name="step-4[]" class="aspecte" value="Crestere salariala">
                                    <label for="step-4-6">
                                    <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Crestere salariala</label>
                                </div>
                                <div class="step_4_box">
                                    <input type="checkbox"  onclick = "checking(this)"  id="step-4-7" name="step-4[]" class="aspecte" value="Sa investesc in brandul meu personal">
                                    <label for="step-4-7">
                                    <div class="input">
                                            <div class="inner_input"></div>
                                        </div>
                                        Sa investesc in brandul meu personal</label>
                                </div>
                            </div>
                        </div>           
                    </div>
                    <div id="quiz_step_5" class="step">
                        <h1 class="step__question">Multumim pentru raspunsuri!</h1>
                        <span class="step_info">Alatura-te celei mai mari comunitati digitale din Romania dedicata exclusiv specialistilor medicali si acceseaza Gratuit resurse pentru a te implini profesional. <br> Inscrie-te pentru a primi oferte relevante si sfaturi de cariera direct in casuta ta de email!</span>
                        <div class="mj-form">
                            <input class="mj-input" name="email"  type="text" placeholder="Emailul tau" >
                        </div>
                    </div>
                    <div class="article_quiz__footer">
                        <div id="prev_step" class="article_quiz__footer__link">Înapoi</div>
                        <button style="width: 224px;" id="next_step" class="mj-btn mj-btn--primary mj-btn--alt">
                            Înainte
                        </button>
                        <div id="skip" class="article_quiz__footer__link skip">Sari peste acest pas</div>
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
                    <?php // echo do_shortcode('[wpdevart_facebook_comment curent_url="'.get_permalink().'" title_text="Facebook Comment" order_type="social" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="5" ]'); ?> 
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>