<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to requesting list of checks
 */
class CheckQueryOptions
{

  public function __construct($checkQueryOptions = null)
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
  public function getNear()
  {
    return "";
  }

  /**
   * @param $near string
   * @return $this
   */
  public function setNear($near)
  {
    return $this;
  }
}