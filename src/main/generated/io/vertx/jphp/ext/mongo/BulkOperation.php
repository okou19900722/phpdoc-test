<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Contains all data needed for one operation of a bulk write operation.
 */
class BulkOperation
{

  public function __construct($bulkOperation)
  {

  }

  /**
   * @return array
   */
  public function getDocument()
  {
    return [];
  }

  /**
   * @param $document array
   * @return $this
   */
  public function setDocument($document)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getFilter()
  {
    return [];
  }

  /**
   * @param $filter array
   * @return $this
   */
  public function setFilter($filter)
  {
    return $this;
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
}