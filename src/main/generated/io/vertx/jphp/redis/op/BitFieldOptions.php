<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


class BitFieldOptions
{

  public function __construct($bitFieldOptions = null)
  {

  }

  /**
   * @return BitFieldGetCommand|mixed
   */
  public function getGet()
  {
    return null;
  }

  /**
   * @param $get BitFieldGetCommand|mixed
   * @return $this
   */
  public function setGet($get)
  {
    return $this;
  }

  /**
   * @return BitFieldIncrbyCommand|mixed
   */
  public function getIncrby()
  {
    return null;
  }

  /**
   * @param $incrby BitFieldIncrbyCommand|mixed
   * @return $this
   */
  public function setIncrby($incrby)
  {
    return $this;
  }

  /**
   * @return BitFieldSetCommand|mixed
   */
  public function getSet()
  {
    return null;
  }

  /**
   * @param $set BitFieldSetCommand|mixed
   * @return $this
   */
  public function setSet($set)
  {
    return $this;
  }
}