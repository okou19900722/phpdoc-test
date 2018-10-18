<?php /** @noinspection ALL */
namespace io\vertx\jphp\micrometer;


/**
 * Vert.x InfluxDb micrometer configuration.
 */
class VertxInfluxDbOptions
{

  public function __construct($vertxInfluxDbOptions = null)
  {

  }

  /**
   * @return integer
   */
  public function getBatchSize()
  {
    return 0;
  }

  /**
   * @param $batchSize integer
   * @return $this
   */
  public function setBatchSize($batchSize)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isCompressed()
  {
    return false;
  }

  /**
   * @param $compressed bool
   * @return $this
   */
  public function setCompressed($compressed)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getConnectTimeout()
  {
    return 0;
  }

  /**
   * @param $connectTimeout integer
   * @return $this
   */
  public function setConnectTimeout($connectTimeout)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDb()
  {
    return "";
  }

  /**
   * @param $db string
   * @return $this
   */
  public function setDb($db)
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
  public function getNumThreads()
  {
    return 0;
  }

  /**
   * @param $numThreads integer
   * @return $this
   */
  public function setNumThreads($numThreads)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPassword()
  {
    return "";
  }

  /**
   * @param $password string
   * @return $this
   */
  public function setPassword($password)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReadTimeout()
  {
    return 0;
  }

  /**
   * @param $readTimeout integer
   * @return $this
   */
  public function setReadTimeout($readTimeout)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRetentionPolicy()
  {
    return "";
  }

  /**
   * @param $retentionPolicy string
   * @return $this
   */
  public function setRetentionPolicy($retentionPolicy)
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

  /**
   * @return string
   */
  public function getUri()
  {
    return "";
  }

  /**
   * @param $uri string
   * @return $this
   */
  public function setUri($uri)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUserName()
  {
    return "";
  }

  /**
   * @param $userName string
   * @return $this
   */
  public function setUserName($userName)
  {
    return $this;
  }
}