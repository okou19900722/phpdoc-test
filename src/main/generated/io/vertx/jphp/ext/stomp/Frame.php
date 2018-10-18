<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\stomp;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Represents a STOMP frame. STOMP frames are structured as follows. It starts by a <code>command</code>, followed by a
 * set of headers. Then the frame may have a body and is finished by a <code>0</code> byte. This class represents this
 * structure and provide access to the different parts.
 * <p/>
 * This class is <strong>NOT</strong> thread-safe.
 */
class Frame
{

  public function __construct($frame = null)
  {

  }

  /**
   * @return string
   */
  public function getAck()
  {
    return "";
  }

  /**
   * @return Buffer
   */
  public function getBody()
  {
    return null;
  }

  /**
   * @param $body Buffer
   * @return $this
   */
  public function setBody($body)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getBodyAsString()
  {
    return "";
  }

  /**
   * @return string
   */
  public function getCommand()
  {
    return null;
  }

  /**
   * @param $command string
   * @return $this
   */
  public function setCommand($command)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDestination()
  {
    return "";
  }

  /**
   * @param $destination string
   * @return $this
   */
  public function setDestination($destination)
  {
    return $this;
  }
  /**
   * @param $key String
   * @param $value String
   * @return $this
   */
  public function addHeader($key, $value)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHeaders()
  {
    return "";
  }

  /**
   * @param $headers string
   * @return $this
   */
  public function setHeaders($headers)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return "";
  }

  /**
   * @param $id string
   * @return $this
   */
  public function setId($id)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getReceipt()
  {
    return "";
  }

  /**
   * @return string
   */
  public function getTransaction()
  {
    return "";
  }

  /**
   * @param $transaction string
   * @return $this
   */
  public function setTransaction($transaction)
  {
    return $this;
  }
}