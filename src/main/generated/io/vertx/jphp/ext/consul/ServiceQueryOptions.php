<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to requesting list of services
 */
class ServiceQueryOptions
{

  public function __construct($serviceQueryOptions = null)
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

  /**
   * @return string
   */
  public function getTag()
  {
    return "";
  }

  /**
   * @param $tag string
   * @return $this
   */
  public function setTag($tag)
  {
    return $this;
  }
}