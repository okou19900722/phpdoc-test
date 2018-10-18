<?php /** @noinspection ALL */
namespace io\vertx\jphp\core;

use io\vertx\jphp\core\dns\AddressResolverOptions;
use io\vertx\jphp\core\eventbus\EventBusOptions;
use io\vertx\jphp\core\file\FileSystemOptions;
use io\vertx\jphp\core\metrics\MetricsOptions;

/**
 * Instances of this class are used to configure @see \io\vertx\jphp\core\Vertx instances.
 */
class VertxOptions
{

  public function __construct($vertxOptions = null)
  {

  }

  /**
   * @return AddressResolverOptions|mixed
   */
  public function getAddressResolverOptions()
  {
    return null;
  }

  /**
   * @param $addressResolverOptions AddressResolverOptions|mixed
   * @return $this
   */
  public function setAddressResolverOptions($addressResolverOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getBlockedThreadCheckInterval()
  {
    return 0;
  }

  /**
   * @param $blockedThreadCheckInterval integer
   * @return $this
   */
  public function setBlockedThreadCheckInterval($blockedThreadCheckInterval)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getBlockedThreadCheckIntervalUnit()
  {
    return null;
  }

  /**
   * @param $blockedThreadCheckIntervalUnit string
   * @return $this
   */
  public function setBlockedThreadCheckIntervalUnit($blockedThreadCheckIntervalUnit)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getClusterHost()
  {
    return "";
  }

  /**
   * @param $clusterHost string
   * @return $this
   */
  public function setClusterHost($clusterHost)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getClusterPingInterval()
  {
    return 0;
  }

  /**
   * @param $clusterPingInterval integer
   * @return $this
   */
  public function setClusterPingInterval($clusterPingInterval)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getClusterPingReplyInterval()
  {
    return 0;
  }

  /**
   * @param $clusterPingReplyInterval integer
   * @return $this
   */
  public function setClusterPingReplyInterval($clusterPingReplyInterval)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getClusterPort()
  {
    return 0;
  }

  /**
   * @param $clusterPort integer
   * @return $this
   */
  public function setClusterPort($clusterPort)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getClusterPublicHost()
  {
    return "";
  }

  /**
   * @param $clusterPublicHost string
   * @return $this
   */
  public function setClusterPublicHost($clusterPublicHost)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getClusterPublicPort()
  {
    return 0;
  }

  /**
   * @param $clusterPublicPort integer
   * @return $this
   */
  public function setClusterPublicPort($clusterPublicPort)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isClustered()
  {
    return false;
  }

  /**
   * @param $clustered bool
   * @return $this
   */
  public function setClustered($clustered)
  {
    return $this;
  }

  /**
   * @return EventBusOptions|mixed
   */
  public function getEventBusOptions()
  {
    return null;
  }

  /**
   * @param $eventBusOptions EventBusOptions|mixed
   * @return $this
   */
  public function setEventBusOptions($eventBusOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getEventLoopPoolSize()
  {
    return 0;
  }

  /**
   * @param $eventLoopPoolSize integer
   * @return $this
   */
  public function setEventLoopPoolSize($eventLoopPoolSize)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isFileResolverCachingEnabled()
  {
    return false;
  }

  /**
   * @param $fileResolverCachingEnabled bool
   * @return $this
   */
  public function setFileResolverCachingEnabled($fileResolverCachingEnabled)
  {
    return $this;
  }

  /**
   * @return FileSystemOptions|mixed
   */
  public function getFileSystemOptions()
  {
    return null;
  }

  /**
   * @param $fileSystemOptions FileSystemOptions|mixed
   * @return $this
   */
  public function setFileSystemOptions($fileSystemOptions)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isHAEnabled()
  {
    return false;
  }

  /**
   * @param $haEnabled bool
   * @return $this
   */
  public function setHAEnabled($haEnabled)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHAGroup()
  {
    return "";
  }

  /**
   * @param $haGroup string
   * @return $this
   */
  public function setHAGroup($haGroup)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getInternalBlockingPoolSize()
  {
    return 0;
  }

  /**
   * @param $internalBlockingPoolSize integer
   * @return $this
   */
  public function setInternalBlockingPoolSize($internalBlockingPoolSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxEventLoopExecuteTime()
  {
    return 0;
  }

  /**
   * @param $maxEventLoopExecuteTime integer
   * @return $this
   */
  public function setMaxEventLoopExecuteTime($maxEventLoopExecuteTime)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMaxEventLoopExecuteTimeUnit()
  {
    return null;
  }

  /**
   * @param $maxEventLoopExecuteTimeUnit string
   * @return $this
   */
  public function setMaxEventLoopExecuteTimeUnit($maxEventLoopExecuteTimeUnit)
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
   * @return MetricsOptions|mixed
   */
  public function getMetricsOptions()
  {
    return null;
  }

  /**
   * @param $metricsOptions MetricsOptions|mixed
   * @return $this
   */
  public function setMetricsOptions($metricsOptions)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getPreferNativeTransport()
  {
    return false;
  }

  /**
   * @param $preferNativeTransport bool
   * @return $this
   */
  public function setPreferNativeTransport($preferNativeTransport)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getQuorumSize()
  {
    return 0;
  }

  /**
   * @param $quorumSize integer
   * @return $this
   */
  public function setQuorumSize($quorumSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getWarningExceptionTime()
  {
    return 0;
  }

  /**
   * @param $warningExceptionTime integer
   * @return $this
   */
  public function setWarningExceptionTime($warningExceptionTime)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWarningExceptionTimeUnit()
  {
    return null;
  }

  /**
   * @param $warningExceptionTimeUnit string
   * @return $this
   */
  public function setWarningExceptionTimeUnit($warningExceptionTimeUnit)
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