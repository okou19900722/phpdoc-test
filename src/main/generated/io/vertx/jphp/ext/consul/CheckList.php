<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of checks query
 */
class CheckList
{

  public function __construct($checkList = null)
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
   * @return Check|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Check|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}