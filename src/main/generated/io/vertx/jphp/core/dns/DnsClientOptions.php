<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\dns;


/**
 * Configuration options for Vert.x DNS client.
 */
class DnsClientOptions
{

  public function __construct($dnsClientOptions = null)
  {

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
   * @return bool
   */
  public function getLogActivity()
  {
    return false;
  }

  /**
   * @param $logActivity bool
   * @return $this
   */
  public function setLogActivity($logActivity)
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
   * @return integer
   */
  public function getQueryTimeout()
  {
    return 0;
  }

  /**
   * @param $queryTimeout integer
   * @return $this
   */
  public function setQueryTimeout($queryTimeout)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isRecursionDesired()
  {
    return false;
  }

  /**
   * @param $recursionDesired bool
   * @return $this
   */
  public function setRecursionDesired($recursionDesired)
  {
    return $this;
  }
}