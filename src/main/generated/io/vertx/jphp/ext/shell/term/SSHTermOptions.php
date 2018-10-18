<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\shell\term;

use io\vertx\jphp\core\net\JksOptions;
use io\vertx\jphp\core\net\PemKeyCertOptions;
use io\vertx\jphp\core\net\PfxOptions;
use io\vertx\jphp\ext\auth\AuthOptions;

/**
 * The SSH term configuration options.
 */
class SSHTermOptions
{

  public function __construct($sshTermOptions = null)
  {

  }

  /**
   * @return AuthOptions|mixed
   */
  public function getAuthOptions()
  {
    return null;
  }

  /**
   * @return string
   */
  public function getDefaultCharset()
  {
    return "";
  }

  /**
   * @param $defaultCharset string
   * @return $this
   */
  public function setDefaultCharset($defaultCharset)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHost()
  {
    return "";
  }

  /**
   * @param $host string
   * @return $this
   */
  public function setHost($host)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIntputrc()
  {
    return "";
  }

  /**
   * @param $intputrc string
   * @return $this
   */
  public function setIntputrc($intputrc)
  {
    return $this;
  }

  /**
   * @param $keyPairOptions JksOptions|mixed
   * @return $this
   */
  public function setKeyPairOptions($keyPairOptions)
  {
    return $this;
  }

  /**
   * @param $pemKeyPairOptions PemKeyCertOptions|mixed
   * @return $this
   */
  public function setPemKeyPairOptions($pemKeyPairOptions)
  {
    return $this;
  }

  /**
   * @param $pfxKeyPairOptions PfxOptions|mixed
   * @return $this
   */
  public function setPfxKeyPairOptions($pfxKeyPairOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPort()
  {
    return 0;
  }

  /**
   * @param $port integer
   * @return $this
   */
  public function setPort($port)
  {
    return $this;
  }
}