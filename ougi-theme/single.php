<?php get_header(); ?>
  <div class="l-contents">
    <div class="p-page-news">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">NEWS</h2>
            <div class="p-section__content u-mt90">
              <div class="p-page-news__inner">
                <?php
                  if( have_posts() ) :
                    while( have_posts() ) : the_post();
                    if( is_singular( 'post' ) ){
                      $cat = get_the_category( $post );
                    }
                    else{
                      $cat = get_the_terms( $post, 'column_cat' );
                    }
                ?>
                  <article <?php post_class( 'p-entry' ); ?>>
                    <div class="p-entry__meta">
                      <span class="c-cat-icon c-cat-icon--<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></span>
                      <time class="p-entry__date u-font-en"><?php echo get_the_date(); ?></time>
                    </div>
                    <h1 class="p-entry__ttl"><?php the_title(); ?></h1>
                    <div class="p-entry__content">
                      <?php the_content(); ?>
                    </div>
                  </article>
                <?php
                    endwhile;
                  endif;
                ?>
                <div class="p-entry-nav">
                  <?php
                    $listurl = get_page_by_slug( 'newsall' );
                    if( is_singular( 'column' ) ){
                      $listurl = get_post_type_archive_link( 'column' );
                    }
                  ?>
                  <a href="<?php echo $listurl; ?>" class="c-btn u-fz22">一覧へ戻る</a>
                  <ul class="p-entry-nav__adjacent">
                    <?php
                      $next_post = get_next_post();
                      if( $next_post ) :
                    ?>
                      <li><a href="<?php echo get_permalink( $next_post ); ?>">←前のお知らせ</a></li>
                    <?php endif; ?>
                    <?php
                      $prev_post = get_previous_post();
                      if( $prev_post ) :
                    ?>
                      <li><a href="<?php echo get_permalink( $prev_post ); ?>">次のお知らせ→</a></li>
                    <?php endif; ?>
                  </ul>
                </div>
                <div class="p-entry-archive">
                  <p class="p-entry-archive__heading"><span>Archive</span></p>
                  <?php
                    $archives = wp_get_archives( 'type=monthly&show_post_count=1&echo=0&post_type='.get_post_type() );
                    $archives = str_replace( '年', '.', $archives );
                    $archives = str_replace( '月', '', $archives );
                    $archives = str_replace( '</a>&nbsp;(', '（', $archives );
                    $archives = str_replace( ')', '）</a>', $archives );
                    if( is_singular( 'column' ) ){
                      $archives = str_replace( 'column', 'date', $archives );
                      $archives = str_replace( "'>", "?post_type=column'>", $archives );
                    }
                  ?>
                  <ul class="p-entry-archive__list"><?php echo $archives; ?></ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
