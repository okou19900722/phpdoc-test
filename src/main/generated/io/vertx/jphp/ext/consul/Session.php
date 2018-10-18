<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds properties of Consul sessions
 */
class Session
{

  public function __construct($session = null)
  {

  }

  /**
   * @return string
   */
  public function getChecks()
  {
    return "";
  }

  /**
   * @param $checks string
   * @return $this
   */
  public function setChecks($checks)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getCreateIndex()
  {
    return 0;
  }

  /**
   * @param $createIndex integer
   * @return $this
   */
  public function setCreateIndex($createIndex)
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
   * @return integer
   */
  public function getIndex()
  {
    return 0;
  }

  /**
   * @param $index integer
   * @return $this
   */
  public function setIndex($index)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLockDelay()
  {
    return 0;
  }

  /**
   * @param $lockDelay integer
   * @return $this
   */
  public function setLockDelay($lockDelay)
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
}