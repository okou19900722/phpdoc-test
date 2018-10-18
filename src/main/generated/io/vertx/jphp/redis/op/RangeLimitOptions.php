<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class RangeLimitOptions extends LimitOptions
{

  public function __construct($rangeLimitOptions = null)
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

  /**
   * @param $withscores bool
   * @return $this
   */
  public function setWithscores($withscores)
  {
    return $this;
  }
}