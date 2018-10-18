<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\web\handler\sockjs;

use io\vertx\jphp\ext\bridge\PermittedOptions as JPermittedOptions;

/**
 * Specify a match to allow for inbound and outbound traffic using the
 * @see \io\vertx\jphp\ext\web\handler\sockjs\BridgeOptions.
 */
class PermittedOptions extends JPermittedOptions
{

  public function __construct($permittedOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAddress()
  {
    return "";
  }

  /**
   * @param $address string
   * @return $this
   */
  public function setAddress($address)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getAddressRegex()
  {
    return "";
  }

  /**
   * @param $addressRegex string
   * @return $this
   */
  public function setAddressRegex($addressRegex)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getMatch()
  {
    return [];
  }

  /**
   * @param $match array
   * @return $this
   */
  public function setMatch($match)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRequiredAuthority()
  {
    return "";
  }

  /**
   * @param $requiredAuthority string
   * @return $this
   */
  public function setRequiredAuthority($requiredAuthority)
  {
    return $this;
  }
}