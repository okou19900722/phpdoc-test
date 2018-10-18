<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\dns;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Configuration options for Vert.x hostname resolver. The resolver uses the local <i>hosts</i> file and performs
 * DNS <i>A</i> and <i>AAAA</i> queries.
 */
class AddressResolverOptions
{

  public function __construct($addressResolverOptions = null)
  {

  }

  /**
   * @return integer
   */
  public function getCacheMaxTimeToLive()
  {
    return 0;
  }

  /**
   * @param $cacheMaxTimeToLive integer
   * @return $this
   */
  public function setCacheMaxTimeToLive($cacheMaxTimeToLive)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getCacheMinTimeToLive()
  {
    return 0;
  }

  /**
   * @param $cacheMinTimeToLive integer
   * @return $this
   */
  public function setCacheMinTimeToLive($cacheMinTimeToLive)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getCacheNegativeTimeToLive()
  {
    return 0;
  }

  /**
   * @param $cacheNegativeTimeToLive integer
   * @return $this
   */
  public function setCacheNegativeTimeToLive($cacheNegativeTimeToLive)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHostsPath()
  {
    return "";
  }

  /**
   * @param $hostsPath string
   * @return $this
   */
  public function setHostsPath($hostsPath)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getHostsValue()
  {
    return null;
  }

  /**
   * @param $hostsValue Buffer
   * @return $this
   */
  public function setHostsValue($hostsValue)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxQueries()
  {
    return 0;
  }

  /**
   * @param $maxQueries integer
   * @return $this
   */
  public function setMaxQueries($maxQueries)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getNdots()
  {
    return 0;
  }

  /**
   * @param $ndots integer
   * @return $this
   */
  public function setNdots($ndots)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isOptResourceEnabled()
  {
    return false;
  }

  /**
   * @param $optResourceEnabled bool
   * @return $this
   */
  public function setOptResourceEnabled($optResourceEnabled)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getQueryTimeout()
  {
    return 0;
  }

  /**
   * @param $queryTimeout integer
   * @return $this
   */
  public function setQueryTimeout($queryTimeout)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getRdFlag()
  {
    return false;
  }

  /**
   * @param $rdFlag bool
   * @return $this
   */
  public function setRdFlag($rdFlag)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isRotateServers()
  {
    return false;
  }

  /**
   * @param $rotateServers bool
   * @return $this
   */
  public function setRotateServers($rotateServers)
  {
    return $this;
  }
  /**
   * @param $searchDomains string
   * @return $this
   */
  public function addSearchDomain($searchDomains)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSearchDomains()
  {
    return "";
  }

  /**
   * @param $searchDomains string
   * @return $this
   */
  public function setSearchDomains($searchDomains)
  {
    return $this;
  }
  /**
   * @param $servers string
   * @return $this
   */
  public function addServer($servers)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getServers()
  {
    return "";
  }

  /**
   * @param $servers string
   * @return $this
   */
  public function setServers($servers)
  {
    return $this;
  }
}