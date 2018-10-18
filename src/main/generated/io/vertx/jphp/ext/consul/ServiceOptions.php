<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to register service.
 */
class ServiceOptions
{

  public function __construct($serviceOptions = null)
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
   * @return CheckOptions|mixed
   */
  public function getCheckOptions()
  {
    return null;
  }

  /**
   * @param $checkOptions CheckOptions|mixed
   * @return $this
   */
  public function setCheckOptions($checkOptions)
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