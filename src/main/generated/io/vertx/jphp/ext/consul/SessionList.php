<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of sessions query
 */
class SessionList
{

  public function __construct($sessionList = null)
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
   * @return Session|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Session|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}