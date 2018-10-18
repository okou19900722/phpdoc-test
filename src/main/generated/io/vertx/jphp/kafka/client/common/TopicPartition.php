<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\common;


/**
 * Represent information related to a partition for a topic
 */
class TopicPartition
{

  public function __construct($topicPartition = null)
  {

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