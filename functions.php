<?php 
if ( ! isset( $content_width ) )
    $content_width = 822; /* pixels */

if ( ! function_exists( 'ifpr_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ifpr_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'ifpr_theme', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

/**
 * Register the sidebars
 */

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'esquerda',
            'name'          => __( 'Coluna Esquerda', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna esquerda.', 'ifpr_theme' ),
            'before_widget' => '<div class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '<i class="fas fa-angle-down ml-2"></i></h5>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'direita',
            'name'          => __( 'Coluna Direita', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna direita.', 'ifpr_theme' ),
            'before_widget' => '<div class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title"><i class="fas fa-angle-right"></i>',
            'after_title'   => '</h5>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'centro',
            'name'          => __( 'Coluna Central', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna central.', 'ifpr_theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-12">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'footer',
            'name'          => __( 'Rodapé', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos no rodapé.', 'ifpr_theme' ),
            'before_widget' => '<div class="footer-%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'address',
            'name'          => __( 'Endereço', 'ifpr_theme' ),
            'description'   => __( 'Endereço do campus.', 'ifpr_theme' ),
            'before_widget' => '<address class="col-12 text-center">',
            'after_widget'  => '</address>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'video01',
            'name'          => __( 'Video01', 'ifpr_theme' ),
            'description'   => __( 'Video do YouTube na esquerda.', 'ifpr_theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-md-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'video02',
            'name'          => __( 'Video02', 'ifpr_theme' ),
            'description'   => __( 'Video do YouTube na direita.', 'ifpr_theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-md-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'nonmodal-rodape',
            'name'          => __( 'Nonmodal', 'ifpr_theme' ),
            'description'   => __( 'Nonmodal do topo da pagina inicial;.', 'ifpr_theme' ),
            'before_widget' => '<div class="nonmodal-rodape">',
            'after_widget'  => '<button type="button" class="close ml-3 align-self-start align-self-md-center" data-dismiss="nonmodal-rodape" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
  
  register_sidebar(
        array(
            'id'            => 'widget-servidor',
            'name'          => __( 'Widgets da página do servidor', 'ifpr_theme' ),
            'description'   => __( 'Widgets da página do servidor', 'ifpr_theme' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
	}

	add_theme_support( 'post-thumbnails' );
}
	function register_my_menu() {
		register_nav_menu('nav-superior',__( 'Nav Superior', 'ifpr_theme' ));
		register_nav_menu('nav-servidor',__( 'Nav Servidor', 'ifpr_theme' ));
		register_nav_menu('nav-portal',__( 'Nav Portal', 'ifpr_theme' ));
		register_nav_menu('nav-manual-servidor',__( 'Nav Manual do Servidor', 'ifpr_theme' ));
    	register_nav_menu('nav-translation',__( 'Nav Translation', 'ifpr_theme' ));
		register_nav_menu('nav-difusao',__( 'Nav Difusao', 'ifpr_theme' ));
	}
	add_action( 'init', 'register_my_menu' );

	function custom_setup() {
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'custom_setup' );

	function add_style_select_buttons( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}
	// Register our callback to the appropriate filter
	add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

  /**
   *
   * Assets
   * Fontes, CSS e JS
   *
   */
  function ifpr_style_scripts() {
    $template_url = get_template_directory_uri();
    $theme_version = wp_get_theme()->get( 'Version' );

    // Bootstrap
    wp_enqueue_style( 'bootstrap', $template_url . '/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');

    //style.css
    wp_enqueue_style( 'ifpr-style', get_stylesheet_uri(), array(), $theme_version );

    //style-new.css
    wp_enqueue_style( 'new-styles', $template_url . '/style-new.css', array(), '0.01', 'all');

    // Font Awesome
    wp_enqueue_style( 'fontawesome', $template_url . '/assets/css/all.css', array(), '5.6.3', 'all');

// Style Portal das Artes
    if ( is_page_template( 'page-portal-das-artes.php' ) ) {
      wp_enqueue_style( 'porta das artes', $template_url . '/assets/css/portal-das-artes.css', array(), '$theme_version', 'all' );
      wp_enqueue_style( 'pagina-mapa', $template_url . '/assets/css/leaflet.css', array(), $theme_version, 'all' );
      wp_enqueue_script( 'pagina-mapa', $template_url . '/assets/js/leaflet.js', array(), '1.6', false);
    }

    // Style Covid
    if ( is_page_template( 'page-covid.php' ) ) {
      wp_enqueue_style( 'covid', $template_url . '/assets/css/covid.css', array(), $theme_version, 'all' );
    }

    // Style Difusao
    if ( is_page_template( 'page-difusao.php' ) ) {
      wp_enqueue_style( 'difusao', $template_url . '/assets/css/page-difusao.css', array(), $theme_version, 'all' );
    }

    // Style Semana do Servidor
    if ( is_page_template( 'category-semana-servidor.php' ) ) {
      wp_enqueue_style( 'semana-servidor', $template_url . '/assets/css/semana-servidor-foz.css', array(), $theme_version, 'all' );
    }

    // Style Mapa Leaflet
    if ( is_page_template( 'page-mapa.php' ) ) {
      wp_enqueue_style( 'pagina-mapa', $template_url . '/assets/css/leaflet.css', array(), $theme_version, 'all' );
      wp_enqueue_script( 'pagina-mapa', $template_url . '/assets/js/leaflet.js', array(), '1.6', false);
    }
	  
    // Style Catalogo de Laboratorios
    if ( is_page_template( array( 'page-laboratorio-principal.php', 'page-laboratorio-campus.php') ) || is_singular('laboratory') || is_tax("area") ) {
        wp_enqueue_style( 'cat-lab-ifpr', $template_url . '/assets/css/cat-lab-styles.css', array(), $theme_version, 'all' );
    }
    
    // Style Pagina do SEI
    if ( is_page_template( 'category-sei.php' ) ) {
      wp_enqueue_style( 'pagina-sei', $template_url . '/assets/css/style-sei.css', array(), $theme_version, 'all' );
    }

    // Style New
      wp_enqueue_style( 'styles-new', $template_url . '/style-new.css', array(), $theme_version, 'all' );
 
    // jQuery Native
    wp_enqueue_script( 'jquery' );

    // Jquery Theme
    wp_enqueue_script( 'jquerytheme', $template_url . '/assets/js/jquery.min.js', array(), '3.4.1', true);

    // Bootstrap JS
    wp_enqueue_script('bootstrapjs', $template_url . '/assets/js/bootstrap.bundle-min.js', array(), '4.4.1', true );

    // My JS
    wp_enqueue_script('myjs', $template_url . '/assets/js/scripts.js', array(), '0.3', true );
    
    //Consentimento 
    wp_enqueue_script('agree', $template_url . '/assets/js/agree.js', array(), '0.1', true);

    // Gallery Style and JS
    if ( is_single() || is_page() ) {
      //all
      wp_enqueue_style( 'frescocss', $template_url . '/assets/gallery/fresco.css', array(), $theme_version, 'all');
      //para wordpress 5.1.1
      wp_enqueue_script( 'setdata', $template_url . '/assets/gallery/gallery-old.js', array(), $theme_version, true );
      //para wordpress mais recente
      //wp_enqueue_script( 'setdata', $template_url . '/assets/gallery/gallery.js', array(), $theme_version, true );
      //all
      wp_enqueue_script( 'frescojs', $template_url . '/assets/gallery/fresco.js', array(), $theme_version, true );
    }
    // Defer for myjs and setdata
    function add_defer_to_script( $tag, $handle, $src ) {
      if ( 'myjs' === $handle ) {
          $tag = str_replace( ' src', ' defer=\'defer\' src', $tag );
      }
      if ( 'setdata' === $handle ) {
        $tag = str_replace( ' src', ' defer=\'defer\' src', $tag );
      }
      return $tag;
    }
    add_filter( 'script_loader_tag', 'add_defer_to_script', 10, 5 );
  }
  add_action( 'wp_enqueue_scripts', 'ifpr_style_scripts' );

	//Adding the Open Graph in the Language Attributes
	function add_opengraph_doctype( $output ) {
			return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
		}
	add_filter('language_attributes', 'add_opengraph_doctype');

endif; // end_ifpr_setup
add_action( 'after_setup_theme', 'ifpr_setup' );

// only category "noticias" will be show on the home page
function my_home_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'category_name', 'noticias');
  }
}
add_action( 'pre_get_posts', 'my_home_category' );

/**
 * Social Share
 * @link http://crunchify.me/1VIxAsz
 */
function crunchify_social_sharing_buttons() {
			// Get current page URL
			$crunchifyURL = urlencode(get_permalink());

			// Get current page title
			$crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
			// $crunchifyTitle = str_replace( ' ', '%20', get_the_title());

			// Construct sharing URL without using any script
			$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
			$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
			$whatsappURL = 'whatsapp://send?text='.$crunchifyTitle . '&nbsp;' . $crunchifyURL;
			$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;

			// Add sharing button at the end of page/page content
      $content = "";
			$content .= '<h6><i class="fas fa-share-square"></i> Compartilhe</h6> <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fab fa-twitter-square"></i> Twitter</a>';
			$content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>';
			$content .= '<a class="crunchify-link crunchify-whatsapp" href="'.$whatsappURL.'" target="_blank"><i class="fab fa-whatsapp-square"></i> WhatsApp</a>';
			$content .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>';

			return $content;
}

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/**
 * Breadcrumb
 */
 function the_breadcrumb() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '/'; // delimiter between crumbs
  $home = '<i class="fas fa-home"></i>'; // text for the 'Home' link
  $showCurrent = 0; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = esc_url( home_url() );

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '" aria-label="Ir para o início">' . $home . '</a></div>';

  } else {

    echo '<div id="crumbs"><a href="' . $homeLink . '" aria-label="Ir para o início">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . _e('Arquivos da categoria "', 'ifpr_theme') . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . _e('Resultados de busca para "', 'ifpr_theme') . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      //if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . _e('Not&#237;cias sobre "', 'ifpr_theme') . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
      echo $before . _e('Artigos publicados por ', 'ifpr_theme') . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . _e('Erro 404 ', 'ifpr_theme') . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('P&aacute;gina', 'ifpr_theme') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end the_breadcrumb()

function add_menu_parent_class( $items ) {
			$parents = array();
			foreach ( $items as $item ) {
				if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
					$parents[] = $item->menu_item_parent;
				}
			}
			foreach ( $items as $item ) {
				if ( in_array( $item->ID, $parents ) ) {
					$item->classes[] = 'menu-parent-item';
				}
			}
			return $items;
		}

// Add this to the functions.php file of your WordPress theme
// It filters the mime types using the upload_mimes filter hook
// Add as many keys/values to the $mimes Array as needed

function my_custom_upload_mimes($mimes = array()) {

	// Add a key and value for the CSV file type
	$mimes['doc'] = "Application / msword";

	return $mimes;
}

add_action('upload_mimes', 'my_custom_upload_mimes');

/**
 * Suporte Custom Header, Background
 */

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

/**
 * Remove WP Emoji
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Funcionalidades extras
 */

// Paginacao
require_once get_template_directory() . '/helpers/pagination.php';

// Seguranca
require_once get_template_directory() . '/helpers/security.php';

// Galeria
require_once get_template_directory() . '/helpers/gallery.php';

/**
 * Register a custom post type called "laboratory".
 *
 * @see get_post_type_labels() for label keys.
 */
function ifpr_laboratory_cpt() {
    $labels = array(
        'name'                  => _x( 'Laboratories', 'Post type general name', 'ifpr_theme' ),
        'singular_name'         => _x( 'Laboratory', 'Post type singular name', 'ifpr_theme' ),
        'menu_name'             => _x( 'Laboratories', 'Admin Menu text', 'ifpr_theme' ),
        'name_admin_bar'        => _x( 'Laboratory', 'Add New on Toolbar', 'ifpr_theme' ),
        'add_new'               => __( 'Add New', 'ifpr_theme' ),
        'add_new_item'          => __( 'Add New Laboratory', 'ifpr_theme' ),
        'new_item'              => __( 'New Laboratory', 'ifpr_theme' ),
        'edit_item'             => __( 'Edit Laboratory', 'ifpr_theme' ),
        'view_item'             => __( 'View Laboratory', 'ifpr_theme' ),
        'all_items'             => __( 'All Laboratories', 'ifpr_theme' ),
        'search_items'          => __( 'Search Laboratories', 'ifpr_theme' ),
        'parent_item_colon'     => __( 'Parent Laboratories:', 'ifpr_theme' ),
        'not_found'             => __( 'No laboratories found.', 'ifpr_theme' ),
        'not_found_in_trash'    => __( 'No laboratories found in Trash.', 'ifpr_theme' ),
        'featured_image'        => _x( 'Laboratory Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'archives'              => _x( 'Laboratory archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ifpr_theme' ),
        'insert_into_item'      => _x( 'Insert into laboratory', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ifpr_theme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this laboratory', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ifpr_theme' ),
        'filter_items_list'     => _x( 'Filter laboratories list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ifpr_theme' ),
        'items_list_navigation' => _x( 'Laboratories list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ifpr_theme' ),
        'items_list'            => _x( 'Laboratories list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ifpr_theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'laboratory' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
    );

    register_post_type( 'laboratory', $args );
}

add_action( 'init', 'ifpr_laboratory_cpt' );

/**
 * Create a custom taxonomy called "area" for the post type "laboratory".
 *
 * @see register_post_type() for registering custom post types.
 */
function ifpr_laboratory_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Areas', 'taxonomy general name', 'ifpr_theme' ),
        'singular_name'     => _x( 'Area', 'taxonomy singular name', 'ifpr_theme' ),
        'search_items'      => __( 'Search Areas', 'ifpr_theme' ),
        'all_items'         => __( 'All Areas', 'ifpr_theme' ),
        'parent_item'       => __( 'Parent Area', 'ifpr_theme' ),
        'parent_item_colon' => __( 'Parent Area:', 'ifpr_theme' ),
        'edit_item'         => __( 'Edit Area', 'ifpr_theme' ),
        'update_item'       => __( 'Update Area', 'ifpr_theme' ),
        'add_new_item'      => __( 'Add New Area', 'ifpr_theme' ),
        'new_item_name'     => __( 'New Area Name', 'ifpr_theme' ),
        'menu_name'         => __( 'Area', 'ifpr_theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'area' ),
    );

    register_taxonomy( 'area', array( 'laboratory' ), $args );

    unset( $args );
    unset( $labels );

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Campus', 'taxonomy general name', 'ifpr_theme' ),
        'singular_name'              => _x( 'Campus', 'taxonomy singular name', 'ifpr_theme' ),
        'search_items'               => __( 'Search Campus', 'ifpr_theme' ),
        'popular_items'              => __( 'Popular Campus', 'ifpr_theme' ),
        'all_items'                  => __( 'All Campus', 'ifpr_theme' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Campus', 'ifpr_theme' ),
        'update_item'                => __( 'Update Campus', 'ifpr_theme' ),
        'add_new_item'               => __( 'Add New Campus', 'ifpr_theme' ),
        'new_item_name'              => __( 'New Campus Name', 'ifpr_theme' ),
        'separate_items_with_commas' => __( 'Separate campus with commas', 'ifpr_theme' ),
        'add_or_remove_items'        => __( 'Add or remove campus', 'ifpr_theme' ),
        'choose_from_most_used'      => __( 'Choose from the most used campus', 'ifpr_theme' ),
        'not_found'                  => __( 'No campus found.', 'ifpr_theme' ),
        'menu_name'                  => __( 'Campus', 'ifpr_theme' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'campus' ),
    );

    register_taxonomy( 'campus', 'laboratory', $args );
}
// hook into the init action and call ifpr_laboratory_taxonomies when it fires
add_action( 'init', 'ifpr_laboratory_taxonomies', 0 );

/**
	* Registers an editor stylesheet for the theme.
	*/
	function wpdocs_theme_add_editor_styles() {
		add_theme_support('editor-styles');
		add_editor_style( 'editor-style.css' );
	}
	add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

  /**
 * Enable unfiltered_html capability for Editors.
 *
 * @param  array  $caps    The user's capabilities.
 * @param  string $cap     Capability name.
 * @param  int    $user_id The user ID.
 * @return array  $caps    The user's capabilities, with 'unfiltered_html' potentially added.
 */
function km_add_unfiltered_html_capability_to_editors( $caps, $cap, $user_id ) {

	if ( 'unfiltered_html' === $cap && user_can( $user_id, 'administrator' ) ) {

		$caps = array( 'unfiltered_html' );

	}

	return $caps;
}
add_filter( 'map_meta_cap', 'km_add_unfiltered_html_capability_to_editors', 1, 3 );