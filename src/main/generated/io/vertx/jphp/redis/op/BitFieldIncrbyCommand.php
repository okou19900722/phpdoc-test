<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


class BitFieldIncrbyCommand
{

  public function __construct($bitFieldIncrbyCommand = null)
  {

  }

  /**
   * @return integer
   */
  public function getIncrement()
  {
    return 0;
  }

  /**
   * @param $increment integer
   * @return $this
   */
  public function setIncrement($increment)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getOffset()
  {
    return 0;
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
   * @return string
   */
  public function getType()
  {
    return "";
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
  {
    return $this;
  }
}