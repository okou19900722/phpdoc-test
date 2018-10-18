<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to placing a given service into "maintenance mode".
 * During maintenance mode, the service will be marked as unavailable
 * and will not be present in DNS or API queries. Maintenance mode is persistent
 * and will be automatically restored on agent restart.
 */
class MaintenanceOptions
{

  public function __construct($maintenanceOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isEnable()
  {
    return false;
  }

  /**
   * @param $enable bool
   * @return $this
   */
  public function setEnable($enable)
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
  public function getReason()
  {
    return "";
  }

  /**
   * @param $reason string
   * @return $this
   */
  public function setReason($reason)
  {
    return $this;
  }
}