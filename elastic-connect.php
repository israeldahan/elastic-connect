<?php

/*
Plugin Name: Elastic Connect
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: israel dahan
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

namespace ElasticConnect;

use Elasticsearch\ClientBuilder;

if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

require_once './vendor/autoload.php';


//
//$client = ClientBuilder::create()
//  ->setElasticCloudId('<elastic-cloud-id>')
//  ->setBasicAuthentication('<username>', '<secure-password>')
//  ->build();
//
