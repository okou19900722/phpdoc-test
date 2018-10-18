<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


class BitFieldGetCommand
{

  public function __construct($bitFieldGetCommand = null)
  {

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