<?php /** @noinspection ALL */
namespace io\vertx\jphp\servicediscovery;


/**
 * Describes a `service`. The record is the only piece of information shared between consumer and provider. It should
 * contains enough metadata to let consumer find the service they want.
 */
class Record
{

  public function __construct($record = null)
  {

  }

  /**
   * @return array
   */
  public function getLocation()
  {
    return [];
  }

  /**
   * @param $location array
   * @return $this
   */
  public function setLocation($location)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getMetadata()
  {
    return [];
  }

  /**
   * @param $metadata array
   * @return $this
   */
  public function setMetadata($metadata)
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
  public function getRegistration()
  {
    return "";
  }

  /**
   * @param $registration string
   * @return $this
   */
  public function setRegistration($registration)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getStatus()
  {
    return null;
  }

  /**
   * @param $status string
   * @return $this
   */
  public function setStatus($status)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return "";
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
  {
    return $this;
  }
}