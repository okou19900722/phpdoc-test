<?php /** @noinspection ALL */
namespace io\vertx\jphp\rabbitmq;


/**
 * RabbitMQ client options, most
 */
class RabbitMQOptions
{

  public function __construct($rabbitMQOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isAutomaticRecoveryEnabled()
  {
    return false;
  }

  /**
   * @param $automaticRecoveryEnabled bool
   * @return $this
   */
  public function setAutomaticRecoveryEnabled($automaticRecoveryEnabled)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getConnectionRetries()
  {
    return 0;
  }

  /**
   * @param $connectionRetries integer
   * @return $this
   */
  public function setConnectionRetries($connectionRetries)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getConnectionRetryDelay()
  {
    return 0;
  }

  /**
   * @param $connectionRetryDelay integer
   * @return $this
   */
  public function setConnectionRetryDelay($connectionRetryDelay)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getConnectionTimeout()
  {
    return 0;
  }

  /**
   * @param $connectionTimeout integer
   * @return $this
   */
  public function setConnectionTimeout($connectionTimeout)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getHandshakeTimeout()
  {
    return 0;
  }

  /**
   * @param $handshakeTimeout integer
   * @return $this
   */
  public function setHandshakeTimeout($handshakeTimeout)
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
   * @return bool
   */
  public function getIncludeProperties()
  {
    return false;
  }

  /**
   * @param $includeProperties bool
   * @return $this
   */
  public function setIncludeProperties($includeProperties)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getNetworkRecoveryInterval()
  {
    return 0;
  }

  /**
   * @param $networkRecoveryInterval integer
   * @return $this
   */
  public function setNetworkRecoveryInterval($networkRecoveryInterval)
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
   * @return integer
   */
  public function getRequestedChannelMax()
  {
    return 0;
  }

  /**
   * @param $requestedChannelMax integer
   * @return $this
   */
  public function setRequestedChannelMax($requestedChannelMax)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getRequestedHeartbeat()
  {
    return 0;
  }

  /**
   * @param $requestedHeartbeat integer
   * @return $this
   */
  public function setRequestedHeartbeat($requestedHeartbeat)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUri()
  {
    return "";
  }

  /**
   * @param $uri string
   * @return $this
   */
  public function setUri($uri)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUser()
  {
    return "";
  }

  /**
   * @param $user string
   * @return $this
   */
  public function setUser($user)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getVirtualHost()
  {
    return "";
  }

  /**
   * @param $virtualHost string
   * @return $this
   */
  public function setVirtualHost($virtualHost)
  {
    return $this;
  }
}