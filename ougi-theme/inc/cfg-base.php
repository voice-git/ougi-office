<?php
/**
 * add_theme_support関連の設定
 */
/*add_theme_support( 'title-tag' );*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'editor-styles' );
$custom_header = array(
  'random-default'     => false,
  'width'              => CUSTOM_HEADER_WIDTH,
  'height'             => CUSTOM_HEADER_HEIGHT,
  'flex-height'        => false,
  'flex-width'         => false,
  'default-text-color' => '',
  'header-text'        => false,
  'uploads'            => true,
);
// add_theme_support( 'custom-header', $custom_header );

/**
 * タイトルタグのカスタマイズ
 */
// 区切り文字を変更
/*function custom_title_sep( $sep ){
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'custom_title_sep' );
// 表示内容変更
function custom_title_text( $results ){
}*/
// add_filter( 'document_title_parts', 'custom_title_text', 11 );

/**
 * アーカイブタイトルのカスタマイズ
 */
function custom_archive_title( $title ){
  if( is_category() ){
    $title = single_cat_title( '', false );
  }
  else if( is_tag() ){
    $title = single_tag_title( '', false );
  }
  else if( is_post_type_archive() ){
    $title = post_type_archive_title( '', false );
  }
  else if( is_tax() ){
    $title = single_term_title( '', false );
  }
  else if( is_month() ){
    $title = get_query_var( 'year' ).'年'.get_query_var( 'monthnum' ).'月';
  }
  else if( is_author() ){
    $title = get_the_author();
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'custom_archive_title' );

/**
 * ウィジェット関連の設定
 */
if( function_exists( 'register_sidebar' ) ){
  register_sidebar( array(
    'name'          => 'サイドバー',
    'id'            => 'sidebar',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="l-side__widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="l-side__heading">',
    'after_title'   => '</h2>'
  ) );
}

/**
 * カスタムメニュー関連の設定
 */
register_nav_menu( 'gmenu', 'グローバルメニュー' );

/**
 * 投稿のパーマリンク設定
 */
function add_custom_post_permalink( $permalink ) {
  $permalink = '/'.POST_PERMALINK.'' . $permalink;
  return $permalink;
}
if( POST_PERMALINK != 'default' ){
  add_filter( 'pre_post_link', 'add_custom_post_permalink' );
}
function add_custom_post_rewrite_rules( $post_rewrite ) {
  $return_rule = array();
  foreach ( $post_rewrite as $regex => $rewrite ) {
    $return_rule[POST_PERMALINK.'/' . $regex] = $rewrite;
  }
  return $return_rule;
}
if( POST_PERMALINK != 'default' ){
  add_filter( 'post_rewrite_rules', 'add_custom_post_rewrite_rules' );
}
/**
 * その他設定
 */
// コンテンツ幅
if( !isset( $content_width ) ){
  $content_width = CONTENT_WIDTH;
}

// CSS・JS読み込みの設定
function load_style_script(){
  wp_deregister_script( 'jquery' );
  // css
  wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css?ver='.filemtime( get_theme_file_path( 'style.css' ) ), array(), NULL );
  wp_enqueue_style( 'restyle', get_stylesheet_directory_uri().'/scss/restyle.css?ver='.filemtime( get_theme_file_path( 'scss/restyle.css' ) ), array(), NULL );
  // js
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), NULL, true );
  wp_enqueue_script( 'swiper', get_theme_file_uri( 'js/lib/swiper.min.js' ), array(), NULL, true );
  wp_enqueue_script( 'inview', get_theme_file_uri( 'js/lib/jquery.inview.min.js' ), array(), NULL, true );
  wp_enqueue_script( 'main', get_theme_file_uri( 'js/main.js' ).'?ver='.filemtime( get_theme_file_path( 'js/main.js' ) ), array(), NULL, true );
}
add_action( 'wp_enqueue_scripts', 'load_style_script' );

// 編集画面CSS読み込み
add_editor_style();

// 管理画面CSS・JS読み込み
function load_admin_style_script(){
  wp_enqueue_style( 'admin_style', get_theme_file_uri( 'admin.min.css' ).'?ver='.filemtime( get_theme_file_path( 'admin.min.css' ) ), array(), NULL );
}
add_action( 'admin_enqueue_scripts', 'load_admin_style_script' );
?>