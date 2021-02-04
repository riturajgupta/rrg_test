<?php

namespace Drupal\rrg_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\Serializer\Serializer;

/**
 * Class rrg_test.
 */
class rrg_test extends ControllerBase {

  /**
   * Nodecheck.
   *
   * @return string
   */
  public function nodecheck($key, $id) {
    $site_config = \Drupal::config('system.site');
    $siteapikey = $site_config->get('siteapikey');	 
	if(!empty($siteapikey)) {
	  if($siteapikey == $key) {
		// Node load  
		$node = Node::load($id);	   
		if(!empty($node) && $node->getType() == 'page' ) {		 
		  $serializer = \Drupal::service('serializer');		 
		  $data = $serializer->serialize($node, 'json', ['plugin_id' => 'entity']);
		  return [
			'#type' => 'markup',
			'#markup' => $data,
		  ];
		} else {
		  throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
		}	  
	  }
	  else{
		throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException(); 
	  }
	}
	else {
	  throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException(); 
    }
  }
}
