<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds properties of service, node and related checks
 */
class ServiceEntry
{

  public function __construct($serviceEntry = null)
  {

  }

  /**
   * @return Check|mixed
   */
  public function getChecks()
  {
    return null;
  }

  /**
   * @param $checks Check|mixed
   * @return $this
   */
  public function setChecks($checks)
  {
    return $this;
  }

  /**
   * @return Node|mixed
   */
  public function getNode()
  {
    return null;
  }

  /**
   * @param $node Node|mixed
   * @return $this
   */
  public function setNode($node)
  {
    return $this;
  }

  /**
   * @return Service|mixed
   */
  public function getService()
  {
    return null;
  }

  /**
   * @param $service Service|mixed
   * @return $this
   */
  public function setService($service)
  {
    return $this;
  }
}