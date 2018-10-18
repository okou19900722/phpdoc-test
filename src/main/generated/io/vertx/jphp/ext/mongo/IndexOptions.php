<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Options used to configure index.
 */
class IndexOptions
{

  public function __construct($indexOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isBackground()
  {
    return false;
  }

  /**
   * @return integer
   */
  public function getBits()
  {
    return 0;
  }

  /**
   * @return float
   */
  public function getBucketSize()
  {
    return 0;
  }

  /**
   * @return string
   */
  public function getDefaultLanguage()
  {
    return "";
  }

  /**
   * @return string
   */
  public function getLanguageOverride()
  {
    return "";
  }

  /**
   * @return float
   */
  public function getMax()
  {
    return 0;
  }

  /**
   * @return float
   */
  public function getMin()
  {
    return 0;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return "";
  }

  /**
   * @return array
   */
  public function getPartialFilterExpression()
  {
    return [];
  }

  /**
   * @return bool
   */
  public function isSparse()
  {
    return false;
  }

  /**
   * @return integer
   */
  public function getSphereVersion()
  {
    return 0;
  }

  /**
   * @return array
   */
  public function getStorageEngine()
  {
    return [];
  }

  /**
   * @return integer
   */
  public function getTextVersion()
  {
    return 0;
  }

  /**
   * @return bool
   */
  public function isUnique()
  {
    return false;
  }

  /**
   * @return integer
   */
  public function getVersion()
  {
    return 0;
  }

  /**
   * @return array
   */
  public function getWeights()
  {
    return [];
  }
}