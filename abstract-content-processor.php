<?php
  namespace KuntaAPI\Core;
  
  require_once( __DIR__ . '/vendor/autoload.php');
  require_once( __DIR__ . '/page-processor.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  if (!class_exists( 'KuntaAPI\Core\AbstractContentProcessor' ) ) {
    
    abstract class AbstractContentProcessor {
      abstract public function process($lang, $dom, $mode);
    }
  }
  
?>
