
<?php
  defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
  
  if (is_admin()) {
  	add_action('init', function(){
      
      add_filter('mce_external_plugins', function($plugins){
        $plugins['noneditable'] = '//cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.10/plugins/noneditable/plugin.min.js';
  	    return $plugins;
      });
      
      wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
      add_editor_style(plugin_dir_url( __FILE__ ) . 'tinymce-styles.css');
    });
  }
?>