<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds coordinates of servers in datacenter
 */
class DcCoordinates
{

  public function __construct($dcCoordinates = null)
  {

  }

  /**
   * @return string
   */
  public function getDatacenter()
  {
    return "";
  }

  /**
   * @param $datacenter string
   * @return $this
   */
  public function setDatacenter($datacenter)
  {
    return $this;
  }

  /**
   * @return Coordinate|mixed
   */
  public function getServers()
  {
    return null;
  }

  /**
   * @param $servers Coordinate|mixed
   * @return $this
   */
  public function setServers($servers)
  {
    return $this;
  }
}