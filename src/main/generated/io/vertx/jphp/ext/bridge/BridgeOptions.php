<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\bridge;


/**
 * Specify the event bus bridge options.
 */
class BridgeOptions
{

  public function __construct($bridgeOptions = null)
  {

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
   * @param $inboundPermitteds PermittedOptions|mixed
   * @return $this
   */
  public function setInboundPermitteds($inboundPermitteds)
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
   * @param $outboundPermitteds PermittedOptions|mixed
   * @return $this
   */
  public function setOutboundPermitteds($outboundPermitteds)
  {
    return $this;
  }
}