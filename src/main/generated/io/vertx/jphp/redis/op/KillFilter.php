<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class KillFilter
{

  public function __construct($killFilter = null)
  {

  }

  /**
   * @param $addr string
   * @return $this
   */
  public function setAddr($addr)
  {
    return $this;
  }

  /**
   * @param $id string
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @param $skipme bool
   * @return $this
   */
  public function setSkipme($skipme)
  {
    return $this;
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