<?php
/**
 * Template Name: 相続不動産サポート支援
 */
get_header(); ?>
  <?php get_sidebar(); ?>
  <div class="l-contents">
    <div class="p-page-support">
      <div class="l-container">
        <div class="p-sections">
          <section id="section01" class="p-section">
            <h2 class="c-heading">相続不動産サポート支援</h2>
            <div class="p-section__content u-mt90">
              <p class="p-page-support__lead01">相続不動産に関する<br class="u-sp-show">こんなお悩みありませんか？</p>
              <div class="p-page-support__main"><img src="<?php echo get_theme_file_uri( 'images/support_main.png' ); ?>" alt=""></div>
              <p class="p-page-support__lead02">
                法務と不動産の<br class="u-sp-show">Wライセンスにより<br>
                どんなお困りごと・お悩みも<br>
                ひとつの窓口で解決。
              </p>
              <p class="p-page-support__txt">
                生活相談を行政書士にお願いしたけど、<br>
                「不動産が絡んだ問題は他の会社へ行ってください」<br>
                なんて言われることはよくある話です。<br>
                おうぎ行政書士は、不動産取引の<br class="u-sp-show">専門家（宅地建物取引士）と<br>
                街の身近な法律家（行政書士）のＷライセンス。<br>
                両方の視点で多角的・複合的なアプローチで<br>
                ワンストップで最適なソリューションを<br class="u-sp-show">お届けします。
              </p>
              <div class="p-page-support-contents">
                <ul class="p-page-support-contents-license">
                  <li>行政書士資格</li>
                  <li class="p-page-support-contents-license__panda"><img src="<?php echo get_theme_file_uri( 'images/support_panda.png' ); ?>" alt=""></li>
                  <li>宅建資格</li>
                </ul>
                <div class="p-page-support-contents__txtboxs">
                  <div class="p-page-support-contents__txtbox">
                    <p>
                      遺言・相続・その他お困りごと<br>
                      なんでもご相談ください！
                    </p>
                  </div>
                  <div class="p-page-support-contents__txtbox">
                    <p>
                      不動産が絡んだ問題も<br>
                      私にお任せください！
                    </p>
                  </div>
                </div>
              </div>
              <p class="p-page-support__lead03">まずは、お気軽に<br class="u-sp-show">お問い合わせください！</p>
            </div>
          </section>
        </div>
        <?php get_template_part( 'parts/cta' ); ?>
      </div>
    </div>
  </div>
  <!-- /.l-contents -->
<?php get_footer(); ?>
