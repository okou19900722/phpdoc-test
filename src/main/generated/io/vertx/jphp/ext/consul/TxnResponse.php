<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds results of transaction
 */
class TxnResponse
{

  public function __construct($txnResponse = null)
  {

  }
  /**
   * @param $errors TxnError|mixed
   * @return $this
   */
  public function addError($errors)
  {
    return $this;
  }

  /**
   * @return TxnError|mixed
   */
  public function getErrors()
  {
    return null;
  }

  /**
   * @return integer
   */
  public function getErrorsSize()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getResultsSize()
  {
    return 0;
  }
}