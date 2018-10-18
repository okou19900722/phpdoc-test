<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mongo;


/**
 * Result propagated from mongodb driver delete result.
 */
class MongoClientDeleteResult
{

  public function __construct($mongoClientDeleteResult = null)
  {

  }

  /**
   * @return integer
   */
  public function getRemovedCount()
  {
    return 0;
  }
}