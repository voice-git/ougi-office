<?php
/**
 * ロゴ画像の出力
 * ロゴ未設定の場合、テキスト出力
 * トップページの場合はh1、それ以外の場合はdiv
 */
function original_the_custom_logo( $mode ){
  $logo = $tag = $class = NULL;
  // ロゴが設定されている場合
  if( $mode == 'sp' ){
    $logo = '<a href="'.home_url().'"><img src="'.get_theme_file_uri( 'images/logo_sp.svg' ).'" alt="'.get_bloginfo( 'name' ).'"></a>';
  }
  else{
    $logo = '<a href="'.home_url().'"><img src="'.get_theme_file_uri( 'images/logo.svg' ).'" alt="'.get_bloginfo( 'name' ).'"></a>';
  }
  if( $mode == 'sp' ){
    $class = 'l-header__logo';
  }
  else{
    $class = 'l-side__logo';
  }
  // トップページの場合
  if( is_front_page() ){
    $tag = 'h1';
  }
  // トップページ以外の場合
  else{
    $tag = 'div';
  }
  echo '<'.$tag.' class="'.$class.'">'.$logo.'</'.$tag.'>';
}

/**
 * パンくず出力
 */
function the_breadcrumbs(){
  global $post;
  global $wp_query;
  $results = '';
  // 投稿タイプ情報生成
  $posttype      = get_post_type_object( get_post_type() );
  $posttype_term = get_post_type_object( $wp_query->posts[0]->post_type );
  // ターム情報生成
  $taxonomy       = get_post_taxonomies( $post );
  $terms           = get_the_terms( $post, $taxonomy[0] );
  $terms_ancestors = get_ancestors( $terms[0]->term_id, $terms[0]->taxonomy );
  // 変数に格納
  $results .=
  '
  <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="l-breadcrumbs-list">
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--home">
      <a itemprop="item" href="'.home_url( '/' ).'">
        <span itemprop="name">
          HOME
        </span>
      </a>
      <meta itemprop="position" content="1" />
    </li>
  ';
  // アーカイブの場合
  if( is_archive() ){
    $count = 2;
    if( is_tax() ){
      $results .=
      '
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
        <a itemprop="item" href="'.get_post_type_archive_link( $posttype_term->name ).'">
          <span itemprop="name">
            '.$posttype_term->label.'
          </span>
        </a>
        <meta itemprop="position" content="'.$count.'" />
      </li>
      ';
      $count++;
      $term = get_queried_object();
      $term_ancestors = get_ancestors( $term->term_id, $term->taxonomy );
      if( $term_ancestors ){
        $term_ancestors = array_reverse( $term_ancestors );
        foreach( $term_ancestors as $ancestor ){
          $termobj = get_term( $ancestor, $term->taxonomy );
          $results .=
          '
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
            <a itemprop="item" href="'.get_term_link( $termobj->term_id ).'">
              <span itemprop="name">
                '.$termobj->name.'
              </span>
            </a>
            <meta itemprop="position" content="'.$count.'" />
          </li>
          ';
          $count++;
        }
      }
    }
    $results .=
    '
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
        <span itemprop="name">
          '.get_the_archive_title().'
        </span>
        <meta itemprop="position" content="'.$count.'" />
    </li>
    ';
  }
  // 投稿の場合
  else if( is_single() ){
    $count = 2;
    if( get_post_type() != 'post' ){
      $posttype_obj = get_post_type_object( get_post_type() );
      $results .=
      '
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item">
        <a itemprop="item" href="'.get_post_type_archive_link( get_post_type() ).'">
          <span itemprop="name">
            '.$posttype_obj->label.'
          </span>
        </a>
        <meta itemprop="position" content="'.$count.'" />
      </li>
      ';
      $count++;
    }
    if( $terms ){
      $terms_ancestors = get_ancestors( $terms[0]->term_id, $terms[0]->taxonomy );
      if( $terms_ancestors ){
        $terms_ancestors = array_reverse( $terms_ancestors );
        foreach( $terms_ancestors as $ancestor ){
          $termobj = get_term( $ancestor, $terms[0]->taxonomy );
          $results .=
          '
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
            <a itemprop="item" href="'.get_term_link( $termobj->term_id ).'">
              <span itemprop="name">
                '.$termobj->name.'
              </span>
            </a>
            <meta itemprop="position" content="'.$count.'" />
          </li>
          ';
          $count++;
        }
      }
      $results .=
      '
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item">
        <a itemprop="item" href="'.get_term_link( $terms[0]->term_id ).'">
          <span itemprop="name">
            '.$terms[0]->name.'
          </span>
        </a>
        <meta itemprop="position" content="'.$count.'" />
      </li>
      ';
      $count++;
    }
    $results .=
    '
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
      <span itemprop="name">
        '.get_the_title( $post ).'
      </span>
      <meta itemprop="position" content="'.$count.'" />
    </li>
    ';
  }
  // ページの場合
  else if( is_page() ){
    // 親ページがある場合祖先から階層出力
    if( $post->post_parent != 0 ){
      $ancestors = array_reverse( $post->ancestors );
      $count     = 1;
      foreach( $ancestors as $ancestor ){
        $count++;
        $results .=
        '
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item">
          <a itemprop="item" href="'.get_permalink( $ancestor ).'">
            <span itemprop="name">
              '.get_the_title( $ancestor ).'
            </span>
          </a>
          <meta itemprop="position" content="'.$count.'" />
        </li>';
      }
      $count++;
    }
    $results .=
    '
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
      <span itemprop="name">
        '.get_the_title( $post ).'
      </span>
      <meta itemprop="position" content="'.$count.'" />
    </li>
    ';
  }
  // 404の場合
  else if( is_404() ){
    $results .=
    '
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
      <span itemprop="name">
        404 Not Found
      </span>
      <meta itemprop="position" content="2" />
    </li>
    ';
  }
  // 検索結果の場合
  else if( is_search() ){
    $results .=
    '
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="l-breadcrumbs-list__item l-breadcrumbs-list__item--current">
      <span itemprop="name">
        '.'"'.get_search_query().'"の検索結果
      </span>
      <meta itemprop="position" content="2" />
    </li>
    ';
  }
  $results .= '</ol>';
  // 出力
  echo $results;
}
/**
 * スラッグ指定でページ情報取得
 * @param string $slug    取得したいページのスラッグ
 * @param string $content オブジェクトから取得する情報を指定（省略時はリンク）
 */
