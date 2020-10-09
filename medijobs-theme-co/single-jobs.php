<?php
get_header();
?>
<style>
.mj-header .mj-meniu.blog_menu {
    display: none !important;
}
</style>
<div id="mj-sidebar" class="mj-sidebar no-hover">
    <div class="sidebar__widget sidebar__widget--go_to_top">
        <div class="sidebar__widget-content">
        </div>
    </div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- <div id="isCompany" class="mj-container">
        <form id="form" action="#" method="post" class="mj-register_form mj-form job-form">
            <div id="close-form" class="close hide-on-desktop"></div>
            <h3><?php the_field('form_title'); ?></h3>
            <p><?php the_field('form_content'); ?></p>
            <a href="<?php the_field('form_link'); ?>" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                <?php the_field('form_button'); ?>
            </a>
        </form>
    </div> -->
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <div class="above_headline"> <?php the_field('above_headline'); ?></div>
                    <h1 class="headline uppercase"><?php the_title(); ?> </h1>
                    <p> <?php the_content(); ?></p>
                    <?php if(get_field('job_introducere')) { ?>
                        <a  class="link-to" data-link="job_introducere" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_introducere_title'))) ?>"><?php the_field('job_introducere_title'); ?></a>
                    <?php } ?>
                    <br>
                    <?php if(get_field('job_educatie')) { ?>
                        <a class="link-to" data-link="job_educatie" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_educatie_title'))) ?>"><?php the_field('job_educatie_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_experienta_si_voluntariat')) { ?>
                        <a  class="link-to" data-link="job_experienta_si_voluntariat" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_experienta_title'))) ?>"><?php the_field('job_experienta_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_avansare_in_cariera')) { ?>
                        <a  class="link-to" data-link="job_avansare_in_cariera" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_avansare_title'))) ?>"><?php the_field('job_avansare_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_description')) { ?>
                        <a  class="link-to" data-link="job_description" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_description_title'))) ?>"><?php the_field('job_description_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_responsabilities')) { ?>
                        <a class="link-to" data-link="job_responsabilities" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_responsabilities_title'))) ?>"><?php the_field('job_responsabilities_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_experience')) { ?>
                        <a  class="link-to" data-link="job_experience" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title'))) ?>"><?php the_field('job_experience_title'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_experience_2')) { ?>
                        <a  class="link-to" data-link="job_experience_2" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_2'))) ?>"><?php the_field('job_experience_title_2'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_experience_3')) { ?>
                        <a  class="link-to" data-link="job_experience_3" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_3'))) ?>"><?php the_field('job_experience_title_3'); ?></a>
                    <?php } ?>
                     <br>
                    <?php if(get_field('job_experience_4')) { ?>
                        <a  class="link-to" data-link="job_experience_4" href="#<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_4'))) ?>"><?php the_field('job_experience_title_4'); ?></a>
                    <?php } ?>
                     <br>
                    <a href="#job-details" class="sub_section" style="margin-top:100px; margin-bottom: 100px;"><?php the_field('anchor_text'); ?></a>
                </div>
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-12/24">
                    <div class="secton_bg_image community secton_bg_image--company" style="margin-bottom: -62px;">
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
    <?php if(get_field('apply_text')) { ?>
    <div class="section section_blog_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-23/24">
                    <div class="company_bg">
                        <div class="company_box mj-form">
                            <div class="mj-grid">
                                <div class="grid__item width-12/24">
                                    <h3><?php the_field('apply_title'); ?></h3>
                                    <p><?php the_field('apply_text'); ?></p>
                                </div>
                                <div class="grid__item width-2/24 hide-on-mobile">
                                </div>
                                <div class="grid__item width-10/24">
                                    <a href="<?php the_field('apply_link'); ?>" target="_blank" class="mj-btn mj-btn--primary">
                                        <?php the_field('apply_button_text'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
        $categoryId = get_field('category_id');
        $subcategoryId = get_field('subcategory_id');
    ?>
    <?php if(get_field('salary_range_title')) { ?>
    <div class="section">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-6/24">
                    <h2 class="headline light"> <?php the_field('salary_range_title'); ?> </h2>
                    <p> <?php the_field('salary_range_text'); ?></p>
                </div>
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-2/24">
                    <?php
                        apply_filters('job_information', $categoryId, $subcategoryId, 'ranges', get_the_id());
                    ?>
                </div>
                <div class="grid__item width-14/24">
                    <figure class="highcharts-figure">
                        <div id="hichartsContainer" ></div>
                    </figure>
                    <p style="margin-top: 40px; margin-bottom: 40px; text-align: center;"><?php the_field('graphic_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="section section_jobs_explained">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-12/24">
                    <h1 class="headline light"> <?php the_field('job_details_title'); ?></h1>
                    <div id="job-details" class="faq_group">
                        <div class="faq_group__list">
                        <?php if(get_field('job_introducere')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_introducere_title'))) ?>" class="faq_group__item active job_introducere">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_introducere_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_introducere'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_educatie')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_educatie_title'))) ?>" class="faq_group__item active job_educatie">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_educatie_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_educatie'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_experienta_si_voluntariat')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_experienta_title'))) ?>" class="faq_group__item active job_experienta_si_voluntariat">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_experienta_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_experienta_si_voluntariat'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_avansare_in_cariera')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_avansare_title'))) ?>" class="faq_group__item active job_avansare_in_cariera">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_avansare_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_avansare_in_cariera'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_description')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_description_title'))) ?>" class="faq_group__item active job_description">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_description_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_description'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_responsabilities')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_responsabilities_title'))) ?>" class="faq_group__item active job_responsabilities" >
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_responsabilities_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_responsabilities'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_experience')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title'))) ?>" class="faq_group__item active job_experience">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_experience_title'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_experience'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_experience_2')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_2'))) ?>" class="faq_group__item active job_experience_2">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_experience_title_2'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_experience_2'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_experience_3')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_3'))) ?>" class="faq_group__item active job_experience_3">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_experience_title_3'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_experience_3'); ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(get_field('job_experience_4')) { ?>
                            <div id="<?php echo str_replace(' ', '-', strtolower(get_field('job_experience_title_4'))) ?>" class="faq_group__item active job_experience_4">
                                <h3 class="faq_group__item-title uppercase">
                                    <?php the_field('job_experience_title_4'); ?>
                                </h3>
                                <div class="faq_group__item-content">
                                    <?php the_field('job_experience_4'); ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-10/24">
                    <?php if($categoryId) { ?>
                        <div class="prices_table">
                            <div class="prices_headers">
                                <h3><?php the_field('table_jobs_header'); ?></h3>
                                <h3><?php the_field('table_salary_header'); ?></h3>
                                <h3><?php the_field('table_companies_header'); ?></h3>
                            </div>
                            <?php
                                apply_filters('job_information', $categoryId, $subcategoryId, 'cities', get_the_id());
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php $type = get_field('related_articles_single_article_type') ?>
    <?php if($type !== 'none') { ?>
    <div class="section section_blog">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2> <?php the_field('articles_title'); ?> </h2>
                    <div class="mj-articles">
                    <?php
                    if($type == 'category' ) {
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 3, // Number of recent posts thumbnails to display
                            'post_status' => 'publish',
                            'category_name'    => get_field('related_articles_single_article_category_slug')
                        ));
                    }

                    if($type == 'tag' ) {
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 3, // Number of recent posts thumbnails to display
                            'post_status' => 'publish',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_tag',
                                    'field'=>'name',
                                    'terms'    => array(get_field('related_articles_single_article_tag')),
                                    'operator'=> 'IN'
                                ),
                            ), //
                        ));
                    }
                    if($type ==='tag' || $type == 'category' ) {
                    foreach($recent_posts as $post) : ?>

                        <div class="mj-article">
                            <div class="mj-article__image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                </a>
                            </div>
                            <div class="mj-article__category">
                            <?php $post_categories = get_post_primary_category($post['ID'], 'category');
                                    echo $post_categories['primary_category']->name;
                            ?>
                            </div>
                            <h3 class="mj-article__title"><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="mj-article__link">Citeste Articolul</a>
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
                    <?php } else {
                    $articles = get_field('related_articles_single_article_ids');
                    ?>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($articles['article_id_1']); ?>">
                                <?php echo get_the_post_thumbnail($articles['article_id_1'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($articles['article_id_1']); ?>"><?php echo get_the_title($articles['article_id_1']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($articles['article_id_1']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($articles['article_id_2']); ?>">
                                <?php echo get_the_post_thumbnail($articles['article_id_2'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($articles['article_id_2']); ?>"><?php echo get_the_title($articles['article_id_2']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($articles['article_id_2']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <div class="mj-article">
                        <div class="mj-article__image">
                            <a href="<?php echo get_permalink($articles['article_id_3']); ?>">
                                <?php echo get_the_post_thumbnail($articles['article_id_3'], 'full'); ?>
                            </a>
                        </div>
                        <h3 class="mj-article__title"><a href="<?php echo get_permalink($articles['article_id_3']); ?>"><?php echo get_the_title($articles['article_id_3']  ); ?></a></h3>
                        <a href="<?php echo get_permalink($articles['article_id_3']); ?>" class="mj-article__link">Vezi mai mult</a>
                    </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php endwhile; endif; ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    jQuery(document).ready(function (){
        jQuery(".link-to").click(function (){
            jQuery('html, body').animate({
                scrollTop: jQuery('.' + jQuery(this).attr('data-link')).offset().top - 120
            }, 1000);
        });
    });
    jQuery(document).ready(function (){
        jQuery(".sidebar__widget--go_to_top").click(function (){
            jQuery('html, body').animate({
                scrollTop: 0
            }, 1000);
        });
    });
    function getWidth() {
        return Math.max(
            document.body.scrollWidth,
            document.documentElement.scrollWidth,
            document.body.offsetWidth,
            document.documentElement.offsetWidth,
            document.documentElement.clientWidth
            );
    }
    if(getWidth() > 1400) {
        window.addEventListener("scroll", function(e) {
            var form = document.getElementById("form");
            var limit = document.body.offsetHeight - window.innerHeight;
            if( window.scrollY > (limit - 1000)) {
                form.className = 'mj-register_form mj-form job-form absolute';
                form.style = 'top: ' + (limit - 1000) + 'px';
            } else {
                form.className = 'mj-register_form mj-form job-form';
                form.style = '';
            }
        });
    }
    var elements = document.querySelectorAll('.faq_group__item');
    elements.forEach(el => {
        el.onclick = function() {
        el.classList.toggle('active');
    }
    })
    const monthNames = ["January", "February", "March", "April", "May", "June",
                            "July", "August", "September", "October", "November", "December"
                        ];
    const url = 'https://app.medijobs.ro/api/odata/jobs?category_id=<?php echo $categoryId; ?>&subcategory_id=<?php echo $subcategoryId; ?>'
    const options = {
        title: {
            text: 'Salary Evolution '
        },
        chart: {
            events: {
                load: function() {
                    const chart = this
                    window.fetch(url).then((res) => res.json()).then(json => {
                        chart.update({
                            series: {
                                type: 'area',
                                name: 'Average Salary(RON)',
                                data: json.timeseries.map(t => t.avg_salary)
                            }
                        })
                        chart.update({
                            xAxis: {
                                categories: json.timeseries.map(t => monthNames[t.month-1] + ' '+ t.year)
                            }
                        })
                    })
                }
            }
        },
        series: [{}],
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
    }
    const chart = Highcharts.chart('hichartsContainer', options)
</script>
<style>
.highcharts-figure, .highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
<?php get_footer(); ?>
