<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Result propagated from mongodb driver bulk write result.
 */
class MongoClientBulkWriteResult
{

  public function __construct($mongoClientBulkWriteResult = null)
  {

  }

  /**
   * @return integer
   */
  public function getDeletedCount()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getInsertedCount()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getMatchedCount()
  {
    return 0;
  }

  /**
   * @return integer
   */
  public function getModifiedCount()
  {
    return 0;
  }

  /**
   * @return array
   */
  public function getUpserts()
  {
    return [];
  }
}