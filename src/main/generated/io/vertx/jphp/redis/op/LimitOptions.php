<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class LimitOptions
{

  public function __construct($limitOptions = null)
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
   * @param $offset integer
   * @return $this
   */
  public function setOffset($offset)
  {
    return $this;
  }
}