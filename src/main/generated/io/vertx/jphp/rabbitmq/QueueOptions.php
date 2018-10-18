<?php /** @noinspection ALL */
namespace io\vertx\jphp\rabbitmq;


/**
 * Aimed to specify queue consumer settings when calling @see \io\vertx\jphp\rabbitmq\RabbitMQClient::basicConsumer
 */
class QueueOptions
{

  public function __construct($queueOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isAutoAck()
  {
    return false;
  }

  /**
   * @param $autoAck bool
   * @return $this
   */
  public function setAutoAck($autoAck)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isKeepMostRecent()
  {
    return false;
  }

  /**
   * @param $keepMostRecent bool
   * @return $this
   */
  public function setKeepMostRecent($keepMostRecent)
  {
    return $this;
  }

  /**
   * @param $maxInternalQueueSize integer
   * @return $this
   */
  public function setMaxInternalQueueSize($maxInternalQueueSize)
  {
    return $this;
  }
}