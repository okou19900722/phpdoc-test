<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of network coordinates query
 */
class CoordinateList
{

  public function __construct($coordinateList = null)
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
   * @return Coordinate|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Coordinate|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}