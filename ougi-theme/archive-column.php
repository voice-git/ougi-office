<?php get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-column">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">人生ちゃんとするコラム</h2>
            <div class="p-section__content u-mt50">
              <ul class="c-tabmenu">
                <li><a href="<?php echo get_post_type_archive_link( 'column' ); ?>" class="c-tabmenu__link is-current"><div class="c-tabmenu__inner">ALL</div></a></li>
                <li><a href="<?php echo get_term_by_slug( 'inheritance', 'column_cat' ); ?>" class="c-tabmenu__link is-primary"><div class="c-tabmenu__inner">相続</div></a></li>
                <li><a href="<?php echo get_term_by_slug( 'will', 'column_cat' ); ?>" class="c-tabmenu__link is-orange"><div class="c-tabmenu__inner">遺言</div></a></li>
              </ul>
              <div class="c-inner">
                <ul class="c-columns">
                  <?php
                    if( have_posts() ) :
                      while( have_posts() ) : the_post();
                      $term = get_the_terms( $post, 'column_cat' );
                        get_template_part( 'parts/loop', 'column' );
                      endwhile;
                      wp_reset_postdata();
                    endif;
                  ?>
                </ul>
              </div>
              <?php if( !$_GET['more'] ) : ?>
                <?php $moreurl = '?more=1'; ?>
                <a href="<?php echo $moreurl; ?>" class="c-btn c-btnsize-01 u-mrla u-mt90 u-font-en u-fz22">More</a>
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
