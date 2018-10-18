<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Options for configuring updates.
 */
class UpdateOptions
{

  public function __construct($updateOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isMulti()
  {
    return false;
  }

  /**
   * @param $multi bool
   * @return $this
   */
  public function setMulti($multi)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReturningNewDocument()
  {
    return false;
  }

  /**
   * @param $returningNewDocument bool
   * @return $this
   */
  public function setReturningNewDocument($returningNewDocument)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isUpsert()
  {
    return false;
  }

  /**
   * @param $upsert bool
   * @return $this
   */
  public function setUpsert($upsert)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWriteOption()
  {
    return null;
  }

  /**
   * @param $writeOption string
   * @return $this
   */
  public function setWriteOption($writeOption)
  {
    return $this;
  }
}