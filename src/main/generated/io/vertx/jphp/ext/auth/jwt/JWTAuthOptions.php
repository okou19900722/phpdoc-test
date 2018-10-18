<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth\jwt;

use io\vertx\jphp\ext\auth\KeyStoreOptions;
use io\vertx\jphp\ext\auth\PubSecKeyOptions;
use io\vertx\jphp\ext\auth\SecretOptions;
use io\vertx\jphp\ext\jwt\JWTOptions;

/**
 * Options describing how an JWT Auth should behave.
 */
class JWTAuthOptions
{

  public function __construct($jwtAuthOptions = null)
  {

  }
  /**
   * @param $jwks array
   * @return $this
   */
  public function addJwk($jwks)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getJwks()
  {
    return [];
  }

  /**
   * @param $jwks array
   * @return $this
   */
  public function setJwks($jwks)
  {
    return $this;
  }

  /**
   * @return JWTOptions|mixed
   */
  public function getJWTOptions()
  {
    return null;
  }

  /**
   * @param $jwtOptions JWTOptions|mixed
   * @return $this
   */
  public function setJWTOptions($jwtOptions)
  {
    return $this;
  }

  /**
   * @return KeyStoreOptions|mixed
   */
  public function getKeyStore()
  {
    return null;
  }

  /**
   * @param $keyStore KeyStoreOptions|mixed
   * @return $this
   */
  public function setKeyStore($keyStore)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPermissionsClaimKey()
  {
    return "";
  }

  /**
   * @param $permissionsClaimKey string
   * @return $this
   */
  public function setPermissionsClaimKey($permissionsClaimKey)
  {
    return $this;
  }
  /**
   * @param $pubSecKeys PubSecKeyOptions|mixed
   * @return $this
   */
  public function addPubSecKey($pubSecKeys)
  {
    return $this;
  }

  /**
   * @return PubSecKeyOptions|mixed
   */
  public function getPubSecKeys()
  {
    return null;
  }

  /**
   * @param $pubSecKeys PubSecKeyOptions|mixed
   * @return $this
   */
  public function setPubSecKeys($pubSecKeys)
  {
    return $this;
  }
  /**
   * @param $secrets SecretOptions|mixed
   * @return $this
   */
  public function addSecret($secrets)
  {
    return $this;
  }

  /**
   * @return SecretOptions|mixed
   */
  public function getSecrets()
  {
    return null;
  }

  /**
   * @param $secrets SecretOptions|mixed
   * @return $this
   */
  public function setSecrets($secrets)
  {
    return $this;
  }
}