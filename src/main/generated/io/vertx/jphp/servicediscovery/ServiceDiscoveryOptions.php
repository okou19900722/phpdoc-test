<?php /** @noinspection ALL */
namespace io\vertx\jphp\servicediscovery;


/**
 * Options to configure the service discovery.
 */
class ServiceDiscoveryOptions
{

  public function __construct($serviceDiscoveryOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAnnounceAddress()
  {
    return "";
  }

  /**
   * @param $announceAddress string
   * @return $this
   */
  public function setAnnounceAddress($announceAddress)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isAutoRegistrationOfImporters()
  {
    return false;
  }

  /**
   * @param $autoRegistrationOfImporters bool
   * @return $this
   */
  public function setAutoRegistrationOfImporters($autoRegistrationOfImporters)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getBackendConfiguration()
  {
    return [];
  }

  /**
   * @param $backendConfiguration array
   * @return $this
   */
  public function setBackendConfiguration($backendConfiguration)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return "";
  }

  /**
   * @param $name string
   * @return $this
   */
  public function setName($name)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUsageAddress()
  {
    return "";
  }

  /**
   * @param $usageAddress string
   * @return $this
   */
  public function setUsageAddress($usageAddress)
  {
    return $this;
  }
}