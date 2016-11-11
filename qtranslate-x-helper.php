<?php

  namespace KuntaAPI\Core;
  require_once( __DIR__ . '/vendor/autoload.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  class QTranslateHelper {
  	
  	public function __construct() {
  	}
  	
    public static function splitLocalizedString($text) {
      $blocks = qtranxf_get_language_blocks($text);
      return qtranxf_split_languages($blocks);
    }
    
    public static function getCurrentLanguage(){
      return qtranxf_getLanguage();
    }

    public static function getEnabledLanguages(){
      return qtranxf_getSortedLanguages();
    }
    
    public static function mergeLocalizedArray($values) {
      $result = '';
      foreach ($values as $language => $value) {
        $result = $result . '[:' . $language . ']' . $value;
      }
      return $result . '[:]';
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