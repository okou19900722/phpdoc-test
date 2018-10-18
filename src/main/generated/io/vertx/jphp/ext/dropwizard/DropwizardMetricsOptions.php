<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\dropwizard;

use io\vertx\jphp\core\metrics\MetricsOptions;

/**
 * Vert.x Dropwizard metrics configuration.
 */
class DropwizardMetricsOptions extends MetricsOptions
{

  public function __construct($dropwizardMetricsOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getBaseName()
  {
    return "";
  }

  /**
   * @param $baseName string
   * @return $this
   */
  public function setBaseName($baseName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getConfigPath()
  {
    return "";
  }

  /**
   * @param $configPath string
   * @return $this
   */
  public function setConfigPath($configPath)
  {
    return $this;
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

  /**
   * @return string
   */
  public function getJmxDomain()
  {
    return "";
  }

  /**
   * @param $jmxDomain string
   * @return $this
   */
  public function setJmxDomain($jmxDomain)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isJmxEnabled()
  {
    return false;
  }

  /**
   * @param $jmxEnabled bool
   * @return $this
   */
  public function setJmxEnabled($jmxEnabled)
  {
    return $this;
  }
  /**
   * @param $monitoredEventBusHandlers Match|mixed
   * @return $this
   */
  public function addMonitoredEventBusHandler($monitoredEventBusHandlers)
  {
    return $this;
  }

  /**
   * @return Match|mixed
   */
  public function getMonitoredEventBusHandlers()
  {
    return null;
  }

  /**
   * @return Match|mixed
   */
  public function getMonitoredHttpClientEndpoint()
  {
    return null;
  }
  /**
   * @param $monitoredHttpClientEndpoints Match|mixed
   * @return $this
   */
  public function addMonitoredHttpClientEndpoint($monitoredHttpClientEndpoints)
  {
    return $this;
  }
  /**
   * @param $monitoredHttpClientUris Match|mixed
   * @return $this
   */
  public function addMonitoredHttpClientUri($monitoredHttpClientUris)
  {
    return $this;
  }

  /**
   * @return Match|mixed
   */
  public function getMonitoredHttpClientUris()
  {
    return null;
  }
  /**
   * @param $monitoredHttpServerUris Match|mixed
   * @return $this
   */
  public function addMonitoredHttpServerUri($monitoredHttpServerUris)
  {
    return $this;
  }

  /**
   * @return Match|mixed
   */
  public function getMonitoredHttpServerUris()
  {
    return null;
  }

  /**
   * @return string
   */
  public function getRegistryName()
  {
    return "";
  }

  /**
   * @param $registryName string
   * @return $this
   */
  public function setRegistryName($registryName)
  {
    return $this;
  }
}