<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth\jdbc;


/**
 * Options configuring JDBC authentication.
 */
class JDBCAuthOptions
{

  public function __construct($jdbcAuthOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAuthenticationQuery()
  {
    return "";
  }

  /**
   * @param $authenticationQuery string
   * @return $this
   */
  public function setAuthenticationQuery($authenticationQuery)
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
  public function getPermissionsQuery()
  {
    return "";
  }

  /**
   * @param $permissionsQuery string
   * @return $this
   */
  public function setPermissionsQuery($permissionsQuery)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRolesPrefix()
  {
    return "";
  }

  /**
   * @param $rolesPrefix string
   * @return $this
   */
  public function setRolesPrefix($rolesPrefix)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRolesQuery()
  {
    return "";
  }

  /**
   * @param $rolesQuery string
   * @return $this
   */
  public function setRolesQuery($rolesQuery)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isShared()
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
}