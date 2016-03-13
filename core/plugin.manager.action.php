<?php

/**
 * @file
 * Example of usage the plugin.manager.action service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Action\ActionManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\CategorizingPluginManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The plugin.manager.action service.
   *
   * @var \Drupal\Core\Action\ActionManager
   */
  protected $action;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Action\ActionManager $action
   *   The action service.
   */
   public function __construct(ActionManager $action) {
     $this->action = $action;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.action')
    );
  }

}