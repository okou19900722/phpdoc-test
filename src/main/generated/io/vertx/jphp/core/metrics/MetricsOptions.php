<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\metrics;


/**
 * Vert.x metrics base configuration, this class can be extended by provider implementations to configure
 * those specific implementations.
 */
class MetricsOptions
{

  public function __construct($metricsOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isEnabled()
  {
    return false;
  }

  /**
   * @param $enabled bool
   * @return $this
   */
  public function setEnabled($enabled)
  {
    return $this;
  }
}