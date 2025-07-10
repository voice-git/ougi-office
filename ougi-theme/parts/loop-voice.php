                  <?php global $term; ?>
                  <li <?php post_class(); ?>>
                    <!--<a href="javascript:void(0);" class="c-voices__link js-voice-popup">-->
                    <a class="c-voices__link">
                      <div class="c-voices__thumb">
                        <?php the_post_thumbnail(); ?>
                        <div class="c-voices__stamp"><img src="<?php echo get_theme_file_uri( 'images/voice_stamp.png' ); ?>" alt=""></div>
                      </div>
                      <div class="ctg <?php echo $term[0]->slug; ?>"><?php echo $term[0]->name; ?></div>
                      <h3 class="c-voices__ttl"><?php echo get_trim_str( get_the_title(), 23 ); ?></h3>
                      <p class="c-voices__info"><?php echo get_post_meta( $post->ID, 'voice_customer', true ); ?></p>
                    </a>
                    <div class="p-voice-popup">
                      <div class="p-voice-popup__inner">
                        <div class="p-voice-popup__body">
                          <h3 class="p-voice-popup__ttl"><?php the_title(); ?></h3>
                          <p class="p-voice-popup__customer"><?php echo get_post_meta( $post->ID, 'voice_customer', true ); ?></p>
                          <div class="p-voice-popup__content"><?php the_content(); ?></div>
                        </div>
                        <a href="javascript:void(0);" class="c-btn-close js-voice-close"><span></span><span></span></a>
                      </div>
                    </div>
                  </li>
