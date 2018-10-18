<?php /** @noinspection ALL */
namespace io\vertx\jphp\micrometer;


/**
 * Options for Prometheus metrics backend.
 */
class VertxJmxMetricsOptions
{

  public function __construct($vertxJmxMetricsOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getDomain()
  {
    return "";
  }

  /**
   * @param $domain string
   * @return $this
   */
  public function setDomain($domain)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isEnabled()
  {
    return false;
  }

  /**
   * @param $enabled bool
   * @return $this
   */
  public function setEnabled($enabled)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getStep()
  {
    return 0;
  }

  /**
   * @param $step integer
   * @return $this
   */
  public function setStep($step)
  {
    return $this;
  }
}