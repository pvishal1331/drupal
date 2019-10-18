<?php

namespace Drupal\test_REST_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
/**
 * Provides a test resource
 * 
 * @RestResource(
 * id = "test_resource",
 * label = @Translation("Test Resource"),
 * uri_paths = {
 *           "canonical"= "\test_REST_api\test_resource"  
 *  }
 * ) 
 */

class TestResource extends ResourceBase {
  /**
   * Responds entity to Get requests.
   * @return Drupal\rest\TestResource 
   */
  public function get() {
     $response = ['message' => 'Hello, this is a rest service'];
    return new ResourceResponse($response);
  }
}