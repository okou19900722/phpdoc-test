<?php /** @noinspection ALL */
namespace io\vertx\jphp\config\vault\client;


/**
 * The token request structure.
 */
class TokenRequest
{

  public function __construct($tokenRequest = null)
  {

  }

  /**
   * @return string
   */
  public function getDisplayName()
  {
    return "";
  }

  /**
   * @param $displayName string
   * @return $this
   */
  public function setDisplayName($displayName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return "";
  }

  /**
   * @param $id string
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMeta()
  {
    return "";
  }

  /**
   * @param $meta string
   * @return $this
   */
  public function setMeta($meta)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isNoDefaultPolicy()
  {
    return false;
  }

  /**
   * @param $noDefaultPolicy bool
   * @return $this
   */
  public function setNoDefaultPolicy($noDefaultPolicy)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isNoParent()
  {
    return false;
  }

  /**
   * @param $noParent bool
   * @return $this
   */
  public function setNoParent($noParent)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getNumUses()
  {
    return 0;
  }

  /**
   * @param $numUses integer
   * @return $this
   */
  public function setNumUses($numUses)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPolicies()
  {
    return "";
  }

  /**
   * @param $policies string
   * @return $this
   */
  public function setPolicies($policies)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRole()
  {
    return "";
  }

  /**
   * @param $role string
   * @return $this
   */
  public function setRole($role)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTtl()
  {
    return "";
  }

  /**
   * @param $ttl string
   * @return $this
   */
  public function setTTL($ttl)
  {
    return $this;
  }
}