<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to put key/value pair to Consul.
 */
class KeyValueOptions
{

  public function __construct($keyValueOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAcquireSession()
  {
    return "";
  }

  /**
   * @param $acquireSession string
   * @return $this
   */
  public function setAcquireSession($acquireSession)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getCasIndex()
  {
    return 0;
  }

  /**
   * @param $casIndex integer
   * @return $this
   */
  public function setCasIndex($casIndex)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getFlags()
  {
    return 0;
  }

  /**
   * @param $flags integer
   * @return $this
   */
  public function setFlags($flags)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getReleaseSession()
  {
    return "";
  }

  /**
   * @param $releaseSession string
   * @return $this
   */
  public function setReleaseSession($releaseSession)
  {
    return $this;
  }
}