<?php get_header(); ?>
  <div class="l-contents">
    <div class="p-page-news">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">ニュース</h2>
            <div class="p-section__content u-mt50">
              <div class="news-tab">
                <ul class="c-tabmenu">
                  <?php
                    $current_class = NULL;
                    if( !$_GET['new'] ){
                      $current_class = ' is-current';
                    }
                  ?>
                  <li><a href="<?php echo get_page_by_slug( 'newsall' ); ?>" class="c-tabmenu__link<?php echo $current_class; ?>"><div class="c-tabmenu__inner">ALL</div></a></li>
                  <?php
                    $current_class = NULL;
                    if( $_GET['new'] ){
                      $current_class = ' is-current';
                    }
                  ?>
                  <li><a href="<?php echo get_page_by_slug( 'newsall' ); ?>?new=1" class="c-tabmenu__link<?php echo $current_class; ?>"><div class="c-tabmenu__inner"><img src="<?php echo get_theme_file_uri( 'images/icon_new_bg_green.png' ); ?>" alt="NEW">新着情報</div></a></li>
                  <li><a href="<?php echo get_term_by_slug( 'news' ); ?>" class="c-tabmenu__link is-green3"><div class="c-tabmenu__inner">お知らせ</div></a></li>
                  <li><a href="javascript:void(0);" class="c-tabmenu__link is-disabled"><div class="c-tabmenu__inner c-tabmenu__inner--col">セミナー情報<span>現在該当するセミナーはございません</span></div></a></li>
                </ul>
                <div class="select">
                  <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                    <?php wp_get_archives (array(
                            'type' => 'yearly',
                            'format' => 'option',
                            'show_post_count' => '0'
                            ));
                    ?>
                  </select>
                </div>
              </div>

              <ul class="c-newslist">
                <?php
                  $posts_per_page = 10;
                  if( $_GET['new'] ){
                    $date_query = array(
                      'after' => '-5 day',
                      'before' => array(
                        'year' => date( 'Y' ),
                        'month' => date( 'm' ),
                        'day' => date( 'd' )
                      ),
                      'inclusive' => true
                    );
                  }
                  $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $posts_per_page,
                    'date_query' => $date_query
                  );
                  $my_query = new WP_Query( $args );
                  if( $my_query->have_posts() ) :
                    while( $my_query->have_posts() ) : $my_query->the_post();
                    $cat = get_the_category( $post );
                      get_template_part( 'parts/loop', 'news' );
                    endwhile;
                    wp_reset_postdata();
                  endif;
                ?>
              </ul>

              <?php
                $args = array(
                    'mid_size' => 1,
                    'prev_text' => '<img src="'. get_template_directory_uri().'/images/prev.svg" width="16"/>前へ',
                    'next_text' => '次へ<img src="'. get_template_directory_uri().'/images/next.svg" width="16"/>',
                    'screen_reader_text' => ' ',
                );
                the_posts_pagination($args);
              ?>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
