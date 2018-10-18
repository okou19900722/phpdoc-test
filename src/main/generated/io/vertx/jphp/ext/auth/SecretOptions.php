<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth;


/**
 * Options describing a secret.
 */
class SecretOptions
{

  public function __construct($secretOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getSecret()
  {
    return "";
  }

  /**
   * @param $secret string
   * @return $this
   */
  public function setSecret($secret)
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