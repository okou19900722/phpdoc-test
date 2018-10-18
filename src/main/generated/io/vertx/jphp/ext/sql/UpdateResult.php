<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\sql;


/**
 * Represents the result of an update/insert/delete operation on the database.
 * <p>
 * The number of rows updated is available with @see \io\vertx\jphp\ext\sql\UpdateResult and any generated
 * keys are available with @see \io\vertx\jphp\ext\sql\UpdateResult.
 */
class UpdateResult
{

  public function __construct($updateResult = null)
  {

  }

  /**
   * @return array
   */
  public function getKeys()
  {
    return [];
  }

  /**
   * @param $keys array
   * @return $this
   */
  public function setKeys($keys)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getUpdated()
  {
    return 0;
  }

  /**
   * @param $updated integer
   * @return $this
   */
  public function setUpdated($updated)
  {
    return $this;
  }
}