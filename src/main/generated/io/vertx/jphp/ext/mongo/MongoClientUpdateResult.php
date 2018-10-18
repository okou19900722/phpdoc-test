<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Result propagated from mongodb driver update result.
 */
class MongoClientUpdateResult
{

  public function __construct($mongoClientUpdateResult = null)
  {

  }

  /**
   * @return integer
   */
  public function getDocMatched()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getDocModified()
  {
    return 0;
  }

  /**
   * @return array
   */
  public function getDocUpsertedId()
  {
    return [];
  }
}