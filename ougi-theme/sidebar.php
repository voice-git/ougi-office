    <div class="u-sp-hide">
      <div class="l-side">
        <div class="l-side__inner">
          <?php original_the_custom_logo( 'pc' ); ?>
          <ul class="l-side-mainmenu">
            <?php
              $current_class = NULL;
              if( is_front_page() ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_site_url(); ?>">トップ</a></li>
            <?php
              $current_class = NULL;
              if( is_page( 'aboutus' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="is-has-child <?php echo $current_class; ?>">
              <a href="<?php echo get_page_by_slug( 'aboutus' ); ?>">わたしたちについて</a>
              <div class="l-side-lower">
                <ul class="l-side-lower__list">
                  <li><a href="<?php echo get_page_by_slug( 'aboutus' ); ?>#section01">おうぎ行政書士の宣誓</a></li>
                  <li><a href="<?php echo get_page_by_slug( 'aboutus' ); ?>#section02">代表者紹介</a></li>
                  <li><a href="<?php echo get_page_by_slug( 'aboutus' ); ?>#section03">会社概要</a></li>
                </ul>
              </div>
            </li>
            <?php
              $current_class = NULL;
              if( is_page( 'reason' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'reason' ); ?>">選ばれる理由</a></li>
            <?php
              $current_class = NULL;
              if( is_page( 'service' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'service' ); ?>">サービスについて</a></li>
            <?php
              $current_class = NULL;
              if( is_page( 'flow' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'flow' ); ?>">ご相談の流れ</a></li>
            <?php
              $current_class = NULL;
              if( is_home() || is_category() || is_singular( 'post' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'newsall' ); ?>">NEWS<span class="c-icon-new"><img src="<?php echo get_theme_file_uri( 'images/icon_new.png' ); ?>" alt="NEW"></span></a></li>
            <?php
              $current_class = NULL;
              if( is_post_type_archive( 'column' ) || is_tax( 'column_cat' ) || is_singular( 'column' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_post_type_archive_link( 'column' ); ?>">人生ちゃんとするコラム<span class="c-icon-new"><img src="<?php echo get_theme_file_uri( 'images/icon_new.png' ); ?>" alt="NEW"></span></a></li>
            <?php
              $current_class = NULL;
              if( is_post_type_archive( 'faq' ) || is_tax( 'faq_cat' ) || is_singular( 'faq' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_post_type_archive_link( 'faq' ); ?>">よくあるご質問</a></li>
          </ul>
          <ul class="l-side-submenu">
            <?php
              $current_class = NULL;
              if( is_page( 'contact' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'contact' ); ?>">お問い合わせ</a></li>
            <?php
              $current_class = NULL;
              if( is_page( 'support' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'support' ); ?>">相続不動産サポート支援</a></li>
            <?php
              $current_class = NULL;
              if( is_page( 'sitepolicy' ) ){
                $current_class = 'is-current';
              }
            ?>
            <li class="<?php echo $current_class; ?>"><a href="<?php echo get_page_by_slug( 'sitepolicy' ); ?>">当サイトについて</a></li>
          </ul>
          <div class="l-side-consul">
            <div class="l-side-consul-tel">
              <p class="l-side-consul-tel__num"><img src="<?php echo get_theme_file_uri( 'images/telnum.png' ); ?>" alt="076-223-2229"></p>
              <p class="l-side-consul-tel__txt">ご相談だけでも、気軽にお電話ください！</p>
            </div>
            <a href="<?php echo get_page_by_slug( 'contact' ); ?>" class="c-btn">無料相談</a>
          </div>
        </div>
      </div>
    </div>