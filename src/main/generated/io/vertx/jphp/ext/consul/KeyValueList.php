<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of key/value pairs query
 */
class KeyValueList
{

  public function __construct($keyValueList = null)
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
   * @return KeyValue|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list KeyValue|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}