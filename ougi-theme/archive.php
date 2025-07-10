<?php get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-news">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">NEWS</h2>
            <div class="p-section__content u-mt50">
              <ul class="c-tabmenu">
                <li><a href="<?php echo get_page_by_slug( 'newsall' ); ?>" class="c-tabmenu__link"><div class="c-tabmenu__inner">ALL</div></a></li>
                <li><a href="<?php echo get_page_by_slug( 'newsall' ); ?>?new=1" class="c-tabmenu__link"><div class="c-tabmenu__inner"><img src="<?php echo get_theme_file_uri( 'images/icon_new_bg_green.png' ); ?>" alt="NEW">新着情報</div></a></li>
                <?php
                  $current_class = NULL;
                  if( is_category( 'news' ) ){
                    $current_class = ' is-current';
                  }
                ?>
                <li><a href="<?php echo get_term_by_slug( 'news' ); ?>" class="c-tabmenu__link is-green3<?php echo $current_class; ?>"><div class="c-tabmenu__inner">お知らせ</div></a></li>
                <?php
                  $current_class = NULL;
                  if( is_category( 'seminar' ) ){
                    $current_class = ' is-current';
                  }
                ?>
                <li><a href="javascript:void(0);" class="c-tabmenu__link is-disabled<?php echo $current_class; ?>"><div class="c-tabmenu__inner c-tabmenu__inner--col">セミナー情報<span>現在該当するセミナーはございません</span></div></a></li>
              </ul>
              <ul class="c-newslist">
                <?php
                  if( have_posts() ) :
                    while( have_posts() ) : the_post();
                    $cat = get_the_category( $post );
                      get_template_part( 'parts/loop', 'news' );
                    endwhile;
                    wp_reset_postdata();
                  endif;
                ?>
              </ul>
              <?php if( !$_GET['more'] ) : ?>
                <?php $moreurl = '?more=1'; ?>
                <a href="<?php echo $moreurl; ?>" class="c-btn c-btnsize-01 u-mrla u-mt74 u-font-en u-fz22">More</a>
              <?php endif; ?>
            </div>
          </section>
        </div>
        <?php get_template_part( 'parts/cta' ); ?>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
