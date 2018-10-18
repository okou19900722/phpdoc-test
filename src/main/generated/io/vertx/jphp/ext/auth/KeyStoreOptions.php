<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth;


/**
 * Options describing how an JWT KeyStore should behave.
 */
class KeyStoreOptions
{

  public function __construct($keyStoreOptions = null)
  {

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
   * @return string
   */
  public function getPath()
  {
    return "";
  }

  /**
   * @param $path string
   * @return $this
   */
  public function setPath($path)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return "";
  }

  /**
   * @param $type string
   * @return $this
   */
  public function setType($type)
  {
    return $this;
  }
}