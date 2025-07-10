<?php
/**
 * カスタム投稿タイプの設定
 */
function create_post_type(){
  /**********************
  コラム
  ***********************/
  $posttype_label = 'コラム';
  $labels = array(
    'name'               => $posttype_label,
    'singular_name'      => $posttype_label,
    'add_new'            => '新規登録',
    'add_new_item'       => '新規登録',
    'edit_item'          => $posttype_label.'の編集',
    'new_item'           => '新規'.$posttype_label,
    'view_item'          => '記事を見てみる',
    'search_items'       => '記事を探す',
    'not_found'          => '記事はありません',
    'not_found_in_trash' => 'ゴミ箱に記事はありません',
    'parent_item_colon'  => ''
  );
  $supports = array(
    'title',
    'editor',
    'thumbnail',
    'custom-fields',
    'excerpt',
    'revisions',
    // 'page-attributes',
    // 'comments'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true, // 記事一覧を使用しない場合は false
    'exclude_from_search' => false, // 検索位結果から除外させたい場合は true
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'menu_position'       => 5,
    'supports'            => $supports,
    'has_archive'         => true, // 記事一覧を使用しない場合は false
    'show_in_rest'         => true
  );
  register_post_type( 'column', $args );
  // タクソノミーの登録
  $args = array(
    'label'        => 'カテゴリー',
    'public'       => true,
    'show_ui'      => true,
    'hierarchical' => true,
    'show_in_rest' => true
  );
  register_taxonomy( 'column_cat', 'column', $args );

  /**********************
  お客様の声
  ***********************/
  $posttype_label = 'お客様の声';
  $labels = array(
    'name'               => $posttype_label,
    'singular_name'      => $posttype_label,
    'add_new'            => '新規登録',
    'add_new_item'       => '新規登録',
    'edit_item'          => $posttype_label.'の編集',
    'new_item'           => '新規'.$posttype_label,
    'view_item'          => '記事を見てみる',
    'search_items'       => '記事を探す',
    'not_found'          => '記事はありません',
    'not_found_in_trash' => 'ゴミ箱に記事はありません',
    'parent_item_colon'  => ''
  );
  $supports = array(
    'title',
    'editor',
    'thumbnail',
    'custom-fields',
    'excerpt',
    'revisions',
    // 'page-attributes',
    // 'comments'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true, // 記事一覧を使用しない場合は false
    'exclude_from_search' => false, // 検索位結果から除外させたい場合は true
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'menu_position'       => 5,
    'supports'            => $supports,
    'has_archive'         => true, // 記事一覧を使用しない場合は false
    'show_in_rest'         => true
  );
  register_post_type( 'voice', $args );
  // タクソノミーの登録
  $args = array(
    'label'        => 'カテゴリー',
    'public'       => true,
    'show_ui'      => true,
    'hierarchical' => true,
    'show_in_rest' => true
  );
  register_taxonomy( 'voice_cat', 'voice', $args );

  /**********************
  よくあるご質問
  ***********************/
  $posttype_label = 'よくあるご質問';
  $labels = array(
    'name'               => $posttype_label,
    'singular_name'      => $posttype_label,
    'add_new'            => '新規登録',
    'add_new_item'       => '新規登録',
    'edit_item'          => $posttype_label.'の編集',
    'new_item'           => '新規'.$posttype_label,
    'view_item'          => '記事を見てみる',
    'search_items'       => '記事を探す',
    'not_found'          => '記事はありません',
    'not_found_in_trash' => 'ゴミ箱に記事はありません',
    'parent_item_colon'  => ''
  );
  $supports = array(
    'title',
    // 'editor',
    // 'thumbnail',
    'custom-fields',
    // 'excerpt',
    'revisions',
    // 'page-attributes',
    // 'comments'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true, // 記事一覧を使用しない場合は false
    'exclude_from_search' => false, // 検索位結果から除外させたい場合は true
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'menu_position'       => 5,
    'supports'            => $supports,
    'has_archive'         => true, // 記事一覧を使用しない場合は false
    'show_in_rest'         => true
  );
  register_post_type( 'faq', $args );
  // タクソノミーの登録
  $args = array(
    'label'        => 'カテゴリー',
    'public'       => true,
    'show_ui'      => true,
    'hierarchical' => true,
    'show_in_rest' => true
  );
  register_taxonomy( 'faq_cat', 'faq', $args );
}
add_action( 'init', 'create_post_type' );
?>