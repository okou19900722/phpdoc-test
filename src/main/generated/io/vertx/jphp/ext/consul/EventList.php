<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds result of events query
 */
class EventList
{

  public function __construct($eventList = null)
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
   * @return Event|mixed
   */
  public function getList()
  {
    return null;
  }

  /**
   * @param $list Event|mixed
   * @return $this
   */
  public function setList($list)
  {
    return $this;
  }
}