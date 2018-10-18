<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class GeoRadiusOptions
{

  public function __construct($geoRadiusOptions = null)
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
   * @param $withCoord bool
   * @return $this
   */
  public function setWithCoord($withCoord)
  {
    return $this;
  }

  /**
   * @param $withDist bool
   * @return $this
   */
  public function setWithDist($withDist)
  {
    return $this;
  }

  /**
   * @param $withHash bool
   * @return $this
   */
  public function setWithHash($withHash)
  {
    return $this;
  }
}