<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Options used to configure find operations.
 */
class FindOptions
{

  public function __construct($findOptions = null)
  {

  }

  /**
   * @return integer
   */
  public function getBatchSize()
  {
    return 0;
  }

  /**
   * @param $batchSize integer
   * @return $this
   */
  public function setBatchSize($batchSize)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getFields()
  {
    return [];
  }

  /**
   * @param $fields array
   * @return $this
   */
  public function setFields($fields)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLimit()
  {
    return 0;
  }

  /**
   * @param $limit integer
   * @return $this
   */
  public function setLimit($limit)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSkip()
  {
    return 0;
  }

  /**
   * @param $skip integer
   * @return $this
   */
  public function setSkip($skip)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getSort()
  {
    return [];
  }

  /**
   * @param $sort array
   * @return $this
   */
  public function setSort($sort)
  {
    return $this;
  }
}