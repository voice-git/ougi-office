<?php
// 設定項目の配列
$keys = array(
  'test'
);
// オプション更新（配列をループ）
$update_message = NULL;
if( !empty( $_POST ) && check_admin_referer( 'sample' ) ){
  foreach( $keys as $key ){
    // 中身が空だった場合
    if( empty( $_POST[$key] ) ){
      // $keyの中身を変数名にし、NULLにする
      $$key = NULL;
    }
    // 中身があった場合
    else{
      // $keyの中身を変数名にし、ポストの値を代入
      $$key = $_POST[$key];
    }
    // 更新
    update_option( $key, $$key, 'no' );
    // 設定完了のメッセージ設定
    $update_message =
    '
    <div id="setting-error-settings_updated" class="updated settings-error">
      <p><strong>設定を保存しました。</strong></p>
    </div>
    ';
  }
}
?>
<div id="theme-options" class="wrap">
  <h2>サイト設定</h2>
<?php
    echo $update_message;
?>
  <form action="" method="post">
<?php
    submit_button();
?>
    <table class="form-table">
      <tr>
        <th>テスト項目</th>
        <td>
          <input name="test" type="text" value="<?php echo get_option( 'test' ); ?>" />
        </td>
      </tr>
    </table>
<?php
      wp_nonce_field( 'sample' );
?>
<?php
      submit_button();
?>
  </form>
</div>