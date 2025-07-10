<?php
// カスタムフィールド用のブロックを追加
function add_box_custom(){
  // ディスクリプション
  add_meta_box( 'custom_description', 'ディスクリプション設定', 'box_form_custom_description', 'post', 'normal', 'high' );
  add_meta_box( 'custom_description', 'ディスクリプション設定', 'box_form_custom_description', 'page', 'normal', 'high' );
  // FB画像
  add_meta_box( 'custom_og_image', 'FB用画像設定', 'box_form_custom_og_image', 'post', 'normal', 'high' );
  add_meta_box( 'custom_og_image', 'FB用画像設定', 'box_form_custom_og_image', 'page', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_box_custom' );

// カスタムフィールド用ブロックの内容
function box_form_custom_description(){
  global $post;
  // nonceフィールドを設置
  wp_nonce_field( wp_create_nonce( __FILE__ ), 'nonce' );
?>
<!-- .box-form -->
<div class="box-form">
  <p>個別でディスクリプションを設定する場合は、入力してください。</p>
  <input type="text" name="custom_description" id="custom_description"  value="<?php echo get_post_meta( $post->ID, 'custom_description', true ); ?>" style="width: 80%;">
</div>
<!-- /#box-form -->
<?php
}

function box_form_custom_og_image(){
  global $post;
  // nonceフィールドを設置
  wp_nonce_field( wp_create_nonce( __FILE__ ), 'nonce' );
?>
<!-- .box-form -->
<div class="box-form">
  <p>個別でFB用画像を設定する場合は、URLを入力してください。</p>
  <input type="text" name="custom_og_image" id="custom_og_image"  value="<?php echo get_post_meta( $post->ID, 'custom_og_image', true ); ?>" style="width: 80%;">
</div>
<!-- /#box-form -->
<?php
}

// 追加したカスタムフィールドの保存
function box_save( $post_id ){
  global $post;
  // nonceの値を変数に格納
  $nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : null;
  // nonceを確認し、値が書き換えられていた場合
  if( !wp_verify_nonce( $nonce, wp_create_nonce( __FILE__ ) ) ){
    // 何もしない（CSRF対策）
    return $post_id;
  }
  // 自動保存が走った場合（記事の自動保存処理として呼び出された場合の対策）
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
    // 何もしない
    return $post_id;
  }
  // ユーザーが編集権限を持っていない場合
  if( !current_user_can( 'edit_post', $post->ID ) ){
    // 何もしない
    return $post_id;
  }
  // 投稿タイプがpostかpageだった場合
  if( $_POST['post_type'] == 'post' || $_POST['post_type'] == 'page' ){
    // 入力された情報を保存＆更新するように指定（追加可能）
    update_post_meta( $post->ID, 'custom_description', $_POST['custom_description'] );
    update_post_meta( $post->ID, 'custom_og_image', $_POST['custom_og_image'] );
  }
}
add_action( 'save_post', 'box_save' );
?>