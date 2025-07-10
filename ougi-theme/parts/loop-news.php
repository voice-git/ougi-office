                  <?php global $cat; ?>
                  <li <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" class="c-newslist__link">
                      <div class="c-newslist__meta">
                        <span class="c-newslist__cat c-cat-icon c-cat-icon--<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></span>
                        <?php if( get_date_diff() < 5 ) : ?>
                          <div class="c-newslist__new">
                            <img src="<?php echo get_theme_file_uri( 'images/icon_new_bg_green.png' ); ?>" alt="NEW">
                          </div>
                        <?php endif; ?>
                        <time class="c-newslist__date"><?php echo get_the_date(); ?></time>
                      </div>
                      <span class="c-newslist__ttl"><?php the_title(); ?></span>
                    </a>
                  </li>
