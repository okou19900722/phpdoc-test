<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to perform blocking query that used to wait for a potential change using long polling.
 */
class BlockingQueryOptions
{

  public function __construct($blockingQueryOptions = null)
  {

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
  public function getWait()
  {
    return "";
  }

  /**
   * @param $wait string
   * @return $this
   */
  public function setWait($wait)
  {
    return $this;
  }
}