<?php
/**
 * Template Name: お問い合わせ
 */
get_header(); ?>
  <div class="l-contents">
    <div class="p-page-contact">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">お問い合わせ</h2>
            <div class="p-section__content u-mt50">
              <?php
                $url = $_SERVER['REQUEST_URI'];

                if(strstr($url,'confirm')):
              ?>
              <?php elseif(strstr($url,'thanks')): ?>

              <?php else: ?>
              <div class="c-inner">
                <p class="contact_text">お問い合わせは、お電話または<br class="u-sp-show">下記お問い合わせフォームより承っております。<br>
                  迅速な対応を心がけておりますが、<br class="u-sp-show">営業時間外のお問い合わせにつきましては、<br>
                  ご返信が深夜・早朝または翌営業日・<br class="u-sp-show">営業時間以降の対応となることが御座いますので<br class="u-sp-show">ご了承下さい。
                </p>
                <div class="p-page-contact-cta u-sp-hide">
                  <div class="p-page-contact-cta__inner">
                    <a href="tel:076-256-3844" class="p-page-contact-tel"><img src="<?php echo get_theme_file_uri( 'images/contact_tel_g.svg' ); ?>" alt="076-256-3844"></a>
                    <a href="#form" class="p-page-contact-mail"><img src="<?php echo get_theme_file_uri( 'images/mail.svg' ); ?>" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="contact_flow">
                <p class="contact_flow_title">ご相談・ご依頼の流れ</p>
                <ul class="c-top-flow">
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step01.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ1</span>お問い合わせ・ご予約</p>
                    </div>
                  </li>
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step02.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ2</span>初回相談（無料）</p>
                    </div>
                  </li>
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step03.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ3</span>お見積り</p>
                    </div>
                  </li>
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step04.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ4</span>正式受任・業務着手</p>
                    </div>
                  </li>
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step05.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ5</span>進捗状況のご連絡</p>
                    </div>
                  </li>
                  <li>
                    <div class="c-top-flow__inner">
                      <div class="c-top-flow__head">
                        <div class="c-top-flow__img"><img src="<?php echo get_theme_file_uri( 'images/top_flow_step06.png' ); ?>" alt=""></div>
                      </div>
                      <p class="c-top-flow__txt"><span>ステップ6</span>解決・完了</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="online">
                <div class="c-inner">
                  <p class="online_title">オンライン相談ご予約受付中</p>
                  <img src="<?php echo get_theme_file_uri( 'images/online_img.png' ); ?>">
                  <p class="online_text">ビデオ会議ツール「ZOOM（ズーム）」を<br class="u-sp-show">利用したオンライン無料相談をはじめました！<br>ご自宅にいながらお気軽に安心して<br class="u-sp-show">ご相談いただけます。ぜひご活用ください。</p>
                </div>
              </div>

              <?php endif; ?>
              
              <div id="form" class="c-inner">
                <?php
                  if( have_posts() ) :
                    while( have_posts() ) : the_post();
                ?>
                  <?php
                    remove_filter( 'the_content', 'wpautop' );
                    the_content();
                  ?>
                <?php
                    endwhile;
                  endif;
                ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
