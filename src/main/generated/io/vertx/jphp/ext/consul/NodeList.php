<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of nodes query
 */
class NodeList
{

  public function __construct($nodeList = null)
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
   * @return Node|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Node|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}