<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\producer;


/**
 * Metadata related to a Kafka record
 */
class RecordMetadata
{

  public function __construct($recordMetadata = null)
  {

  }

  /**
   * @param $checksum integer
   * @return $this
   */
  public function setChecksum($checksum)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getOffset()
  {
    return 0;
  }

  /**
   * @param $offset integer
   * @return $this
   */
  public function setOffset($offset)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPartition()
  {
    return 0;
  }

  /**
   * @param $partition integer
   * @return $this
   */
  public function setPartition($partition)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getTimestamp()
  {
    return 0;
  }

  /**
   * @param $timestamp integer
   * @return $this
   */
  public function setTimestamp($timestamp)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTopic()
  {
    return "";
  }

  /**
   * @param $topic string
   * @return $this
   */
  public function setTopic($topic)
  {
    return $this;
  }
}