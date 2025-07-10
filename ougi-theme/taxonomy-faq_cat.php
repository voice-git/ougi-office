<?php get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-faq">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">よくあるご質問</h2>
            <div class="p-section__content u-mt50">
              <ul class="c-tabmenu c-tabmenu--col">
                <?php
                  $terms = get_terms( 'faq_cat' );
                  foreach( $terms as $term ) :
                    $current_class = NULL;
                    if( is_tax( 'faq_cat', $term->slug ) ){
                      $current_class = ' is-current';
                    }
                ?>
                  <li><a href="<?php echo get_term_link( $term, 'faq_cat' ); ?>" class="c-tabmenu__link<?php echo $current_class; ?>"><div class="c-tabmenu__inner"><?php echo $term->name; ?></div></a></li>
                <?php endforeach; ?>
              </ul>
              <div class="c-inner c-inner--type01">
                <dl class="c-faq">
                  <?php
                    if( have_posts() ) :
                      while( have_posts() ) : the_post();
                        get_template_part( 'parts/loop', 'faq' );
                      endwhile;
                      wp_reset_postdata();
                    endif;
                  ?>
                </dl>
              </div>
              <ul class="c-tabmenu c-tabmenu--col">
                <?php
                  $terms = get_terms( 'faq_cat' );
                  foreach( $terms as $term ) :
                    $current_class = NULL;
                    if( is_tax( 'faq_cat', $term->slug ) ){
                      $current_class = ' is-current';
                    }
                ?>
                  <li><a href="<?php echo get_term_link( $term, 'faq_cat' ); ?>" class="c-tabmenu__link<?php echo $current_class; ?>"><div class="c-tabmenu__inner"><?php echo $term->name; ?></div></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </section>
        </div>
        <?php get_template_part( 'parts/cta' ); ?>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
