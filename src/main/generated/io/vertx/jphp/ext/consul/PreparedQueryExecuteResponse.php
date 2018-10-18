<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * The results of executing prepared query
 */
class PreparedQueryExecuteResponse
{

  public function __construct($preparedQueryExecuteResponse = null)
  {

  }

  /**
   * @return string
   */
  public function getDc()
  {
    return "";
  }

  /**
   * @param $dc string
   * @return $this
   */
  public function setDc($dc)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDnsTtl()
  {
    return "";
  }

  /**
   * @param $dnsTtl string
   * @return $this
   */
  public function setDnsTtl($dnsTtl)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getFailovers()
  {
    return 0;
  }

  /**
   * @param $failovers integer
   * @return $this
   */
  public function setFailovers($failovers)
  {
    return $this;
  }

  /**
   * @return ServiceEntry|mixed
   */
  public function getNodes()
  {
    return null;
  }

  /**
   * @param $nodes ServiceEntry|mixed
   * @return $this
   */
  public function setNodes($nodes)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getService()
  {
    return "";
  }

  /**
   * @param $service string
   * @return $this
   */
  public function setService($service)
  {
    return $this;
  }
}