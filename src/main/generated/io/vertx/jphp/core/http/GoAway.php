<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\http;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * A  frame.
 */
class GoAway
{

  public function __construct($goAway = null)
  {

  }

  /**
   * @return Buffer
   */
  public function getDebugData()
  {
    return null;
  }

  /**
   * @param $debugData Buffer
   * @return $this
   */
  public function setDebugData($debugData)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getErrorCode()
  {
    return 0;
  }

  /**
   * @param $errorCode integer
   * @return $this
   */
  public function setErrorCode($errorCode)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getLastStreamId()
  {
    return 0;
  }

  /**
   * @param $lastStreamId integer
   * @return $this
   */
  public function setLastStreamId($lastStreamId)
  {
    return $this;
  }
}