<?php
// 通常時のサンプル
function shortcode_test1( $atts ){
  $atts = shortcode_atts( array(
    'text1' => 'テキスト1',
    'text2' => 'テキスト2'
  ), $atts, 'test1' );

  return $atts['text1'].'＆'.$atts['text2'];
}
// add_shortcode( 'test1', 'shortcode_test1' );

// 囲み型のサンプル
function shortcode_test2( $atts, $content = '' ){
  return '<div class="test">'.$content.'</div>';
}
// add_shortcode( 'test2', 'shortcode_test2' );
?>