<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\datagram;

use io\vertx\jphp\core\net\NetworkOptions;

/**
 * Options used to configure a datagram socket.
 */
class DatagramSocketOptions extends NetworkOptions
{

  public function __construct($datagramSocketOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isBroadcast()
  {
    return false;
  }

  /**
   * @param $broadcast bool
   * @return $this
   */
  public function setBroadcast($broadcast)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isIpV6()
  {
    return false;
  }

  /**
   * @param $ipV6 bool
   * @return $this
   */
  public function setIpV6($ipV6)
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
   * @return bool
   */
  public function isLoopbackModeDisabled()
  {
    return false;
  }

  /**
   * @param $loopbackModeDisabled bool
   * @return $this
   */
  public function setLoopbackModeDisabled($loopbackModeDisabled)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMulticastNetworkInterface()
  {
    return "";
  }

  /**
   * @param $multicastNetworkInterface string
   * @return $this
   */
  public function setMulticastNetworkInterface($multicastNetworkInterface)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMulticastTimeToLive()
  {
    return 0;
  }

  /**
   * @param $multicastTimeToLive integer
   * @return $this
   */
  public function setMulticastTimeToLive($multicastTimeToLive)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReceiveBufferSize()
  {
    return 0;
  }

  /**
   * @param $receiveBufferSize integer
   * @return $this
   */
  public function setReceiveBufferSize($receiveBufferSize)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReuseAddress()
  {
    return false;
  }

  /**
   * @param $reuseAddress bool
   * @return $this
   */
  public function setReuseAddress($reuseAddress)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReusePort()
  {
    return false;
  }

  /**
   * @param $reusePort bool
   * @return $this
   */
  public function setReusePort($reusePort)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSendBufferSize()
  {
    return 0;
  }

  /**
   * @param $sendBufferSize integer
   * @return $this
   */
  public function setSendBufferSize($sendBufferSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getTrafficClass()
  {
    return 0;
  }

  /**
   * @param $trafficClass integer
   * @return $this
   */
  public function setTrafficClass($trafficClass)
  {
    return $this;
  }
}