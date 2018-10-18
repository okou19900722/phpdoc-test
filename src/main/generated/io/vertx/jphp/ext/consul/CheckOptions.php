<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to register checks in Consul.
 */
class CheckOptions
{

  public function __construct($checkOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getDeregisterAfter()
  {
    return "";
  }

  /**
   * @param $deregisterAfter string
   * @return $this
   */
  public function setDeregisterAfter($deregisterAfter)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getGrpc()
  {
    return "";
  }

  /**
   * @param $grpc string
   * @return $this
   */
  public function setGrpc($grpc)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isGrpcTls()
  {
    return false;
  }

  /**
   * @param $grpcTls bool
   * @return $this
   */
  public function setGrpcTls($grpcTls)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHttp()
  {
    return "";
  }

  /**
   * @param $http string
   * @return $this
   */
  public function setHttp($http)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return "";
  }

  /**
   * @param $id string
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getInterval()
  {
    return "";
  }

  /**
   * @param $interval string
   * @return $this
   */
  public function setInterval($interval)
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

  /**
   * @return string
   */
  public function getNotes()
  {
    return "";
  }

  /**
   * @param $notes string
   * @return $this
   */
  public function setNotes($notes)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getScriptArgs()
  {
    return "";
  }

  /**
   * @param $scriptArgs string
   * @return $this
   */
  public function setScriptArgs($scriptArgs)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getServiceId()
  {
    return "";
  }

  /**
   * @param $serviceId string
   * @return $this
   */
  public function setServiceId($serviceId)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getStatus()
  {
    return null;
  }

  /**
   * @param $status string
   * @return $this
   */
  public function setStatus($status)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTcp()
  {
    return "";
  }

  /**
   * @param $tcp string
   * @return $this
   */
  public function setTcp($tcp)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTlsSkipVerify()
  {
    return false;
  }

  /**
   * @param $tlsSkipVerify bool
   * @return $this
   */
  public function setTlsSkipVerify($tlsSkipVerify)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTtl()
  {
    return "";
  }

  /**
   * @param $ttl string
   * @return $this
   */
  public function setTtl($ttl)
  {
    return $this;
  }
}