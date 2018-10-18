<?php /** @noinspection ALL */
namespace io\vertx\jphp\circuitbreaker;


/**
 * Circuit breaker configuration options. All time are given in milliseconds.
 */
class CircuitBreakerOptions
{

  public function __construct($circuitBreakerOptions = null)
  {

  }

  /**
   * @return integer
   */
  public function getFailuresRollingWindow()
  {
    return 0;
  }

  /**
   * @param $failuresRollingWindow integer
   * @return $this
   */
  public function setFailuresRollingWindow($failuresRollingWindow)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isFallbackOnFailure()
  {
    return false;
  }

  /**
   * @param $fallbackOnFailure bool
   * @return $this
   */
  public function setFallbackOnFailure($fallbackOnFailure)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxFailures()
  {
    return 0;
  }

  /**
   * @param $maxFailures integer
   * @return $this
   */
  public function setMaxFailures($maxFailures)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxRetries()
  {
    return 0;
  }

  /**
   * @param $maxRetries integer
   * @return $this
   */
  public function setMaxRetries($maxRetries)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMetricsRollingBuckets()
  {
    return 0;
  }

  /**
   * @param $metricsRollingBuckets integer
   * @return $this
   */
  public function setMetricsRollingBuckets($metricsRollingBuckets)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMetricsRollingWindow()
  {
    return 0;
  }

  /**
   * @param $metricsRollingWindow integer
   * @return $this
   */
  public function setMetricsRollingWindow($metricsRollingWindow)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getNotificationAddress()
  {
    return "";
  }

  /**
   * @param $notificationAddress string
   * @return $this
   */
  public function setNotificationAddress($notificationAddress)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getNotificationPeriod()
  {
    return 0;
  }

  /**
   * @param $notificationPeriod integer
   * @return $this
   */
  public function setNotificationPeriod($notificationPeriod)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getResetTimeout()
  {
    return 0;
  }

  /**
   * @param $resetTimeout integer
   * @return $this
   */
  public function setResetTimeout($resetTimeout)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getTimeout()
  {
    return 0;
  }

  /**
   * @param $timeout integer
   * @return $this
   */
  public function setTimeout($timeout)
  {
    return $this;
  }
}