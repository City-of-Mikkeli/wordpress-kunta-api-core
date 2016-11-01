<?php

  namespace KuntaAPI\Core;
  require_once( __DIR__ . '/vendor/autoload.php');
    
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  class Api {
  	
  	public function __construct() {
  	}
  	
    public function getAnnouncementsApi() {
      return new \KuntaAPI\Api\AnnouncementsApi($this->getClient());
    }
    
    public function getBannersApi() {
      return new \KuntaAPI\Api\BannersApi($this->getClient());
    }
    
    public function getElectronicChannelsApi() {
      return new \KuntaAPI\Api\ElectronicChannelsApi($this->getClient());
    }
    
    public function getEventsApi() {
      return new \KuntaAPI\Api\EventsApi($this->getClient());
    }
    
    public function getFilesApi() {
      return new \KuntaAPI\Api\FilesApi($this->getClient());
    }
    
    public function getJobsApi() {
      return new \KuntaAPI\Api\JobsApi($this->getClient());
    }
    
    public function getMenusApi() {
      return new \KuntaAPI\Api\MenusApi($this->getClient());
    }
    
    public function getNewsApi() {
      return new \KuntaAPI\Api\NewsApi($this->getClient());
    }
    
    public function getOrganizationServicesApi() {
      return new \KuntaAPI\Api\OrganizationServicesApi($this->getClient());
    }
    
    public function getOrganizationsApi() {
      return new \KuntaAPI\Api\OrganizationsApi($this->getClient());
    }
    
    public function getPagesApi() {
      return new \KuntaAPI\Api\PagesApi($this->getClient());
    }
    
    public function getPhoneChannelsApi() {
      return new \KuntaAPI\Api\PhoneChannelsApi($this->getClient());
    }

    public function getPrintableFormChannelsApi() {
      return new \KuntaAPI\Api\PrintableFormChannelsApi($this->getClient());
    }

    public function getServiceCategoriesApi() {
      return new \KuntaAPI\Api\ServiceCategoriesApi($this->getClient());
    }

    public function getServiceChannelsApi() {
      return new \KuntaAPI\Api\ServiceChannelsApi($this->getClient());
    }

    public function getServiceDataApi() {
      return new \KuntaAPI\Api\ServiceDataApi($this->getClient());
    }

    public function getServiceLocationChannelsApi() {
      return new \KuntaAPI\Api\ServiceLocationChannelsApi($this->getClient());
    }

    public function getServicesApi() {
      return new \KuntaAPI\Api\ServicesApi($this->getClient());
    }

    public function getServicesSourcesApi() {
      return new \KuntaAPI\Api\ServicesSourcesApi($this->getClient());
    }

    public function getSettingsApi() {
      return new \KuntaAPI\Api\SettingsApi($this->getClient());
    }

    public function getSourcesApi() {
      return new \KuntaAPI\Api\SourcesApi($this->getClient());
    }
    
    public function getTilesApi() {
      return new \KuntaAPI\Api\TilesApi($this->getClient());
    }
    
    public function getWebPageChannelsApi() {
      return new \KuntaAPI\Api\WebPageChannelsApi($this->getClient());
    }
  	
  	private function getConfiguration() {
     $result = \KuntaAPI\Configuration::getDefaultConfiguration();
  	 $result->setHost(\KuntaAPI\Core\Settings\CoreSettings::getValue("apiUrl"));
  	 return $result;
  	}
  	
  	private function getClient() {
  	  return new \KuntaAPI\ApiClient($this->getConfiguration());
  	}
  	
  }
  
?>
