<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds list of services, nodes and related checks
 */
class ServiceEntryList
{

  public function __construct($serviceEntryList = null)
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
   * @return ServiceEntry|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list ServiceEntry|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}