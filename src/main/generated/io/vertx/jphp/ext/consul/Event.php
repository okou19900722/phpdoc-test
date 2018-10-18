<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds properties of Consul event
 */
class Event
{

  public function __construct($event = null)
  {

  }

  /**
   * @return string
   */
  public function getId()
  {
    return "";
  }

  /**
   * @param $id string
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLTime()
  {
    return 0;
  }

  /**
   * @param $lTime integer
   * @return $this
   */
  public function setLTime($lTime)
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

  /**
   * @return integer
   */
  public function getVersion()
  {
    return 0;
  }

  /**
   * @param $version integer
   * @return $this
   */
  public function setVersion($version)
  {
    return $this;
  }
}