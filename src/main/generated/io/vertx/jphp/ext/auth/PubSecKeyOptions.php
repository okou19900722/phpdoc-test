<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth;


/**
 * Options describing how a Cryptographic Key.
 */
class PubSecKeyOptions
{

  public function __construct($pubSecKeyOptions = null)
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
   * @return bool
   */
  public function isCertificate()
  {
    return false;
  }

  /**
   * @param $certificate bool
   * @return $this
   */
  public function setCertificate($certificate)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPublicKey()
  {
    return "";
  }

  /**
   * @param $publicKey string
   * @return $this
   */
  public function setPublicKey($publicKey)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSecretKey()
  {
    return "";
  }

  /**
   * @param $secretKey string
   * @return $this
   */
  public function setSecretKey($secretKey)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSymmetric()
  {
    return false;
  }

  /**
   * @param $symmetric bool
   * @return $this
   */
  public function setSymmetric($symmetric)
  {
    return $this;
  }
}