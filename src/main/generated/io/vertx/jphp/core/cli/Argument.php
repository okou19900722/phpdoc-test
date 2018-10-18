<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\cli;


/**
 * Defines a command line argument. Unlike options, argument don't have names and are identified using an index. The
 * first index is 0 (because we are in the computer world).
 */
class Argument
{

  public function __construct($argument = null)
  {

  }

  /**
   * @return string
   */
  public function getArgName()
  {
    return "";
  }

  /**
   * @param $argName string
   * @return $this
   */
  public function setArgName($argName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDefaultValue()
  {
    return "";
  }

  /**
   * @param $defaultValue string
   * @return $this
   */
  public function setDefaultValue($defaultValue)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return "";
  }

  /**
   * @param $description string
   * @return $this
   */
  public function setDescription($description)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isHidden()
  {
    return false;
  }

  /**
   * @param $hidden bool
   * @return $this
   */
  public function setHidden($hidden)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getIndex()
  {
    return 0;
  }

  /**
   * @param $index integer
   * @return $this
   */
  public function setIndex($index)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isMultiValued()
  {
    return false;
  }

  /**
   * @param $multiValued bool
   * @return $this
   */
  public function setMultiValued($multiValued)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isRequired()
  {
    return false;
  }

  /**
   * @param $required bool
   * @return $this
   */
  public function setRequired($required)
  {
    return $this;
  }
}