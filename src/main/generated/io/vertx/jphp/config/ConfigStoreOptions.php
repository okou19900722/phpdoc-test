<?php /** @noinspection ALL */
namespace io\vertx\jphp\config;


/**
 * Data object representing the configuration of a configuration store. This object describes the configuration of a
 * chunk of configuration that you retrieve. It specifies its type (type of configuration store), the format of the
 * retrieved configuration chunk, and you can also configures the store if it needs configuration to
 * retrieve the configuration chunk.
 */
class ConfigStoreOptions
{

  public function __construct($configStoreOptions = null)
  {

  }

  /**
   * @return array
   */
  public function getConfig()
  {
    return [];
  }

  /**
   * @param $config array
   * @return $this
   */
  public function setConfig($config)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getFormat()
  {
    return "";
  }

  /**
   * @param $format string
   * @return $this
   */
  public function setFormat($format)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isOptional()
  {
    return false;
  }

  /**
   * @param $optional bool
   * @return $this
   */
  public function setOptional($optional)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return "";
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
  {
    return $this;
  }
}