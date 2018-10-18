<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of services query
 */
class ServiceList
{

  public function __construct($serviceList = null)
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
   * @return Service|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Service|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}