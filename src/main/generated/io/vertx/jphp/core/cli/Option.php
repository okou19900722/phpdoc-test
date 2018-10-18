<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\cli;


/**
 * Models command line options. Options are values passed to a command line interface using -x or --x. Supported
 * syntaxes depend on the parser.
 * <p/>
 * Short name is generally used with a single dash, while long name requires a double-dash.
 */
class Option
{

  public function __construct($option = null)
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
   * @param $choices string
   * @return $this
   */
  public function addChoice($choices)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getChoices()
  {
    return "";
  }

  /**
   * @param $choices string
   * @return $this
   */
  public function setChoices($choices)
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
  public function isFlag()
  {
    return false;
  }

  /**
   * @param $flag bool
   * @return $this
   */
  public function setFlag($flag)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isHelp()
  {
    return false;
  }

  /**
   * @param $help bool
   * @return $this
   */
  public function setHelp($help)
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
   * @return string
   */
  public function getLongName()
  {
    return "";
  }

  /**
   * @param $longName string
   * @return $this
   */
  public function setLongName($longName)
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
   * @return string
   */
  public function getName()
  {
    return "";
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

  /**
   * @return string
   */
  public function getShortName()
  {
    return "";
  }

  /**
   * @param $shortName string
   * @return $this
   */
  public function setShortName($shortName)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSingleValued()
  {
    return false;
  }

  /**
   * @param $singleValued bool
   * @return $this
   */
  public function setSingleValued($singleValued)
  {
    return $this;
  }
}