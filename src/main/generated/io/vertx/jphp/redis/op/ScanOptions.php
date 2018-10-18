<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class ScanOptions
{

  public function __construct($scanOptions = null)
  {

  }

  /**
   * @param $count integer
   * @return $this
   */
  public function setCount($count)
  {
    return $this;
  }

  /**
   * @param $match string
   * @return $this
   */
  public function setMatch($match)
  {
    return $this;
  }
}