function get_page_by_slug( $slug, $content = NULL ){
  // スラッグからオブジェクト取得
  $page = get_page_by_path( $slug );
  // 情報の指定を省略した場合
  if( empty( $content ) ){
    // ページヘのリンクを返す
    return get_permalink( $page->ID );
  }
  // 情報の指定がされた場合
  else{
    // 指定された情報を返す
    return $page->$content;
  }
}

/**
 * スラッグ指定でターム情報取得
 * @param string $slug    取得したいタームのスラッグ
 * @param string $tax     取得したいタクソノミーのスラッグ（デフォルト：category）
 * @param string $content オブジェクトから取得する情報を指定（省略時はリンク）
 */
function get_term_by_slug( $slug, $tax = 'category', $content = NULL ){
  // スラッグからオブジェクト取得
  $term = get_term_by( 'slug', $slug, $tax );
  if( $term ){
    // 情報の指定を省略した場合
    if( empty( $content ) ){
      // カテゴリーヘのリンクを返す
      return get_term_link( $term->term_id, $tax );
    }
    // 情報の指定がされた場合
    else{
      // 指定された情報を返す
      return $term->$content;
    }
  }
}

/**
 * pre_get_posts
 * メインのクエリーに取得条件を加えたい場合に使用
 * 使用時はadd_actionコメントアウトを解除
 * 例）カテゴリーアーカイブも表示件数を5件にしたい場合
 */
function chg_query_conditions( $query ){
  // 管理画面、メインクエリー以外の場合は適用させない
  if( is_admin() || !$query->is_main_query() ){
    return;
  }
  // moreパラメーターがtrueの場合
  if( $_GET['more'] ){
    $query->set( 'posts_per_page', -1 );
    return;
  }
  // コラムアーカイブの場合
  if( is_post_type_archive( 'column' ) || is_tax( 'column_cat' ) ){
    $query->set( 'posts_per_page', 12 );
    return;
  }
  // お客様の声アーカイブの場合
  if( is_post_type_archive( 'voice' ) ){
    $query->set( 'posts_per_page', -1 );
    return;
  }
}
add_action( 'pre_get_posts', 'chg_query_conditions' );

/**
 * 文字数切り取りドット付与
 * @param string $str    対象文字列
 * @param int $length 文字数
 */
function get_trim_str( $str, $length = 55 ){
  if( mb_strlen( $str ) > $length ){
    $dot = '…';
  }
  return mb_substr( $str, 0, $length ).$dot;
}

/**
 * 日付の差を計算し取得
 * @return int $results
 */
function get_date_diff(){
  $results  = NULL;
  $postdate = new DateTime( get_the_date( 'Y-m-d' ) );
  $nowdate  = new DateTime();
  $interval = $nowdate->diff( $postdate );
  $results  = $interval->format( '%a' );
  return $results;
}
?>