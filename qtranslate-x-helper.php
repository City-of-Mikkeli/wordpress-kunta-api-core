<?php

  namespace KuntaAPI\Core;
  require_once( __DIR__ . '/vendor/autoload.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  class QTranslateHelper {
  	
  	public function __construct() {
  	}
  	
    public static function translateLocalizedValues($localizedValues) {
      $result = '';
    	
      foreach ($localizedValues as $localizedValue) {
    	$language = $localizedValue->getLanguage();
    	$value = $localizedValue->getValue();
    	$result = $result . '[:' . $language . ']' . $value;
      }
    
      return $result . '[:]';
    }
  	
  }
  
?>