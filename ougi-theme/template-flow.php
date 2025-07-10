<?php
/**
 * Template Name: ご相談の流れ
 */
get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-flow">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">ご相談・ご依頼の流れ</h2>
            <div class="p-section__content u-mt50">
              <p class="p-page-flow__lead">
                相続手続きや遺言書作成、<br class="u-sp-show">民事信託（家族信託）や成年後見など相続対策、<br>
                認知症対策に関するご相談は<br class="u-sp-show">当事務所にお任せ下さい。<br>
                ご相談の内容によっては、相談のみで<br class="u-sp-show">解決する場合もございます。
              </p>
              <ul class="p-page-flow-list">
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust01.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">1. お問合せ・ご予約</p>
                      <p class="p-page-flow-list__txt">
                        まずは、お問い合わせください。<br>
                        下記お問い合わせメールフォームまたはお電話でも承っております。
                      </p>
                      <a href="<?php echo get_page_by_slug( 'contact' ); ?>" class="c-btn u-fz22">お問い合わせメールフォームへ</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust02.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">2. ご来所・出張相談</p>
                      <p class="p-page-flow-list__txt">
                        ご来所いただくほか出張相談も承っておりますのでお気軽にご相談ください。お車でお越しの方は、当事務所敷地内に駐車場がございます。
                      </p>
                      <div class="p-page-flow-list__notice">
                        <p>【初回相談日にご準備いただくもの】</p>
                        <p>
                          ご本人様確認のための身分証明書（運転免許証など）をお持ちください。<br>
                          お手続き上必要になりそうな書類をお持ちいただくとご相談がスムーズに進みます。
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust03.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">3. 解決方法のご提案・ご提示</p>
                      <p class="p-page-flow-list__txt">
                        初回のご相談は、時間60分、費用も一切かかりません。<br>
                        お客様の現状やお困り事をヒアリングさせていただき、お客様に最適な解決方法をご提案させていただきます。
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust04.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">4. ご依頼</p>
                      <p class="p-page-flow-list__txt">
                        ご提案、ご説明した内容にご納得いただけましたら正式にご依頼となります。<br>
                        今後の流れや適切な対処方法を明確にし、解決に向け全力でサポートさせていただきます。
                      </p>
                      <ul class="p-page-flow-list__caution">
                        <li>※ご依頼を強制することはございません。</li>
                        <li>※数日間保留とし、後日ご返事いただいても構いません。</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust05.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">5. 業務着手</p>
                      <p class="p-page-flow-list__txt">
                        ご依頼の内容に基づき、業務に着手します。<br>
                        当事務所を窓口として、必要に応じて各専門家と連携しながら進めていきます。進捗状況について、定期的にご報告をしながら進めていきますのでご安心ください。
                      </p>
                      <ul class="p-page-flow-list__caution">
                        <li>※ご依頼の内容により、手続き完了までにかかる時間が異なりますので、予めご了承ください。</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="p-page-flow-list__body">
                    <div class="p-page-flow-list__illust"><img src="<?php echo get_theme_file_uri( 'images/flow_illust06.png' ); ?>" alt=""></div>
                    <div class="p-page-flow-list__content">
                      <p class="p-page-flow-list__heading">6. 手続き完了・アフターフォロー</p>
                      <p class="p-page-flow-list__txt">
                        すべての手続きが完了しましたら、作成した書類等一式を納品させていただき、手続き完了となります。手続き完了後もご不明な点がございましたら、遠慮なくお問い合わせ下さい。「何から始めていいかわからない」「何を聞けばいいのかわからない」一人で抱え込まず、まずはお気軽にお問い合わせ下さい。
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section id="section02" class="p-section u-mb125">
            <h2 class="c-heading">人生ちゃんとした方たちの声</h2>
            <div class="p-section__content u-mt50">
              <div class="c-inner c-inner--type01">
                <ul class="c-voices">
                  <?php
                    $args = array(
                      'post_type' => 'voice',
                      'posts_per_page' => -1
                    );
                    $my_query = new WP_Query( $args );
                    if( $my_query->have_posts() ) :
                      while( $my_query->have_posts() ) : $my_query->the_post();
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
          <section id="section03" class="p-section">
            <h2 class="c-heading">ご相談・解決事例</h2>
            <div class="p-section__content u-mt50">
              <div class="u-center">
                <img src="<?php echo get_theme_file_uri( 'images/top_case_cs.png' ); ?>" alt="">
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
