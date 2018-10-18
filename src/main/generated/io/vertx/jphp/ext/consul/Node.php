<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 */
class Node
{

  public function __construct($node = null)
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
  public function getLanAddress()
  {
    return "";
  }

  /**
   * @param $lanAddress string
   * @return $this
   */
  public function setLanAddress($lanAddress)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return "";
  }

  /**
   * @param $name string
   * @return $this
   */
  public function setName($name)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWanAddress()
  {
    return "";
  }

  /**
   * @param $wanAddress string
   * @return $this
   */
  public function setWanAddress($wanAddress)
  {
    return $this;
  }
}