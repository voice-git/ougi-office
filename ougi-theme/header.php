<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php if (is_front_page()) : ?>

  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <?php else : ?>

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <?php endif; ?>
    <?php if (is_front_page() || is_page(array('contact', 'confirm', 'thanks'))) : ?>

    <?php else : ?>
      <meta name=”robots” content=”noindex,nofollow”>
      <style>
        * {
          display: none;
        }
      </style>
      <meta http-equiv="refresh" content="0;URL=https://ougi-office.jp">
    <?php endif; ?>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo get_custom_metatag('description'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9P7PZJJW2H"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-9P7PZJJW2H');
    </script>

    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>">
    <?php if (is_front_page()) : ?>
      <meta property="og:type" content="website">
    <?php else : ?>
      <meta property="og:type" content="article">
    <?php endif; ?>
    <meta property="og:url" content="<?php echo get_custom_metatag('url'); ?>">
    <meta property="og:image" content="<?php echo get_custom_metatag('image'); ?>">
    <meta property="og:description" content="<?php echo get_custom_metatag('description'); ?>">
    <meta property="og:locale" content="ja_JP">

    <!--フォント-->
    <script>
      (function(d) {
        var config = {
            kitId: 'gru0rhx',
            scriptTimeout: 3000,
            async: true
          },
          h = d.documentElement,
          t = setTimeout(function() {
            h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
          }, config.scriptTimeout),
          tk = d.createElement("script"),
          f = false,
          s = d.getElementsByTagName("script")[0],
          a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
          a = this.readyState;
          if (f || a && a != "complete" && a != "loaded") return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config)
          } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
      })(document);
    </script>

    <link rel="stylesheet" href="https://use.typekit.net/czz1dvw.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    </head>

  <body <?php body_class(); ?>>
    <div class="wrap">
      <header class="l-header">
        <?php original_the_custom_logo('sp'); ?>
        <!--<ul>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>">わたしたちについて</a>
        </li>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>#section02">代表プロフィール</a>
        </li>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>">当事務所5つの特徴</a>
        </li>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>">サービス内容</a>
        </li>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>">相続不動産売却サポート</a>
        </li>
        <li>
          <a href="<?php echo get_term_by_slug('aboutus'); ?>">お客さまの声</a>
        </li>
      </ul>
      <a href="javascript:void(0);" id="js-hamburger" class="c-hamburger">
        <div class="c-hamburger__lines">
          <span></span>
          <span></span>
        </div>
      </a>-->
        <div class="header_right">
          <a class="header_right_tel" href="tel:076-256-3844">
            <img src="<?php echo get_theme_file_uri('images/header_tel.svg'); ?>" alt="">
          </a>
          <a href="<?php echo get_page_by_slug('contact'); ?>">
            <img src="<?php echo get_theme_file_uri('images/header_mail.svg'); ?>" alt="">
          </a>
        </div>
      </header>
      <!-- /.l-header -->
      <?php get_template_part('parts/spmenu'); ?>