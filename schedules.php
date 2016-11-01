<?php

  function kunta_api_minutely_cron_job_recurrence( $schedules ) {
    $schedules['Minutely'] = array(
      'display' => __( 'Once in a minute', 'textdomain' ),
      'interval' => 60
    );
    
    return $schedules;
  }
  
  add_filter('cron_schedules', 'kunta_api_minutely_cron_job_recurrence');

?>