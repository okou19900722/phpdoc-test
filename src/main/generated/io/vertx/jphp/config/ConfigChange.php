<?php /** @noinspection ALL */
namespace io\vertx\jphp\config;


/**
 * A structure representing a configuration change.
 */
class ConfigChange
{

  public function __construct($configChange = null)
  {

  }

  /**
   * @return array
   */
  public function getNewConfiguration()
  {
    return [];
  }

  /**
   * @param $newConfiguration array
   * @return $this
   */
  public function setNewConfiguration($newConfiguration)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getPreviousConfiguration()
  {
    return [];
  }

  /**
   * @param $previousConfiguration array
   * @return $this
   */
  public function setPreviousConfiguration($previousConfiguration)
  {
    return $this;
  }
}