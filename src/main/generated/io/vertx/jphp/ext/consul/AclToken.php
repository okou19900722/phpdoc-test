<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds properties of Acl token
 */
class AclToken
{

  public function __construct($aclToken = null)
  {

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
  public function getName()
  {
    return "";
  }

  /**
   * @param $name string
   * @return $this
   */
  public function setName($name)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRules()
  {
    return "";
  }

  /**
   * @param $rules string
   * @return $this
   */
  public function setRules($rules)
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