<?php /** @noinspection ALL */
namespace io\vertx\jphp\kafka\client\common;


/**
 * Information about a specific Kafka topic partition
 */
class PartitionInfo
{

  public function __construct($partitionInfo = null)
  {

  }

  /**
   * @return Node|mixed
   */
  public function getInSyncReplicas()
  {
    return null;
  }

  /**
   * @param $inSyncReplicas Node|mixed
   * @return $this
   */
  public function setInSyncReplicas($inSyncReplicas)
  {
    return $this;
  }

  /**
   * @return Node|mixed
   */
  public function getLeader()
  {
    return null;
  }

  /**
   * @param $leader Node|mixed
   * @return $this
   */
  public function setLeader($leader)
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
   * @return Node|mixed
   */
  public function getReplicas()
  {
    return null;
  }

  /**
   * @param $replicas Node|mixed
   * @return $this
   */
  public function setReplicas($replicas)
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