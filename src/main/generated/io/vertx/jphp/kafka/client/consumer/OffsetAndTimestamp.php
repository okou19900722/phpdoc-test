<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\consumer;


/**
 * Represent information related to a Offset with timestamp information
 */
class OffsetAndTimestamp
{

  public function __construct($offsetAndTimestamp = null)
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
   * @return integer
   */
  public function getTimestamp()
  {
    return 0;
  }

  /**
   * @param $timestamp integer
   * @return $this
   */
  public function setTimestamp($timestamp)
  {
    return $this;
  }
}