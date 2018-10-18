<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\common;


/**
 * Information about a Kafka cluster node
 */
class Node
{

  public function __construct($node = null)
  {

  }

  /**
   * @return bool
   */
  public function isEmpty()
  {
    return false;
  }

  /**
   * @param $hasRack bool
   * @return $this
   */
  public function setHasRack($hasRack)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHost()
  {
    return "";
  }

  /**
   * @param $host string
   * @return $this
   */
  public function setHost($host)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getId()
  {
    return 0;
  }

  /**
   * @param $id integer
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIdString()
  {
    return "";
  }

  /**
   * @param $idString string
   * @return $this
   */
  public function setIdString($idString)
  {
    return $this;
  }

  /**
   * @param $isEmpty bool
   * @return $this
   */
  public function setIsEmpty($isEmpty)
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
   * @param $rack string
   * @return $this
   */
  public function setRack($rack)
  {
    return $this;
  }
}