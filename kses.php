<?php
  function kuntaAPICoreKSESWhitelist() {
    global $allowedposttags, $allowedtags;

    $allowed = [
      'article' => ['data-type', 'data-component', 'data-service-id', 'data-service-channel-id']
    ];
    
    foreach ($allowed as $tag => $attrs) {
      foreach ($attrs as $attr) {
        $allowedposttags[$tag][$attr] = true;
        $allowedtags[$tag][$attr] = true;
      }
    }
  }
  add_action( 'init', 'kuntaAPICoreKSESWhitelist' );
?>