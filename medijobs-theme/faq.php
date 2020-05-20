<?php
/**
 * Template Name: FAQ Page
 * Description: First page of the site
 *
 * @package WordPress
 * @subpackage Medijobs
 */
get_header();
?>

<div id="section_1" class="section section_1 section_1--faq">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-1/24 hide-on-mobile"></div>
            <div class="grid__item width-7/24">
                <h1 class="headline light"><?php the_field('hero_title'); ?></h1>
                <?php the_field('normal_text'); ?>
                <div class="sub_section hide-on-mobile" style="margin-top:300px; margin-bottom: 40px;"><?php the_field('bottom_link_text'); ?></div>
            </div>
            <div class="grid__item width-2/24 hide-on-mobile"></div>
            <div class="grid__item width-14/24">
                <div class="facebook_groups">
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php the_field('candidate_icon'); ?>" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php the_field('first_box_title'); ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php the_field('first_box_button_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                            <?php the_field('first_box_button_text'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="facebook_groups__box">
                        <div class="facebook_groups__box-icon">
                            <img src="<?php the_field('company_icon'); ?>" alt="">
                        </div>
                        <div class="facebook_groups__box-text">
                            <h3><?php the_field('second_box_title'); ?></h3>
                        </div>
                        <div class="facebook_groups__box-link">
                            <a href="<?php the_field('second_box_button_link'); ?>" class="mj-btn mj-btn--secondary mj-btn--alt--2">
                                <?php the_field('second_box_button_text'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="form" role="search" action="<?php echo site_url(''); ?>" method="get"  class="mj-search-faq mj-form">
    <p><?php the_field('sticky_text'); ?></p>
    <input class="mj-input" name="s" type="text" placeholder="Search for your question" >
    <input type="hidden" name="post_type" value="faq" />
    <button type="submit" class="mj-btn mj-btn--primary mj-btn--alt--2 uppercase">
        <?php the_field('search_box_button'); ?>
    </button>
</form>
<div id="section_2" class="section section_2--faq">
    <div class="mj-container">
        <div class="mj-grid">
            <div class="grid__item width-10/24"></div>
            <div class="grid__item width-14/24">
            <?php 
                $tax_terms = get_terms('faq_type', array('hide_empty' => false));
                $typeOfPage = get_field('type_of_faq_page'); 
                // echo $typeOfPage . 'sss';
                foreach($tax_terms as $term_single) {      
                    $term_single->slug;  
                    $term_single->name;        
                    $args = array(
                        'post_type' => 'faq',
                        'numberposts' => -1,
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'faq_type',
                                'field' => 'slug',
                                'terms' => $term_single->slug,
                            ),
                            array(
                                'taxonomy' => 'post_tag',
                                'field'=>'name',
                                'terms'    => array($typeOfPage),
                                'operator'=> 'IN'
                            ),
                        ),
                    );
                    
                    
                    $your_query = get_posts( $args );
            ?>
                <div class="faq_group">
                    <h3 class="faq_group__title"><?php echo $term_single->name;  ?>(<?php echo count($your_query) ?>).</h3>
                    <div class="faq_group__list">
                    <?php foreach($your_query as $post) : ?>
                        <div class="faq_group__item">
                            <h3 class="faq_group__item-title"><?php echo $post->post_title; ?></h3>
                            <div class="faq_group__item-content">
                                <?php echo $post->post_content; ?>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_query(); ?>
                    </div>
                </div>
                
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
    var elements = document.querySelectorAll('.faq_group__item');
    elements.forEach(el => {
        el.onclick = function() {
        el.classList.toggle('active');
    }
    })

    window.addEventListener("scroll", function(e) {
        var form = document.getElementById("form");
        var limit = document.body.offsetHeight - window.innerHeight;
       
        if( window.scrollY > (limit - 600)) {
            form.style = 'position:absolute; top: ' + (limit - 200) + 'px';
        } else {
            form.style = '';
        }
    });
</script>
<?php get_footer(); ?>