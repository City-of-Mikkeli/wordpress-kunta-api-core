<?php
/*
 * Created on Oct 21, 2016
 * Plugin Name: Kunta API Core
 * Description: Core functionalities for Kunta API integrations
 * Version: 0.1
 * Author: Antti Leppä / Otavan Opisto
 */

defined ( 'ABSPATH' ) || die ( 'No script kiddies please!' );

require_once( __DIR__ . '/activator.php');
require_once( __DIR__ . '/schedules.php');
require_once( __DIR__ . '/qtranslate-x-helper.php');
require_once( __DIR__ . '/settings.php');
require_once( __DIR__ . '/api.php');
require_once( __DIR__ . '/kses.php');
require_once( __DIR__ . '/tinymce.php');
require_once( __DIR__ . '/abstract-content-processor.php');
require_once( __DIR__ . '/page-processor.php');

?>