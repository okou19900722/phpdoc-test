<?php /** @noinspection ALL */
namespace io\vertx\jphp\core;


/**
 * Options for configuring a verticle deployment.
 * <p>
 */
class DeploymentOptions
{

  public function __construct($deploymentOptions = null)
  {

  }

  /**
   * @return array
   */
  public function getConfig()
  {
    return [];
  }

  /**
   * @param $config array
   * @return $this
   */
  public function setConfig($config)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getExtraClasspath()
  {
    return "";
  }

  /**
   * @param $extraClasspath string
   * @return $this
   */
  public function setExtraClasspath($extraClasspath)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isHa()
  {
    return false;
  }

  /**
   * @param $ha bool
   * @return $this
   */
  public function setHa($ha)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getInstances()
  {
    return 0;
  }

  /**
   * @param $instances integer
   * @return $this
   */
  public function setInstances($instances)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIsolatedClasses()
  {
    return "";
  }

  /**
   * @param $isolatedClasses string
   * @return $this
   */
  public function setIsolatedClasses($isolatedClasses)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIsolationGroup()
  {
    return "";
  }

  /**
   * @param $isolationGroup string
   * @return $this
   */
  public function setIsolationGroup($isolationGroup)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxWorkerExecuteTime()
  {
    return 0;
  }

  /**
   * @param $maxWorkerExecuteTime integer
   * @return $this
   */
  public function setMaxWorkerExecuteTime($maxWorkerExecuteTime)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMaxWorkerExecuteTimeUnit()
  {
    return null;
  }

  /**
   * @param $maxWorkerExecuteTimeUnit string
   * @return $this
   */
  public function setMaxWorkerExecuteTimeUnit($maxWorkerExecuteTimeUnit)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isMultiThreaded()
  {
    return false;
  }

  /**
   * @param $multiThreaded bool
   * @return $this
   */
  public function setMultiThreaded($multiThreaded)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isWorker()
  {
    return false;
  }

  /**
   * @param $worker bool
   * @return $this
   */
  public function setWorker($worker)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWorkerPoolName()
  {
    return "";
  }

  /**
   * @param $workerPoolName string
   * @return $this
   */
  public function setWorkerPoolName($workerPoolName)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getWorkerPoolSize()
  {
    return 0;
  }

  /**
   * @param $workerPoolSize integer
   * @return $this
   */
  public function setWorkerPoolSize($workerPoolSize)
  {
    return $this;
  }
}