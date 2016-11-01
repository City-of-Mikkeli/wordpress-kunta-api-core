<?php
  namespace KuntaAPI\Core;
  
  require_once( __DIR__ . '/vendor/autoload.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  if (!class_exists( 'KuntaAPI\Core\CoreSetting' ) ) {
    
    class CoreSetting {
      
      private $type;
      private $name;
      private $title;
       
      public function __construct($type, $name, $title) {
        $this->type = $type;
        $this->name = $name;
        $this->title = $title;
      }
       
      public function getType() {
        return $this->type;
      }
       
      public function getName() {
        return $this->name;
      }
       
      public function getTitle() {
        return $this->title;
      }
      
    }
  }
  
?>
