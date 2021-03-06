<?php

/**
 * @file
 * Example of usage the logger.channel.aggregator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Logger\LoggerChannel;
// The service interfaces.
use Drupal\Core\Logger\LoggerChannelInterface;
use Psr\Log\LoggerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The logger.channel.aggregator service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $aggregator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $aggregator
   *   The aggregator service.
   */
   public function __construct(LoggerChannelInterface $aggregator) {
     $this->aggregator = $aggregator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('logger.channel.aggregator')
    );
  }

}
