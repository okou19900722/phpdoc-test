<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to trigger a new user event.
 */
class EventOptions
{

  public function __construct($eventOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getNode()
  {
    return "";
  }

  /**
   * @param $node string
   * @return $this
   */
  public function setNode($node)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPayload()
  {
    return "";
  }

  /**
   * @param $payload string
   * @return $this
   */
  public function setPayload($payload)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getService()
  {
    return "";
  }

  /**
   * @param $service string
   * @return $this
   */
  public function setService($service)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTag()
  {
    return "";
  }

  /**
   * @param $tag string
   * @return $this
   */
  public function setTag($tag)
  {
    return $this;
  }
}