<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\sql;


/**
 * Represents the results of a SQL query.
 * <p>
 * It contains a list for the column names of the results, and a list of <code>JsonArray</code> - one for each row of the
 * results.
 */
class ResultSet
{

  public function __construct($resultSet = null)
  {

  }

  /**
   * @return string
   */
  public function getColumnNames()
  {
    return "";
  }

  /**
   * @param $columnNames string
   * @return $this
   */
  public function setColumnNames($columnNames)
  {
    return $this;
  }

  /**
   * @return ResultSet|mixed
   */
  public function getNext()
  {
    return null;
  }

  /**
   * @param $next ResultSet|mixed
   * @return $this
   */
  public function setNext($next)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getNumColumns()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getNumRows()
  {
    return 0;
  }

  /**
   * @return array
   */
  public function getOutput()
  {
    return [];
  }

  /**
   * @param $output array
   * @return $this
   */
  public function setOutput($output)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getResults()
  {
    return [];
  }

  /**
   * @param $results array
   * @return $this
   */
  public function setResults($results)
  {
    return $this;
  }

  /**
   * @return array
   */
  public function getRows()
  {
    return [];
  }
}