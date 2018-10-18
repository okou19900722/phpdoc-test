<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds list of operations in transaction
 */
class TxnRequest
{

  public function __construct($txnRequest = null)
  {

  }

  /**
   * @return integer
   */
  public function getOperationsSize()
  {
    return 0;
  }
}