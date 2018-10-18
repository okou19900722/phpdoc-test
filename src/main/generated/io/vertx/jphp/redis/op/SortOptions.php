<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class SortOptions
{

  public function __construct($sortOptions = null)
  {

  }

  /**
   * @param $alpha bool
   * @return $this
   */
  public function setAlpha($alpha)
  {
    return $this;
  }

  /**
   * @param $by string
   * @return $this
   */
  public function setBy($by)
  {
    return $this;
  }

  /**
   * @param $descending bool
   * @return $this
   */
  public function setDescending($descending)
  {
    return $this;
  }
  /**
   * @param $gets string
   * @return $this
   */
  public function addGet($gets)
  {
    return $this;
  }

  /**
   * @param $store string
   * @return $this
   */
  public function setStore($store)
  {
    return $this;
  }
}