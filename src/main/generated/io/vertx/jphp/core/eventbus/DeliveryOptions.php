<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\eventbus;


/**
 * Delivery options are used to configure message delivery.
 * <p>
 * Delivery options allow to configure delivery timeout and message codec name, and to provide any headers
 * that you wish to send with the message.
 */
class DeliveryOptions
{

  public function __construct($deliveryOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getCodecName()
  {
    return "";
  }

  /**
   * @param $codecName string
   * @return $this
   */
  public function setCodecName($codecName)
  {
    return $this;
  }
  /**
   * @param $key String
   * @param $value String
   * @return $this
   */
  public function addHeader($key, $value)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isLocalOnly()
  {
    return false;
  }

  /**
   * @param $localOnly bool
   * @return $this
   */
  public function setLocalOnly($localOnly)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSendTimeout()
  {
    return 0;
  }

  /**
   * @param $sendTimeout integer
   * @return $this
   */
  public function setSendTimeout($sendTimeout)
  {
    return $this;
  }
}