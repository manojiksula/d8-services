<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.dynamic_page_cache_response_policy service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\PageCache\ChainResponsePolicy;
// The service interfaces.
use Drupal\Core\PageCache\ChainResponsePolicyInterface;
use Drupal\Core\PageCache\ResponsePolicyInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.dynamic_page_cache_response_policy service.
   *
   * @var \Drupal\Core\PageCache\ChainResponsePolicyInterface
   */
  protected $dynamicPageCacheResponsePolicy;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\PageCache\ChainResponsePolicyInterface $dynamic_page_cache_response_policy
   *   The dynamic_page_cache_response_policy service.
   */
   public function __construct(ChainResponsePolicyInterface $dynamic_page_cache_response_policy) {
     $this->dynamicPageCacheResponsePolicy = $dynamic_page_cache_response_policy;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.dynamic_page_cache_response_policy')
    );
  }

}
