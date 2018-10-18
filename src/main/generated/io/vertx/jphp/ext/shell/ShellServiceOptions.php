<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\shell;

use io\vertx\jphp\ext\shell\term\HttpTermOptions;
use io\vertx\jphp\ext\shell\term\SSHTermOptions;
use io\vertx\jphp\ext\shell\term\TelnetTermOptions;

/**
 * The configurations options for the shell service, the shell connectors can be configured
 * with ,  and .
 */
class ShellServiceOptions extends ShellServerOptions
{

  public function __construct($shellServiceOptions = null)
  {

  }

  /**
   * @return HttpTermOptions|mixed
   */
  public function getHttpOptions()
  {
    return null;
  }

  /**
   * @param $httpOptions HttpTermOptions|mixed
   * @return $this
   */
  public function setHttpOptions($httpOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReaperInterval()
  {
    return 0;
  }

  /**
   * @param $reaperInterval integer
   * @return $this
   */
  public function setReaperInterval($reaperInterval)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSessionTimeout()
  {
    return 0;
  }

  /**
   * @param $sessionTimeout integer
   * @return $this
   */
  public function setSessionTimeout($sessionTimeout)
  {
    return $this;
  }

  /**
   * @return SSHTermOptions|mixed
   */
  public function getSSHOptions()
  {
    return null;
  }

  /**
   * @param $sshOptions SSHTermOptions|mixed
   * @return $this
   */
  public function setSSHOptions($sshOptions)
  {
    return $this;
  }

  /**
   * @return TelnetTermOptions|mixed
   */
  public function getTelnetOptions()
  {
    return null;
  }

  /**
   * @param $telnetOptions TelnetTermOptions|mixed
   * @return $this
   */
  public function setTelnetOptions($telnetOptions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWelcomeMessage()
  {
    return "";
  }

  /**
   * @param $welcomeMessage string
   * @return $this
   */
  public function setWelcomeMessage($welcomeMessage)
  {
    return $this;
  }
}