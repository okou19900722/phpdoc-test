<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;


/**
 * Proxy options for a net client or a net client.
 */
class ProxyOptions
{

  public function __construct($proxyOptions = null)
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
   * @return string
   */
  public function getPassword()
  {
    return "";
  }

  /**
   * @param $password string
   * @return $this
   */
  public function setPassword($password)
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
  public function getType()
  {
    return null;
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUsername()
  {
    return "";
  }

  /**
   * @param $username string
   * @return $this
   */
  public function setUsername($username)
  {
    return $this;
  }
}