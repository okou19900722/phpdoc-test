<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds check properties
 */
class Check
{

  public function __construct($check = null)
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
  public function getNodeName()
  {
    return "";
  }

  /**
   * @param $nodeName string
   * @return $this
   */
  public function setNodeName($nodeName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getNotes()
  {
    return "";
  }

  /**
   * @param $notes string
   * @return $this
   */
  public function setNotes($notes)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getOutput()
  {
    return "";
  }

  /**
   * @param $output string
   * @return $this
   */
  public function setOutput($output)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getServiceId()
  {
    return "";
  }

  /**
   * @param $serviceId string
   * @return $this
   */
  public function setServiceId($serviceId)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getServiceName()
  {
    return "";
  }

  /**
   * @param $serviceName string
   * @return $this
   */
  public function setServiceName($serviceName)
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
}