<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Options used to execute prepared query
 */
class PreparedQueryExecuteOptions
{

  public function __construct($preparedQueryExecuteOptions = null)
  {

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
   * @return string
   */
  public function getNear()
  {
    return "";
  }

  /**
   * @param $near string
   * @return $this
   */
  public function setNear($near)
  {
    return $this;
  }
}