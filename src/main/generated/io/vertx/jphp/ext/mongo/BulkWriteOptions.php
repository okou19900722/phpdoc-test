<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Options for configuring bulk write operations.
 */
class BulkWriteOptions
{

  public function __construct($bulkWriteOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isOrdered()
  {
    return false;
  }

  /**
   * @param $ordered bool
   * @return $this
   */
  public function setOrdered($ordered)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWriteOption()
  {
    return null;
  }

  /**
   * @param $writeOption string
   * @return $this
   */
  public function setWriteOption($writeOption)
  {
    return $this;
  }
}