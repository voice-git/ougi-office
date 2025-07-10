<?php
/**
 * 管理画面にカスタムページを追加する設定
 */
// カスタムメニュー追加
function add_admin_menu(){
  // add_menu_page( 'サンプルページ', 'サンプルページ', 'administrator', 'sample', 'sample_page', '', '3' );
  // テーマオプションにサブメニューを追加する場合、以下を使う
  // add_submenu_page( 'theme_options', '子メニュー', '子メニュー', 'administrator', 'shortcode_lists', 'ここに内容の関数' );
}
// カスタムメニュー内容
function sample_page(){
  require TEMPLATEPATH.'/admin/sample.php';
}
// admin_menuにフック
// add_action( 'admin_menu', 'add_admin_menu' );

/**
 * 管理画面メニューの非表示設定
 * 非表示にしたい項目のコメントアウトを解除する
 */
function remove_menus(){
    global $menu;
    // unset($menu[2]);  // ダッシュボード
    // unset($menu[4]);  // メニューの線1
    // unset($menu[5]);  // 投稿
    // unset($menu[10]); // メディア
    // unset($menu[15]); // リンク
    // unset($menu[20]); // ページ
    // unset($menu[25]); // コメント
    // unset($menu[59]); // メニューの線2
    // unset($menu[60]); // テーマ
    // unset($menu[65]); // プラグイン
    // unset($menu[70]); // プロフィール
    // unset($menu[75]); // ツール
    // unset($menu[80]); // 設定
    // unset($menu[90]); // メニューの線3
}
// add_action( 'admin_menu', 'remove_menus' );

/**
 * ダッシュボード項目一覧のカスタマイズ設定
 * ■項目追加(post_columns関数)
 * $columns['field'] = 'フィールド名';
 * ■項目内容(add_column関数)
 * if( $column_name == 'field' ){
 *     // ここに表示させる項目内容に設定
 * }
 * ※使用したい場合、add_filter,add_action関数のコメントアウト解除
 */
function posts_columns( $columns ){
  // サムネイル画像の追加
  $columns['thumb'] = 'サムネイル';
  // 項目の削除（以下、作成者・コメントを削除する例）
  // unset( $columns['author'], $columns['comments'] );
  // 項目の並び替え（以下のように、配列を再定義）
  // $columns = array(
  //   'cb'         => '<input type="checkbox">',
  //   'title'      => 'タイトル',
  //   'author'     => '作成者',
  //   'categories' => 'カテゴリー',
  //   'tags'       => 'タグ',
  //   'comments'   => '<span class="vers comment-grey-bubble" title="コメント"><span class="screen-reader-text">コメント</span></span>',
  //   'date'       => '日時'
  // );
  return $columns;
}
function add_column( $column_name, $post_id ){
  // サムネイル画像の追加
  if( $column_name == 'thumb' ){
    echo get_the_post_thumbnail( get_post(), 'post-thumbnail' );
  }
}
// add_filter( 'manage_posts_columns', 'posts_columns' );
// add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );

?>