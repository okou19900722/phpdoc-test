<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth\mongo;


/**
 * Options configuring Mongo authentication.
 */
class MongoAuthOptions
{

  public function __construct($mongoAuthOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getCollectionName()
  {
    return "";
  }

  /**
   * @param $collectionName string
   * @return $this
   */
  public function setCollectionName($collectionName)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getConfig()
  {
    return [];
  }

  /**
   * @param $config array
   * @return $this
   */
  public function setConfig($config)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDatasourceName()
  {
    return "";
  }

  /**
   * @param $datasourceName string
   * @return $this
   */
  public function setDatasourceName($datasourceName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPasswordField()
  {
    return "";
  }

  /**
   * @param $passwordField string
   * @return $this
   */
  public function setPasswordField($passwordField)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPermissionField()
  {
    return "";
  }

  /**
   * @param $permissionField string
   * @return $this
   */
  public function setPermissionField($permissionField)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRoleField()
  {
    return "";
  }

  /**
   * @param $roleField string
   * @return $this
   */
  public function setRoleField($roleField)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSaltField()
  {
    return "";
  }

  /**
   * @param $saltField string
   * @return $this
   */
  public function setSaltField($saltField)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSaltStyle()
  {
    return null;
  }

  /**
   * @param $saltStyle string
   * @return $this
   */
  public function setSaltStyle($saltStyle)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getShared()
  {
    return false;
  }

  /**
   * @param $shared bool
   * @return $this
   */
  public function setShared($shared)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUsernameCredentialField()
  {
    return "";
  }

  /**
   * @param $usernameCredentialField string
   * @return $this
   */
  public function setUsernameCredentialField($usernameCredentialField)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getUsernameField()
  {
    return "";
  }

  /**
   * @param $usernameField string
   * @return $this
   */
  public function setUsernameField($usernameField)
  {
    return $this;
  }
}