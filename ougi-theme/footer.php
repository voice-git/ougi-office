    <div class="fixed u-sp-hide">
      <a class="fixed_tel" href="tel:076-256-3844">
        <img src="<?php echo get_theme_file_uri( 'images/tel.svg' ); ?>" alt="電話">
      </a>
      <a class="fixed_contact" href="<?php echo get_page_by_slug( 'contact' ); ?>">
        <img src="<?php echo get_theme_file_uri( 'images/contact.svg' ); ?>" alt="お問い合わせ">
      </a>
    </div>

    <div class="fixed_sp u-sp-show">
      <div class="flex">
        <a class="fixed_tel" href="tel:076-256-3844">
          <img src="<?php echo get_theme_file_uri( 'images/tel_ico.svg' ); ?>" alt="">
          <p>お電話でのお問い合わせ</p>
        </a>
        <a class="fixed_contact" href="<?php echo get_page_by_slug( 'contact' ); ?>">
          <img src="<?php echo get_theme_file_uri( 'images/mail_ico.svg' ); ?>" alt="">
          <p>メールでのお問い合わせ</p>
        </a>
      </div>
    </div>

    <footer class="l-footer">
      <div class="p-cta">
        <div class="c-inner c-inner--type04">
          <div class="estate">
            <a href="https://ougi-re.jp/" trget="_blank" rel=”noopener”>
              <div class="u-sp-hide">
                <img src="<?php echo get_theme_file_uri( 'images/estate.png' ); ?>" alt="おうぎ不動産">
              </div>
              <div class="u-sp-show">
                <img src="<?php echo get_theme_file_uri( 'images/estate_sp.png' ); ?>" alt="おうぎ不動産">
              </div>
            </a>
          </div>
          <div class="p-cta-contact">
            <div class="p-cta-contact-box">
              <div class="p-cta-contact-box__inner">
                <p class="p-cta-contact__heading">
                  <img class="contact_img" src="<?php echo get_theme_file_uri( 'images/mail_ico.svg' ); ?>" alt="">
                  メールでのお問い合わせ
                </p>
                <a href="<?php echo get_page_by_slug( 'contact' ); ?>" class="p-cta-contact__btn">ご相談窓口</a>
              </div>
              <div class="p-cta__panda u-sp-show"><img src="<?php echo get_theme_file_uri( 'images/panda01.png' ); ?>" alt=""></div>
            </div>
            <div class="p-cta-contact-box">
              <div class="p-cta-contact-box__inner">
                <p class="p-cta-contact__heading">
                  <img src="<?php echo get_theme_file_uri( 'images/tel_ico.svg' ); ?>" alt="">
                  お電話でのお問い合わせ
                </p>
                <a href="tel:076-256-3844" class="p-cta-contact__tel"><img src="<?php echo get_theme_file_uri( 'images/telnum_white.png' ); ?>" alt="076-256-3844"></a>
                <p class="p-cta-contact__subtxt">まずはお気軽にお問い合わせください。</p>
              </div>
              <div class="p-cta__panda u-sp-hide"><img src="<?php echo get_theme_file_uri( 'images/panda01.png' ); ?>" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-conainer">
        <p class="l-footer__copyright">
          <img src="<?php echo get_theme_file_uri( 'images/icon_copyright.png' ); ?>" alt="&copy;">
          OUGI NOTARY PUBLIC / ALL RIGHTS RESERVED.
        </p>
      </div>
    </footer>
  </div>
  <!-- /.wrap -->
<?php wp_footer(); ?>
</body>
</html>