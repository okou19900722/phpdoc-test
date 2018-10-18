<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class SetOptions
{

  public function __construct($setOptions = null)
  {

  }

  /**
   * @param $ex integer
   * @return $this
   */
  public function setEX($ex)
  {
    return $this;
  }

  /**
   * @param $nx bool
   * @return $this
   */
  public function setNX($nx)
  {
    return $this;
  }

  /**
   * @param $px integer
   * @return $this
   */
  public function setPX($px)
  {
    return $this;
  }

  /**
   * @param $xx bool
   * @return $this
   */
  public function setXX($xx)
  {
    return $this;
  }
}