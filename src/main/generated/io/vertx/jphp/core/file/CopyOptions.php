<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\file;


/**
 * Describes the copy (and move) options.
 */
class CopyOptions
{

  public function __construct($copyOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isAtomicMove()
  {
    return false;
  }

  /**
   * @param $atomicMove bool
   * @return $this
   */
  public function setAtomicMove($atomicMove)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isCopyAttributes()
  {
    return false;
  }

  /**
   * @param $copyAttributes bool
   * @return $this
   */
  public function setCopyAttributes($copyAttributes)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isNofollowLinks()
  {
    return false;
  }

  /**
   * @param $nofollowLinks bool
   * @return $this
   */
  public function setNofollowLinks($nofollowLinks)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReplaceExisting()
  {
    return false;
  }

  /**
   * @param $replaceExisting bool
   * @return $this
   */
  public function setReplaceExisting($replaceExisting)
  {
    return $this;
  }
}