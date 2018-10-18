<?php /** @noinspection ALL */
namespace io\vertx\jphp\micrometer;

use io\vertx\jphp\core\metrics\MetricsOptions;

/**
 * Vert.x micrometer configuration.<br/>
 * It is required to set either <code>influxDbOptions</code>, <code>prometheusOptions</code> or <code>jmxMetricsOptions</code>
 * (or, programmatically, <code>micrometerRegistry</code>)
 * in order to actually report metrics.
 */
class MicrometerMetricsOptions extends MetricsOptions
{

  public function __construct($micrometerMetricsOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getDisabledMetricsCategories()
  {
    return null;
  }

  /**
   * @param $disabledMetricsCategories string
   * @return $this
   */
  public function setDisabledMetricsCategories($disabledMetricsCategories)
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
   * @return VertxInfluxDbOptions|mixed
   */
  public function getInfluxDbOptions()
  {
    return null;
  }

  /**
   * @param $influxDbOptions VertxInfluxDbOptions|mixed
   * @return $this
   */
  public function setInfluxDbOptions($influxDbOptions)
  {
    return $this;
  }

  /**
   * @return VertxJmxMetricsOptions|mixed
   */
  public function getJmxMetricsOptions()
  {
    return null;
  }

  /**
   * @param $jmxMetricsOptions VertxJmxMetricsOptions|mixed
   * @return $this
   */
  public function setJmxMetricsOptions($jmxMetricsOptions)
  {
    return $this;
  }

  /**
   * @return Match|mixed
   */
  public function getLabelMatches()
  {
    return null;
  }

  /**
   * @param $labelMatches Match|mixed
   * @return $this
   */
  public function setLabelMatches($labelMatches)
  {
    return $this;
  }
  /**
   * @param $labelMatchs Match|mixed
   * @return $this
   */
  public function addLabelMatch($labelMatchs)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getLabels()
  {
    return null;
  }

  /**
   * @param $labels string
   * @return $this
   */
  public function setLabels($labels)
  {
    return $this;
  }

  /**
   * @return VertxPrometheusOptions|mixed
   */
  public function getPrometheusOptions()
  {
    return null;
  }

  /**
   * @param $prometheusOptions VertxPrometheusOptions|mixed
   * @return $this
   */
  public function setPrometheusOptions($prometheusOptions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRegistryName()
  {
    return "";
  }

  /**
   * @param $registryName string
   * @return $this
   */
  public function setRegistryName($registryName)
  {
    return $this;
  }
}