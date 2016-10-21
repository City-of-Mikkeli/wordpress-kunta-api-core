<?php
  namespace KuntaAPI\Core\Settings;
  
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  define(KUNTA_API_CORE_SETTINGS, 'kunta_api_core');
  define(KUNTA_API_CORE_SETTINGS_GROUP, 'kunta_api_core');
  define(KUNTA_API_CORE_SETTINGS_PAGE, 'kunta_api_core_settings');
  		
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
  
  class CoreSettings {
  	
  	public static function getSettings() {
  		return array(
  			array(
  			  "type" => "url",
  			  "name" => "apiUrl",
  				"title" => __('URL', KUNTA_API_CORE_I18N_DOMAIN)
  			), 
  			array(
  			  "type" => "text",
  				"name" => "apiUser",
  				"title" => __('Username', KUNTA_API_CORE_I18N_DOMAIN)
  			), 
  			array(
  			  "type" => "password",
  				"name" => "apiPassword",
  				"title" => __('Password', KUNTA_API_CORE_I18N_DOMAIN)
  			), 
  			array(
  			  "type" => "text",
  				"name" => "businessCode",
  				"title" => __('Organization Business Code', KUNTA_API_CORE_I18N_DOMAIN)
  			), 
  			array(
  			  "type" => "text",
  				"name" => "businessName",
  				"title" => __('Organization Business Name', KUNTA_API_CORE_I18N_DOMAIN)
  			)
  		);
  	}

  	public static function getSetting($name) {
  		foreach (CoreSettings::getSettings() as $setting) {
  			if ($setting["name"] == $name) {
  				return $setting;
  			}
  		}
  		
  		return null;
  	}
  	
  }
  
  class CoreSettingsUI {
  	
  	public function __construct() {
  	  add_action('admin_init', array($this, 'adminInit'));
  	  add_action('admin_menu', array($this, 'adminMenu'));
  	}
  	
  	public function adminMenu() {
      add_options_page (__( "Kunta API Settings", KUNTA_API_CORE_I18N_DOMAIN ), __( "Kunta API Settings", KUNTA_API_CORE_I18N_DOMAIN ), 'manage_options', 'kunta_api_core_settings', array($this, 'settingsPage'));
  	}
  	
  	public function adminInit() {
  	  register_setting(KUNTA_API_CORE_SETTINGS_GROUP, KUNTA_API_CORE_SETTINGS_PAGE);
  	  add_settings_section('api', __('API Settings', KUNTA_API_CORE_I18N_DOMAIN), null, KUNTA_API_CORE_SETTINGS_PAGE);

  	  foreach (CoreSettings::getSettings() as $setting) {
  	  	$this->addOption('api', $setting['name'], $setting['title']);
  	  }
  	}
  	
  	private function addOption($group, $name, $title) {
  	  add_settings_field($name, $title, array($this, $name), KUNTA_API_CORE_SETTINGS_PAGE, $group);
    }
    
    private function createFieldUI($name) {
      $setting = CoreSettings::getSetting($name);
    	$options = get_option(KUNTA_API_CORE_SETTINGS_OPTION);
    	$settingType = $setting['type'];
    	$settingName = $setting['name'];
    	$optionValue = $options[$settingName];
    	
    	echo "<input id='$settingName' name='" . KUNTA_API_CORE_SETTINGS_OPTION . "[$settingName]' size='42' type='$settingType' value='$optionValue' />";
    }
  	
  	public function apiUrl() {
  		$this->createFieldUI('apiUrl');
  	}
  	
  	public function apiUser() {
  		$this->createFieldUI('apiUser');
  	}
  	
  	public function apiPassword() {
  		$this->createFieldUI('apiPassword');
  	}
  	
  	public function businessCode() {
  	  $this->createFieldUI('businessCode');
  	}
  	
  	public function businessName() {
  	  $this->createFieldUI('businessName');
  	}
  	
  	public function settingsPage() {
  	  if (!current_user_can('manage_options')) {
  		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  	  }
  	  
  	  echo '<div class="wrap">';
  	  echo "<h2>" . __( "Email Media Import Settings", KUNTA_API_CORE_I18N_DOMAIN) . "</h2>";
  	  echo '<form action="options.php" method="POST">';
  	  settings_fields(KUNTA_API_CORE_SETTINGS_GROUP);
  	  do_settings_sections(KUNTA_API_CORE_SETTINGS_PAGE);
  	  
  	  submit_button();
  	  echo "</form>";
  	  echo "</div>";
  	}
  }
  
  if (is_admin()) {
  	$coreSettingsUI = new CoreSettingsUI();
  }

?>