<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\auth\shiro;


/**
 * Shiro auth configuration options, see Vert.x Auth Shiro component and/or Apache Shiro project.
 */
class ShiroAuthOptions
{

  public function __construct($shiroAuthOptions = null)
  {

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
  public function getType()
  {
    return null;
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