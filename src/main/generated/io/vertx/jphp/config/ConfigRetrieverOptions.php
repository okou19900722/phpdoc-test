<?php /** @noinspection ALL */
namespace io\vertx\jphp\config;


/**
 */
class ConfigRetrieverOptions
{

  public function __construct($configRetrieverOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isIncludeDefaultStores()
  {
    return false;
  }

  /**
   * @param $includeDefaultStores bool
   * @return $this
   */
  public function setIncludeDefaultStores($includeDefaultStores)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getScanPeriod()
  {
    return 0;
  }

  /**
   * @param $scanPeriod integer
   * @return $this
   */
  public function setScanPeriod($scanPeriod)
  {
    return $this;
  }
  /**
   * @param $stores ConfigStoreOptions|mixed
   * @return $this
   */
  public function addStore($stores)
  {
    return $this;
  }

  /**
   * @return ConfigStoreOptions|mixed
   */
  public function getStores()
  {
    return null;
  }

  /**
   * @param $stores ConfigStoreOptions|mixed
   * @return $this
   */
  public function setStores($stores)
  {
    return $this;
  }
}