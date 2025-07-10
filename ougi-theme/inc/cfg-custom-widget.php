<?php
add_action( 'widgets_init', function(){
  /* ===== テストウィジェット ===== */
  class Widget_Test extends WP_Widget {

    function __construct() {
      parent::__construct(
          'widget_test', // ウィジェットのベースID
          'テストウィジェット', // ウィジェットの名前
          array( 'description' => 'テストウィジェットです。' ) // ウィジェットの説明
        );
    }

    /**
     * ウィジェット コンテンツの出力
     * @param array $args     Display arguments including before_title, after_title, before_widget, and after_widget.
     * @param array $instance The settings for the particular instance of the widget.
     */
    function widget( $args, $instance ) {
      $title     = $instance['title'];
      $contents  = $instance['contents'];
      echo $args['before_widget'];

      // タイトルが入力されている場合のみ表示
      if ( !empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];
      // 出力するコンテンツの生成
      $content =
      '
      <p>'.$contents.'</p>
      ';
      echo $content;

      echo $args['after_widget'];
    }

    /**
     * ウィジェットの設定フォーム（管理画面）
     * @param array $instance Current settings.
     */
    function form( $instance ){
      $title = $contents = NULL;
      if( !empty( $instance['title'] ) ){
        $title = $instance['title'];
      }
      if( !empty( $instance['contents'] ) ){
        $contents = $instance['contents'];
      }
      ?>
      <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">タイトル:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('contents'); ?>">コンテンツ内容:</label>
        <input class="widefat" id="<?php echo $this->get_field_id('contents'); ?>" name="<?php echo $this->get_field_name('contents'); ?>" type="text" value="<?php echo esc_attr( $contents ); ?>">
      </p>
      <?php
    }

    /**
     * ウィジェットの設定保存（管理画面）
     * @param array $new_instance New settings for this instance as input by the user
     * @param array $old_instance Old settings for this instance.
     * @return array Settings to save or bool false to cancel saving.
     */
    function update( $new_instance, $old_instance ) {
      return $new_instance;
    }
  }

  // ウィジェットの登録
  register_widget( 'Widget_Test' );

} );
?>