<?php get_header(); ?>
    <?php get_template_part( 'parts/breadcrumbs' ); ?>
    <div class="l-contents">
      <div class="l-container">
        <div class="c-row--pc-only">
          <main class="l-main">
            <?php
            if( have_posts() ) :
              while( have_posts() ) : the_post();
                get_template_part( 'parts/content' );
              endwhile;
              $args_pagi = array(
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
                'type' => 'list',
                'screen_reader_text' => 'A'
              );
              $pagination = get_the_posts_pagination( $args_pagi );
              $pagination = str_replace( '<h2 class="screen-reader-text">A</h2>', '', $pagination );
            ?>
            <div class="p-navigation">
              <?php echo $pagination; ?>
            </div>
            <?php endif; ?>
          </main>
          <!-- /.main -->
          <div class="l-side">
            <?php dynamic_sidebar( 'sidebar' ); ?>
          </div>
          <!-- /.l-side -->
        </div>
      </div>
    </div>
    <!-- /.l-contents -->
<?php get_footer(); ?>
