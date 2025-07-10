                  <div class="c-faq__block">
                    <dt class="c-faq__q ac_btn close">
                      <span class="c-faq__icon c-faq__icon--q">Q</span>
                      <span class="c-faq__textq"><?php the_title(); ?></span>
                      <div class="icon-wrap"><span class="icon"></span></div>
                    </dt>
                    <dd class="c-faq__a a_box">
                      <span class="c-faq__icon c-faq__icon--a">A</span>
                      <span class="c-faq__texta"><?php echo get_post_meta( $post->ID, 'faq_a', true ); ?></span>
                    </dd>
                  </div>
