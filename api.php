<?php
  namespace KuntaAPI\Core;
  
  require_once( __DIR__ . '/vendor/autoload.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  if (!class_exists( 'KuntaAPI\Core\Api' ) ) {
    
    /**
     * Kunta API client
     * 
     * @author Antti Leppä
     */  
     class Api {
      
      public static function getAnnouncementsApi() {
        return new \KuntaAPI\Api\AnnouncementsApi(self::getClient());
      }
      
      public static function getBannersApi() {
        return new \KuntaAPI\Api\BannersApi(self::getClient());
      }
      
      public static function getElectronicChannelsApi() {
        return new \KuntaAPI\Api\ElectronicChannelsApi(self::getClient());
      }
      
      public static function getEventsApi() {
        return new \KuntaAPI\Api\EventsApi(self::getClient());
      }
      
      public static function getFilesApi() {
        return new \KuntaAPI\Api\FilesApi(self::getClient());
      }
      
      public static function getJobsApi() {
        return new \KuntaAPI\Api\JobsApi(self::getClient());
      }
      
      public static function getMenusApi() {
        return new \KuntaAPI\Api\MenusApi(self::getClient());
      }
      
      public static function getNewsApi() {
        return new \KuntaAPI\Api\NewsApi(self::getClient());
      }
      
      public static function getOrganizationServicesApi() {
        return new \KuntaAPI\Api\OrganizationServicesApi(self::getClient());
      }
      
      public static function getOrganizationsApi() {
        return new \KuntaAPI\Api\OrganizationsApi(self::getClient());
      }
      
      public static function getPagesApi() {
        return new \KuntaAPI\Api\PagesApi(self::getClient());
      }
      
      public static function getPhoneChannelsApi() {
        return new \KuntaAPI\Api\PhoneChannelsApi(self::getClient());
      }
  
      public static function getPrintableFormChannelsApi() {
        return new \KuntaAPI\Api\PrintableFormChannelsApi(self::getClient());
      }
  
      public static function getServiceCategoriesApi() {
        return new \KuntaAPI\Api\ServiceCategoriesApi(self::getClient());
      }
  
      public static function getServiceChannelsApi() {
        return new \KuntaAPI\Api\ServiceChannelsApi(self::getClient());
      }
  
      public static function getServiceDataApi() {
        return new \KuntaAPI\Api\ServiceDataApi(self::getClient());
      }
  
      public static function getServiceLocationChannelsApi() {
        return new \KuntaAPI\Api\ServiceLocationChannelsApi(self::getClient());
      }
  
      public static function getServicesApi() {
        return new \KuntaAPI\Api\ServicesApi(self::getClient());
      }
  
      public static function getServicesSourcesApi() {
        return new \KuntaAPI\Api\ServicesSourcesApi(self::getClient());
      }
  
      public static function getSettingsApi() {
        return new \KuntaAPI\Api\SettingsApi(self::getClient());
      }
  
      public static function getSourcesApi() {
        return new \KuntaAPI\Api\SourcesApi(self::getClient());
      }
      
      public static function getTilesApi() {
        return new \KuntaAPI\Api\TilesApi(self::getClient());
      }
      
      public static function getWebPageChannelsApi() {
        return new \KuntaAPI\Api\WebPageChannelsApi(self::getClient());
      }
      
      private function getConfiguration() {
       $result = \KuntaAPI\Configuration::getDefaultConfiguration();
       $result->setHost(\KuntaAPI\Core\CoreSettings::getValue("apiUrl"));
       return $result;
      }
      
      private function getClient() {
        return new \KuntaAPI\ApiClient(self::getConfiguration());
      }
      
    }
  }
  
?>
