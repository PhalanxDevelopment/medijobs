<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
    load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );
    global $content_width;
    if ( ! isset( $content_width ) ) { $content_width = 1920; }
    register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
    register_nav_menus( array( 'footer-sub-menu' => esc_html__( 'Footer Sub Menu', 'blankslate' ) ) );
    register_nav_menus( array( 'about-menu' => esc_html__( 'About us Footer Menu', 'blankslate' ) ) );
    register_nav_menus( array( 'community-menu' => esc_html__( 'Community Footer Menu', 'blankslate' ) ) );
    register_nav_menus( array( 'product-menu' => esc_html__( 'Product Footer Menu', 'blankslate' ) ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
    wp_enqueue_style( 'blankslate-style', get_stylesheet_uri(), array(), '6.10.6', 'all' );
    wp_enqueue_script( 'jquery' );
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
    $sep = '|';
    return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
    if ( $title == '' ) {
        return '...';
    } else {
        return $title;
    }
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
    if ( ! is_admin() ) {
        return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
    }
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
    if ( ! is_admin() ) {
        global $post;
        return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
    }
}
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
    unset( $sizes['medium_large'] );
    return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
function blankslate_custom_pings( $comment ) {
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
    if ( ! is_admin() ) {
        global $id;
        $get_comments = get_comments( 'status=approve&post_id=' . $id );
        $comments_by_type = separate_comments( $get_comments );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}

add_filter( 'nav_menu_css_class', 'menu_item_classes', 10, 4 );

function menu_item_classes( $classes, $item, $args, $depth ) {
    
    $classes[] = 'meniu__item';
    
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    
    return $classes;
}
    
/**
* Builds custom HTML.
*
* With this function, I can alter WPP's HTML output from my theme's functions.php.
* This way, the modification is permanent even if the plugin gets updated.
*
* @param	array	$mostpopular
* @param	array	$instance
* @return	string
*/
function my_custom_popular_posts_html_list( $popular_posts, $instance ){
    $output = '<div class="mj-articles">';
    
    // loop the array of popular posts objects
    foreach( $popular_posts as $popular_post ) {
        
        $stats = array(); // placeholder for the stats tag
        
        // Author option checked
        if ( $instance['stats_tag']['author'] ) {
            $author = get_the_author_meta( 'display_name', $popular_post->uid );
            $image = get_the_author_meta( 'avatar' , $popular_post->uid );
            $display_name = '<h5 class="mj-article__author__name">' . $author . '</h5>';
            $display_image = get_avatar( $popular_post->uid , 50, '', $author, array('class' => 'mj-article__author__image'));
            $stats[] = '<div class="mj-article__author"> <span>SCRIS DE </span>'  . sprintf( __( '%s', 'wordpress-popular-posts' ), $display_name ). sprintf( __( '%s', 'wordpress-popular-posts' ), $display_image ). '</div>';
        }
        
        // Build stats tag
        if ( !empty( $stats ) ) {
            $stats = '<div class="wpp-stats">' . join( ' | ', $stats ) . '</div>';
        } else {
            $stats = null;
        }
        $categories = get_the_category($popular_post->id);
        $output .= "<div class='mj-article'>";
        $output .= "<div class=\"mj-article__image\"><a href=\"" . get_permalink( $popular_post->id ) . "\">". get_the_post_thumbnail($popular_post->id, 'full') ."</a></div>";
        $output .= "<div class=\"mj-article__category\">". $categories[0]->cat_name ."</div>";
        $output .= "<h3 class=\"mj-article__title\"><a href=\"" . get_permalink( $popular_post->id ) . "\" title=\"" . esc_attr( $popular_post->title ) . "\">" . $popular_post->title . "</a></h3>";
        $output .= "<a href=\"" . get_permalink( $popular_post->id ) . "\" class=\"mj-article__link\">Citeste Articolul</a>";
        $output .= $stats;
        $output .= "</div>" . "\n";
    }
    
    $output .= '</div>';
    
    return $output;
}
add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2 );

/**
* Generate breadcrumbs
* @author CodexWorld
* @authorURL www.codexworld.com
*/
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        $category = get_the_category();
        $hierarchy = array_reverse( get_ancestors( $category[0]->term_id, 'category' ) );
        $hierarchy[] = $category[0]->term_id;
        foreach( $hierarchy as $category ) { 
            $url = esc_url( get_category_link( $category  ) );
            $name = get_cat_name($category);
            echo '<a href="'.$url.'">'.$name. '</a>  &nbsp;&nbsp;/&nbsp;&nbsp;';
        }
        if (is_single()) {
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// add_filter( 'the_content', 'filter_the_content_in_the_main_loop' );

function filter_the_content_in_the_main_loop( $content ) {
    // Check if we're inside the main loop in a single post page.
    if ( is_single() ) {
        // find the middle
        $content_length= STRLEN($content);
        $first_third = ($content_length / 3);
        $second_third = ($content_length / 3) * 2;
        
        // clip off the first half
        $one_third = SUBSTR($content, 0, $first_third);
        
        // find the last '<br>' in the first half
        $end_mark_1 = STRRPOS($one_third, '</p>');
        
        // clip off the first half
        $second_third = SUBSTR($content, $end_mark_1, $second_third);
        
        $end_mark_2 = STRRPOS($second_third, '</p>');
        
        // add in the adblob at the position found above
        $banner = '<div class="article_register_call_to_action"><div class="mj-grid"><div class="grid__item width-3/24 hide-on-mobile"></div><div class="grid__item width-12/24"><h3>Conectam profilul tau cu companiile care isi doresc sa te angajeze.</h3></div> <div class="grid__item width-1/24 hide-on-mobile"></div><div class="grid__item width-7/24"><a href="https://app.medijobs.ro/register/" target="_blank" class="mj-btn mj-btn--secondary mj-btn--alt">Creează-ți un cont gratuit</a> </div> <div class="grid__item width-2/24 hide-on-mobile"></div></div> </div>';
        return SUBSTR($content, 0, $end_mark_1) . $banner .SUBSTR($content, $end_mark_1, $end_mark_2 ) . $banner . SUBSTR($content, $end_mark_2, $content_length);
    } else {
        return $content;
    }
}
// ADD CUSTOM POST TYPE
add_action( 'init', 'create_faq' );
function create_faq() {
    register_post_type( 'faq',
    array(
        'labels' => array(
            'name' => __( 'FAQ' ),
            'singular_name' => __( 'FAQ' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'public' => true
        )
    );
}

add_action( 'init', 'gp_register_taxonomy_for_object_type' );
function gp_register_taxonomy_for_object_type() {
    register_taxonomy_for_object_type( 'post_tag', 'faq' );
};

add_action( 'init', 'create_press_release' );
function create_press_release() {
    register_post_type( 'press_release',
    array(
        'labels' => array(
            'name' => __( 'Press Release' ),
            'singular_name' => __( 'Press Release' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true
        )
    );
}

register_taxonomy('faq_type', 'faq',array("hierarchical" => true,"label" => "Type","singular_label" => "label of taxonomy",'update_count_callback' => '_update_post_term_count','query_var' => true,'rewrite' => array( 'slug' => 'slug name of new registered taxonomy', 'with_front' => false ),'public' => true,'show_ui' => true,'show_tagcloud' => true,'_builtin' => false,'show_in_nav_menus' => false));

add_action( 'init', 'create_jobs' );
function create_jobs() {
    register_post_type( 'jobs',
    array(
        'labels' => array(
            'name' => __( 'Jobs' ),
            'singular_name' => __( 'Jobs' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true
        )
    );
}
add_action( 'init', 'create_cariere' );
function create_cariere() {
    register_post_type( 'cariere',
    array(
        'labels' => array(
            'name' => __( 'Cariere' ),
            'singular_name' => __( 'Cariere' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true
        )
    );
}

add_action( 'init', 'create_team' );
function create_team() {
    register_post_type( 'team-member',
    array(
        'labels' => array(
            'name' => __( 'Team Member' ),
            'singular_name' => __( 'Team Member' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'supports' => array('title', 'editor'),
        'public' => true
        )
    );
}

add_action( 'init', 'create_companies' );
function create_companies() {
    register_post_type( 'companies',
    array(
        'labels' => array(
            'name' => __( 'Companies' ),
            'singular_name' => __( 'Companies' )
        ),
        'rewrite' => array(
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true
        )
    );
}

add_theme_support( 'post-thumbnails' );


function the_latest_author_posts($post) {
    
    //some content goes here regarding the post itself!!!
    $relatedargs = array(
        
        'author' => $post->post_author,
        'post__not_in' => array( $post->ID),
        'posts_per_page' => 3
        
    );
    
    $relatedquery = new WP_Query( $relatedargs );
    
    while($relatedquery->have_posts()){
        $relatedquery->the_post(); 
        $ID = get_the_ID();
        ?>
        
        <div class="span3">
        
        <?php
        if(has_post_thumbnail()) { 
            $relatedthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'medium', false);
            $relatedthumbnail_large = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'full', false);
            ?>
            
            <div class="hover_colour"><a href="<?php echo $relatedthumbnail_large['0']; ?>" rel="prettyPhoto"><img src="<?php echo $relatedthumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a>
            </div>
            
            <?php } ?>
            
            <h6><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a><br><i class="icon-time muted"></i> <?php echo get_the_time('j') . '/' . get_the_time('m') . '/' . get_the_time('Y') . ' '; ?> <i class="icon-comments muted"></i> <a href="<?php the_permalink(); ?>"> <?php comments_number(0 . __(' comments','textdomain'), 1 . __(' comment','textdomain'), '% ' . __('comments','textdomain')); ?></a></h6>
            
            </div>
            
    <?php }
    wp_reset_postdata();

}
add_filter('company_jobs', 'get_company_jobs', 999, 7);

add_filter('company_info', 'get_company_info', 999, 7);

function get_company_info($companyID) {
    $http = _wp_http_get_object();
    $url = 'https://app.medijobs.ro/api/odata/company?company_id='.$companyID;
    $result = $http->request($url, array());
    $body = json_decode($result['body'], true);
    $employee_count = $body['employee_count'];
    $founded_year = $body['founded_year'];
    $web = $body['web'];
    $output = '<div class="company_info"><span class="comany_info__header">Founded: </span> <span id="company_founded">'.$founded_year.'</span></div>';
    $output .= '<div class="company_info"><span class="comany_info__header">Employees: </span> <span id="company_employees">'.$employee_count.'</span></div>';
    $output .= '<div class="company_info"><span class="comany_info__header">Website: </span> <a href="http://'.$web.'" target="_blank" id="company_website">'.$web.'</a></div>';
    echo $output;
}

function get_company_jobs($companyID) {
    $http = _wp_http_get_object();
    $url = 'https://app.medijobs.ro/api/odata/company?company_id='.$companyID;
    $result = $http->request($url, array());
    $body = json_decode($result['body'], true);
    $jobs = $body['needs'];
    if (count($jobs) === 0) {
        echo '<h3 class="no_jobs"> This Company has no openings available!</h3>';
    } else {
        $output = '<div class="mj-jobs">';
        foreach($jobs as $job) {
            $output .= "<a href='https://app.medijobs.ro/register/candidate' class='mj-jobs__item'>";
            $output .= "<div class=\"mj-jobs__item-position\">".$job['category']."</div>";
            $output .= "<div class=\"mj-jobs__item-location\">". $job['city'] ."</div>";
            $output .= "<div class=\"mj-jobs__item-department\">". $job['subcategory'] ."</div>";
            $output .= "<div class=\"mj-jobs__item-type\">". $job['schedule'] ."</div>";
            $output .= "</a>" . "\n";
        }
        
        $output .= '</div>';
        echo $output;
        }
}

add_filter('job_information', 'get_job_information', 999, 7);

$jobInfo = [];
function get_job_information($categoryID, $subcategoryID, $returnType) {
    if(!isset($jobInfo) ) {
        $http = _wp_http_get_object();
        $url = 'https://app.medijobs.ro/api/odata/jobs?category_id='.$categoryID.'&subcategory_id='.$subcategoryID;
        $result = $http->request($url, array());
        $jobInfo = json_decode($result['body'], true);
    }

    if($returnType === 'ranges') {
        $output = '';
        $output .= "<div class='price_box'>";
        $output .= " <div class=\"price_box__label\">LOWEST</div>";
        $output .= "<div class=\"price_box__value\">". $jobInfo['min'] ." RON</div>";
        $output .= "</div>" . "\n";
        $output .= "<div class='price_box'>";
        $output .= " <div class=\"price_box__label\">MEDIUM</div>";
        $output .= "<div class=\"price_box__value\">". $jobInfo['avg'] ." RON</div>";
        $output .= "</div>" . "\n";
        $output .= "<div class='price_box'>";
        $output .= " <div class=\"price_box__label\">HIGHEST</div>";
        $output .= "<div class=\"price_box__value\">". $jobInfo['max'] ." RON</div>";
        $output .= "</div>" . "\n";
        echo $output;
    }

    if($returnType === 'cities') {
        foreach($jobInfo['cities'] as $cityJob) {
            $output = '<div class="prices_boxes">';
            $output .= "<div class='price_box price_box--city'>";
            $output .= " <div class=\"price_box__label\">CITY</div>";
            $output .= "<div class=\"price_box__value\">". $cityJob['city'] ."</div>";
            $output .= "</div>" . "\n";
            $output .= "<div class='price_box price_box--amount'>";
            $output .= " <div class=\"price_box__label\">AMOUNT</div>";
            $output .= "<div class=\"price_box__value\">". $cityJob['avg_salary'] ." RON</div>";
            $output .= "</div>" . "\n";
            $output .= "<div class='price_box'>";
            $output .= " <div class=\"price_box__label\">NUMBER</div>";
            $output .= "<div class=\"price_box__value\">". $cityJob['company_count'] ."</div>";
            $output .= "</div>" . "\n";
            $output .= "</div>";
            echo $output;
        }
    }
}
function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'faq' )   
  {
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');  

function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
    $return = array();

    if (class_exists('WPSEO_Primary_Term')){
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)){
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories){
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)){
            $return['primary_category'] = $categories_list[0];  //get the first category
        }
        if ($return_all_categories){
            $return['all_categories'] = array();

            if (!empty($categories_list)){
                foreach($categories_list as &$category){
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}

add_action( 'widgets_init', 'medijobs_widgets_init' );
function medijobs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Col-1', 'medijobs' ),
		'id'            => 'col-1',
		'description'   => esc_html__( 'Add widgets here.', 'medijobs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Col-2', 'medijobs' ),
		'id'            => 'col-2',
		'description'   => esc_html__( 'Add widgets here.', 'medijobs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Col-3', 'medijobs' ),
		'id'            => 'col-3',
		'description'   => esc_html__( 'Add widgets here.', 'medijobs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Col-4', 'medijobs' ),
		'id'            => 'col-4',
		'description'   => esc_html__( 'Add widgets here.', 'medijobs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}

