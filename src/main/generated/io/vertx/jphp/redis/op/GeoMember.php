<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class GeoMember
{

  public function __construct($geoMember = null)
  {

  }

  /**
   * @param $latitude float
   * @return $this
   */
  public function setLatitude($latitude)
  {
    return $this;
  }

  /**
   * @param $longitude float
   * @return $this
   */
  public function setLongitude($longitude)
  {
    return $this;
  }

  /**
   * @param $member string
   * @return $this
   */
  public function setMember($member)
  {
    return $this;
  }
}