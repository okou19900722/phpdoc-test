<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth\htpasswd;


/**
 * Options configuring htpasswd authentication.
 */
class HtpasswdAuthOptions
{

  public function __construct($htpasswdAuthOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getHtpasswdFile()
  {
    return "";
  }

  /**
   * @param $htpasswdFile string
   * @return $this
   */
  public function setHtpasswdFile($htpasswdFile)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isPlainTextEnabled()
  {
    return false;
  }

  /**
   * @param $plainTextEnabled bool
   * @return $this
   */
  public function setPlainTextEnabled($plainTextEnabled)
  {
    return $this;
  }
}