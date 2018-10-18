<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\web\handler\sockjs;

use io\vertx\jphp\ext\bridge\PermittedOptions;

/**
 * Options for configuring the event bus bridge.
 */
class BridgeOptions
{

  public function __construct($bridgeOptions = null)
  {

  }

  /**
   * @param $inboundPermitted PermittedOptions|mixed
   * @return $this
   */
  public function setInboundPermitted($inboundPermitted)
  {
    return $this;
  }
  /**
   * @param $inboundPermitteds PermittedOptions|mixed
   * @return $this
   */
  public function addInboundPermitted($inboundPermitteds)
  {
    return $this;
  }

  /**
   * @return PermittedOptions|mixed
   */
  public function getInboundPermitteds()
  {
    return null;
  }

  /**
   * @return integer
   */
  public function getMaxAddressLength()
  {
    return 0;
  }

  /**
   * @param $maxAddressLength integer
   * @return $this
   */
  public function setMaxAddressLength($maxAddressLength)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxHandlersPerSocket()
  {
    return 0;
  }

  /**
   * @param $maxHandlersPerSocket integer
   * @return $this
   */
  public function setMaxHandlersPerSocket($maxHandlersPerSocket)
  {
    return $this;
  }

  /**
   * @param $outboundPermitted PermittedOptions|mixed
   * @return $this
   */
  public function setOutboundPermitted($outboundPermitted)
  {
    return $this;
  }
  /**
   * @param $outboundPermitteds PermittedOptions|mixed
   * @return $this
   */
  public function addOutboundPermitted($outboundPermitteds)
  {
    return $this;
  }

  /**
   * @return PermittedOptions|mixed
   */
  public function getOutboundPermitteds()
  {
    return null;
  }

  /**
   * @return integer
   */
  public function getPingTimeout()
  {
    return 0;
  }

  /**
   * @param $pingTimeout integer
   * @return $this
   */
  public function setPingTimeout($pingTimeout)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReplyTimeout()
  {
    return 0;
  }

  /**
   * @param $replyTimeout integer
   * @return $this
   */
  public function setReplyTimeout($replyTimeout)
  {
    return $this;
  }
}