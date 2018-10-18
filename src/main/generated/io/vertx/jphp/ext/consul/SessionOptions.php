<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to create session.
 */
class SessionOptions
{

  public function __construct($sessionOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getBehavior()
  {
    return null;
  }

  /**
   * @param $behavior string
   * @return $this
   */
  public function setBehavior($behavior)
  {
    return $this;
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
   * @return integer
   */
  public function getTtl()
  {
    return 0;
  }

  /**
   * @param $ttl integer
   * @return $this
   */
  public function setTtl($ttl)
  {
    return $this;
  }
}