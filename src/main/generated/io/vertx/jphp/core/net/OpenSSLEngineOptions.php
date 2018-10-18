<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;


/**
 * Configures a @see \io\vertx\jphp\core\net\TCPSSLOptions to use OpenSsl.
 */
class OpenSSLEngineOptions
{

  public function __construct($openSSLEngineOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isSessionCacheEnabled()
  {
    return false;
  }

  /**
   * @param $sessionCacheEnabled bool
   * @return $this
   */
  public function setSessionCacheEnabled($sessionCacheEnabled)
  {
    return $this;
  }
}