<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mail;


/**
 * represents the configuration of a mail service with mail server hostname,
 * port, security options, login options and login/password
 */
class MailConfig
{

  public function __construct($mailConfig = null)
  {

  }

  /**
   * @return bool
   */
  public function isAllowRcptErrors()
  {
    return false;
  }

  /**
   * @param $allowRcptErrors bool
   * @return $this
   */
  public function setAllowRcptErrors($allowRcptErrors)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getAuthMethods()
  {
    return "";
  }

  /**
   * @param $authMethods string
   * @return $this
   */
  public function setAuthMethods($authMethods)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isDisableEsmtp()
  {
    return false;
  }

  /**
   * @param $disableEsmtp bool
   * @return $this
   */
  public function setDisableEsmtp($disableEsmtp)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHostname()
  {
    return "";
  }

  /**
   * @param $hostname string
   * @return $this
   */
  public function setHostname($hostname)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isKeepAlive()
  {
    return false;
  }

  /**
   * @param $keepAlive bool
   * @return $this
   */
  public function setKeepAlive($keepAlive)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getKeyStore()
  {
    return "";
  }

  /**
   * @param $keyStore string
   * @return $this
   */
  public function setKeyStore($keyStore)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getKeyStorePassword()
  {
    return "";
  }

  /**
   * @param $keyStorePassword string
   * @return $this
   */
  public function setKeyStorePassword($keyStorePassword)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getLogin()
  {
    return null;
  }

  /**
   * @param $login string
   * @return $this
   */
  public function setLogin($login)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxPoolSize()
  {
    return 0;
  }

  /**
   * @param $maxPoolSize integer
   * @return $this
   */
  public function setMaxPoolSize($maxPoolSize)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getOwnHostname()
  {
    return "";
  }

  /**
   * @param $ownHostname string
   * @return $this
   */
  public function setOwnHostname($ownHostname)
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

  /**
   * @return bool
   */
  public function isSsl()
  {
    return false;
  }

  /**
   * @param $ssl bool
   * @return $this
   */
  public function setSsl($ssl)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getStarttls()
  {
    return null;
  }

  /**
   * @param $starttls string
   * @return $this
   */
  public function setStarttls($starttls)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTrustAll()
  {
    return false;
  }

  /**
   * @param $trustAll bool
   * @return $this
   */
  public function setTrustAll($trustAll)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUsername()
  {
    return "";
  }

  /**
   * @param $username string
   * @return $this
   */
  public function setUsername($username)
  {
    return $this;
  }
}