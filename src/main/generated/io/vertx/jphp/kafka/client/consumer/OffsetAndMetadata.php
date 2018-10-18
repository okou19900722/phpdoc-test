<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\consumer;


/**
 * Provide additional metadata when an offset is committed
 */
class OffsetAndMetadata
{

  public function __construct($offsetAndMetadata = null)
  {

  }

  /**
   * @return string
   */
  public function getMetadata()
  {
    return "";
  }

  /**
   * @param $metadata string
   * @return $this
   */
  public function setMetadata($metadata)
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
}