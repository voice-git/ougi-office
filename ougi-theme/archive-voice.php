<?php get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-voice">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">人生ちゃんとした方たちの声</h2>
            <div class="p-section__content u-mt50">
              <div class="c-inner c-inner--type01">
                <ul class="c-voices">
                  <?php
                    if( have_posts() ) :
                      while( have_posts() ) : the_post();
                      $term = get_the_terms( $post, 'voice_cat' );
                        get_template_part( 'parts/loop', 'voice' );
                      endwhile;
                      wp_reset_postdata();
                    endif;
                  ?>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <?php get_template_part( 'parts/cta' ); ?>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
