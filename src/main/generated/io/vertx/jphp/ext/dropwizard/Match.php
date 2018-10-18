<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\dropwizard;


/**
 * A match for a value.
 */
class Match
{

  public function __construct($match = null)
  {

  }

  /**
   * @return string
   */
  public function getAlias()
  {
    return "";
  }

  /**
   * @param $alias string
   * @return $this
   */
  public function setAlias($alias)
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

  /**
   * @return string
   */
  public function getValue()
  {
    return "";
  }

  /**
   * @param $value string
   * @return $this
   */
  public function setValue($value)
  {
    return $this;
  }
}