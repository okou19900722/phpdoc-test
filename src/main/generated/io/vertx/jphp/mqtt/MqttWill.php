<?php /** @noinspection ALL */
namespace io\vertx\jphp\mqtt;


/**
 * Will information from the remote MQTT client
 */
class MqttWill
{

  public function __construct($mqttWill)
  {

  }

  /**
   * @return bool
   */
  public function isWillFlag()
  {
    return false;
  }

  /**
   * @return bool
   */
  public function isWillRetain()
  {
    return false;
  }
}