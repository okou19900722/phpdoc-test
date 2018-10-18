<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Represents key/value pair stored in Consul
 */
class KeyValue
{

  public function __construct($keyValue = null)
  {

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
   * @return integer
   */
  public function getFlags()
  {
    return 0;
  }

  /**
   * @param $flags integer
   * @return $this
   */
  public function setFlags($flags)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getKey()
  {
    return "";
  }

  /**
   * @param $key string
   * @return $this
   */
  public function setKey($key)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLockIndex()
  {
    return 0;
  }

  /**
   * @param $lockIndex integer
   * @return $this
   */
  public function setLockIndex($lockIndex)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getModifyIndex()
  {
    return 0;
  }

  /**
   * @param $modifyIndex integer
   * @return $this
   */
  public function setModifyIndex($modifyIndex)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSession()
  {
    return "";
  }

  /**
   * @param $session string
   * @return $this
   */
  public function setSession($session)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getValue()
  {
    return "";
  }

  /**
   * @param $value string
   * @return $this
   */
  public function setValue($value)
  {
    return $this;
  }
}