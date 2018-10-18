<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\jwt;


class JWTOptions
{

  public function __construct($jwtOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAlgorithm()
  {
    return "";
  }

  /**
   * @param $algorithm string
   * @return $this
   */
  public function setAlgorithm($algorithm)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getAudience()
  {
    return "";
  }

  /**
   * @param $audience string
   * @return $this
   */
  public function setAudience($audience)
  {
    return $this;
  }
  /**
   * @param $audiences string
   * @return $this
   */
  public function addAudience($audiences)
  {
    return $this;
  }

  /**
   * @param $expiresInMinutes integer
   * @return $this
   */
  public function setExpiresInMinutes($expiresInMinutes)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getExpiresInSeconds()
  {
    return 0;
  }

  /**
   * @param $expiresInSeconds integer
   * @return $this
   */
  public function setExpiresInSeconds($expiresInSeconds)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getHeader()
  {
    return [];
  }

  /**
   * @param $header array
   * @return $this
   */
  public function setHeader($header)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isIgnoreExpiration()
  {
    return false;
  }

  /**
   * @param $ignoreExpiration bool
   * @return $this
   */
  public function setIgnoreExpiration($ignoreExpiration)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIssuer()
  {
    return "";
  }

  /**
   * @param $issuer string
   * @return $this
   */
  public function setIssuer($issuer)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLeeway()
  {
    return 0;
  }

  /**
   * @param $leeway integer
   * @return $this
   */
  public function setLeeway($leeway)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isNoTimestamp()
  {
    return false;
  }

  /**
   * @param $noTimestamp bool
   * @return $this
   */
  public function setNoTimestamp($noTimestamp)
  {
    return $this;
  }
  /**
   * @param $permissions string
   * @return $this
   */
  public function addPermission($permissions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPermissions()
  {
    return "";
  }

  /**
   * @param $permissions string
   * @return $this
   */
  public function setPermissions($permissions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSubject()
  {
    return "";
  }

  /**
   * @param $subject string
   * @return $this
   */
  public function setSubject($subject)
  {
    return $this;
  }
}