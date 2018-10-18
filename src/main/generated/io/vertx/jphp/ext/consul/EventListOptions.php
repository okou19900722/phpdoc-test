<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds options for events list request
 */
class EventListOptions
{

  public function __construct($eventListOptions = null)
  {

  }

  /**
   * @return BlockingQueryOptions|mixed
   */
  public function getBlockingOptions()
  {
    return null;
  }

  /**
   * @param $blockingOptions BlockingQueryOptions|mixed
   * @return $this
   */
  public function setBlockingOptions($blockingOptions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return "";
  }

  /**
   * @param $name string
   * @return $this
   */
  public function setName($name)
  {
    return $this;
  }
}