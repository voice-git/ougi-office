<?php
/**
 * metaタグ関連の設定
 * @param string $meta 取得するmetaタグの指定
 */
function get_custom_metatag( $meta = NULL ){
  global $post;
  $results = NULL;
  // description
  if( $meta == 'description' ){
    $results = get_bloginfo( 'description' );
    if( is_single() || is_page() ){
      if( get_post_meta( $post->ID, 'custom_description', true ) ){
        $results = get_post_meta( $post->ID, 'custom_description', true );
      }
      else if( $post->post_content ){
        $results = strip_tags( str_replace( array( "\r\n","\n","\r" ), '', $post->post_content ) );
      }
      else{
        $results = get_bloginfo( 'description' );
      }
    }
    else if( is_archive() ){
      $term = get_queried_object();
      if( $term->description ){
        $results = $term->description;
      }
      else{
        $results = get_the_archive_title().'一覧ページです。';
      }
    }
    $count_description = mb_strlen( $results );
    if( $count_description > 120 ){
      $results = mb_substr( $results, 0, 120 ).'…';
    }
  }
  // og:image
  else if( $meta == 'image' ){
    if( is_single() || is_page() ){
      if( has_post_thumbnail( $post ) ){
        $results = get_the_post_thumbnail_url( $post, 'full' );
      }
      else{
        $results = get_theme_file_uri( 'images/og_image.png' );
      }
    }
    else{
      $results = get_theme_file_uri( 'images/og_image.png' );
    }
  }
  // og:url
  else if( $meta == 'url' ){
    $results = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  }
  return $results;
}
?>