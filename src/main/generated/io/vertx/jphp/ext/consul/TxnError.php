<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds information describing which operations failed if the transaction was rolled back.
 */
class TxnError
{

  public function __construct($txnError = null)
  {

  }

  /**
   * @return integer
   */
  public function getOpIndex()
  {
    return 0;
  }

  /**
   * @param $opIndex integer
   * @return $this
   */
  public function setOpIndex($opIndex)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWhat()
  {
    return "";
  }

  /**
   * @param $what string
   * @return $this
   */
  public function setWhat($what)
  {
    return $this;
  }
}