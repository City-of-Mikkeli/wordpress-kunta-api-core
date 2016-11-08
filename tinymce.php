
<?php
  defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
  
  if (is_admin()) {
  	add_action('init', function(){
      
      add_filter('mce_external_plugins', function($plugins){
        $plugins['noneditable'] = '//cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.10/plugins/noneditable/plugin.min.js';
  	    return $plugins;
      });
      
      add_editor_style(plugin_dir_url( __FILE__ ) . 'tinymce-styles.css');
    });
  }
?>