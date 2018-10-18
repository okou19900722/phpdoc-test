<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds operation to apply to the key/value store inside a transaction
 */
class TxnKVOperation
{

  public function __construct($txnKVOperation = null)
  {

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
  public function getType()
  {
    return null;
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
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