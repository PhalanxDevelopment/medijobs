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
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
    wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
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
        $output .= "<a href=\"" . get_permalink( $popular_post->id ) . "\" class=\"mj-article__link\">Citeste</a>";
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
        the_category(' / ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
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

add_filter( 'the_content', 'filter_the_content_in_the_main_loop' );

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