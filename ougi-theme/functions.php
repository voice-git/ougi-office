<?php
/**
 * 各ファイルを読み込む
 */
require_once( 'inc/cfg-define.php' );
require_once( 'inc/cfg-base.php' );
require_once( 'inc/cfg-custom-fields.php' );
require_once( 'inc/cfg-custom-metatag.php' );
require_once( 'inc/cfg-custom-post.php' );
// require_once( 'inc/cfg-admin-menu.php' );
// require_once( 'inc/cfg-custom-widget.php' );
require_once( 'inc/shortcodes.php' );
require_once( 'inc/main.php' );


function add_yubinbango_class(){
    echo <<<EOC
    <script>
        jQuery('.mw_wp_form form').addClass('h-adr');
    </script>
    EOC;
}
add_action( 'wp_print_footer_scripts', 'add_yubinbango_class' );

wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );
?>