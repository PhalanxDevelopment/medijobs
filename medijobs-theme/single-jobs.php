<?php
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="isCompany" class="mj-container">
        <form id="form" action="#" method="post" class="mj-register_form mj-form job-form">
            <div id="close-form" class="close hide-on-desktop"></div>
            <h3><?php the_field('form_title'); ?></h3>
            <p><?php the_field('form_content'); ?></p>
            <a href="<?php the_field('form_link'); ?>" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
                <?php the_field('form_button'); ?>
            </a>
        </form>
    </div>
    <div id="section_1" class="section section_1">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <div class="above_headline"> <?php the_field('above_headline'); ?></div>
                    <h1 class="headline uppercase"><?php the_title(); ?> </h1>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-10/24">
                    <a href="<?php the_field('form_link'); ?>" id="open-form" class="mj-btn mj-btn--primary hide-on-desktop">
                        <?php the_field('form_button'); ?>
                    </a>
                </div>
            </div>
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-10/24">
                    <p> <?php the_content(); ?></p>
                    <a href="#job-details" class="sub_section" style="margin-top:100px; margin-bottom: 100px;"><?php the_field('anchor_text'); ?></a>
                </div>
            </div>
            
        </div>
    </div>
    <?php if(get_field('apply_text')) { ?>
    <div class="section section_blog_company">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
                <div class="grid__item width-14/24">
                    <div class="company_bg company_bg--jobs">
                        <div class="company_box mj-form company_box--jobs">
                            <div class="mj-grid">
                                <div class="grid__item width-24/24">
                                    <p><?php the_field('apply_text'); ?></p>
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
                    <h1 class="headline light"> <?php the_field('salary_range_title'); ?> </h1>
                    <p> <?php the_field('salary_range_text'); ?></p>
                </div>
                <div class="grid__item width-2/24"> </div>
                <div class="grid__item width-2/24"> 
                    <?php 
                       
                        apply_filters('job_information', $categoryId, $subcategoryId, 'ranges'); 
                    ?>
                </div>
            </div>
    
            <div class="mj-grid">
                <div class="grid__item width-1/24"> </div>
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
                <div class="grid__item width-14/24">
                    <?php if($categoryId) { ?>
                    <div class="prices_table">
                        <div class="prices_headers">
                            <h3>Jobs by City</h3>
                            <h3>Average Salary</h3>
                            <h3>Companies Hiring</h3>
                        </div>
                        <?php 
                            apply_filters('job_information', $categoryId, $subcategoryId, 'cities'); 
                        ?>
                    </div>
                <?php } ?>
                <h1 class="headline light"> <?php the_field('job_details_title'); ?></h1>
                <div id="job-details" class="faq_group">
                    <div class="faq_group__list">
                    <?php if(get_field('job_introducere')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_introducere_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_introducere'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_educatie')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_educatie_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_educatie'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_experienta_si_voluntariat')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_experienta_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_experienta_si_voluntariat'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_avansare_in_cariera')) { ?>
                        <div class="faq_group__item active">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_avansare_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_avansare_in_cariera'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_description')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_description_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_description'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_responsabilities')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_responsabilities_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_responsabilities'); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(get_field('job_experience')) { ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title uppercase">
                                <?php the_field('job_experience_title'); ?>
                            </h3>
                            <div class="faq_group__item-content">
                                <?php the_field('job_experience'); ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php if(get_field('articles_title')) { ?>
<div class="section section_blog section_blog_recent">
        <div class="mj-container">
            <div class="mj-grid">
                <div class="grid__item width-1/24 hide-on-mobile"></div>
                <div class="grid__item width-23/24 mj-form">
                    <h2> <?php the_field('articles_title'); ?> </h2>
                    <div class="mj-articles">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // Number of recent posts thumbnails to display
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_tag',
                                'terms'    => get_field('articles_tag'),
                            ),
                        ), // Show only the published posts
                        
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
                            <div class="mj-article__author">
                                <?php $author_id= get_post_field( 'post_author', $post['ID'] ); ?>
                                <span>SCRIS DE </span>
                                <h5 class="mj-article__author__name"><?php echo the_author_meta( 'display_name' , $author_id ); ?></h5>
                                <?php echo get_avatar( $author_id , 50, '', 'avatar', array('class' => 'mj-article__author__image')); ?>
                            </div>
                        </div>
                        
                    <?php endforeach; wp_reset_query(); ?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/etichete/<?php echo get_field('articles_tag')?>" class="mj-btn mj-btn--secondary mj-btn--alt">
                        Vedeti toate articolele
                    </a>
                </div>
            </div>
        </div>
</div>
<?php } ?>
<?php endwhile; endif; ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
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
    const url = 'https://app.medijobs.ro/api/odata/jobs?category_id=9&subcategory_id=3'
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