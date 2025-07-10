<article <?php post_class( 'p-entry' ); ?>>
  <h2 class="c-heading u-mbm">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="p-entry__content">
    <?php the_content(); ?>
  </div>
</article>
