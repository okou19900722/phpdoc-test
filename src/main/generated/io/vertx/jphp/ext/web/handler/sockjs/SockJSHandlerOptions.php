<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\web\handler\sockjs;


/**
 * Options for configuring a SockJS handler
 */
class SockJSHandlerOptions
{

  public function __construct($sockJSHandlerOptions = null)
  {

  }
  /**
   * @param $disabledTransports string
   * @return $this
   */
  public function addDisabledTransport($disabledTransports)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDisabledTransports()
  {
    return "";
  }

  /**
   * @return integer
   */
  public function getHeartbeatInterval()
  {
    return 0;
  }

  /**
   * @param $heartbeatInterval integer
   * @return $this
   */
  public function setHeartbeatInterval($heartbeatInterval)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isInsertJSESSIONID()
  {
    return false;
  }

  /**
   * @param $insertJSESSIONID bool
   * @return $this
   */
  public function setInsertJSESSIONID($insertJSESSIONID)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getLibraryURL()
  {
    return "";
  }

  /**
   * @param $libraryURL string
   * @return $this
   */
  public function setLibraryURL($libraryURL)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxBytesStreaming()
  {
    return 0;
  }

  /**
   * @param $maxBytesStreaming integer
   * @return $this
   */
  public function setMaxBytesStreaming($maxBytesStreaming)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSessionTimeout()
  {
    return 0;
  }

  /**
   * @param $sessionTimeout integer
   * @return $this
   */
  public function setSessionTimeout($sessionTimeout)
  {
    return $this;
  }
}