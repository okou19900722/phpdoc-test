<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds properties of service and node that its containing
 */
class Service
{

  public function __construct($service = null)
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
  public function getNodeAddress()
  {
    return "";
  }

  /**
   * @param $nodeAddress string
   * @return $this
   */
  public function setNodeAddress($nodeAddress)
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
  public function getTags()
  {
    return "";
  }

  /**
   * @param $tags string
   * @return $this
   */
  public function setTags($tags)
  {
    return $this;
  }
}