<?php /** @noinspection ALL */
namespace io\vertx\jphp\servicediscovery\types;


/**
 * Represents the location of a HTTP endpoint. This object (its json representation) will be used as "location" in a
 * service record.
 */
class HttpLocation
{

  public function __construct($httpLocation = null)
  {

  }

  /**
   * @return string
   */
  public function getEndpoint()
  {
    return "";
  }

  /**
   * @param $endpoint string
   * @return $this
   */
  public function setEndpoint($endpoint)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHost()
  {
    return "";
  }

  /**
   * @param $host string
   * @return $this
   */
  public function setHost($host)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPort()
  {
    return 0;
  }

  /**
   * @param $port integer
   * @return $this
   */
  public function setPort($port)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRoot()
  {
    return "";
  }

  /**
   * @param $root string
   * @return $this
   */
  public function setRoot($root)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSsl()
  {
    return false;
  }

  /**
   * @param $ssl bool
   * @return $this
   */
  public function setSsl($ssl)
  {
    return $this;
  }
}