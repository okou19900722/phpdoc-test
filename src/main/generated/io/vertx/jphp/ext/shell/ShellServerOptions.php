<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\shell;


/**
 * The configurations options for the shell server.
 */
class ShellServerOptions
{

  public function __construct($shellServerOptions = null)
  {

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