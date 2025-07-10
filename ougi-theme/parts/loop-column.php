                  <?php global $term; ?>
                  <li <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" class="c-columns__link">
                      <div class="c-columns__thumb">
                        <?php the_post_thumbnail(); ?>
                        <?php if( get_date_diff() < 5 ) : ?>
                          <div class="c-columns__new">
                            <img src="<?php echo get_theme_file_uri( 'images/icon_new_'.$term[0]->slug.'.png' ); ?>" alt="New!">
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="c-columns__meta">
                        <span class="c-columns__cat"><?php echo $term[0]->name; ?></span>
                        <time class="c-columns__date u-font-en"><?php echo get_the_date(); ?></time>
                      </div>
                      <h3 class="c-columns__ttl"><?php echo get_trim_str( get_the_title(), 18 ); ?></h3>
                    </a>
                  </li>
