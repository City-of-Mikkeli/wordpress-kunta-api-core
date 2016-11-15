<?php
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  function kuntaApiCoreActivate($file) {
    if(!file_exists("$file/vendor/autoload.php")) {
      exec("COMPOSER_HOME=/tmp/composer composer install -d $file");
    }
  }

  kuntaApiCoreActivate(__DIR__);
  
?>
