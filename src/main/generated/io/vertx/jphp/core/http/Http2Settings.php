<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\http;


/**
 * HTTP2 settings, the settings is initialized with the default HTTP/2 values.<p>
 *
 * The settings expose the parameters defined by the HTTP/2 specification, as well as extra settings for
 * protocol extensions.
 */
class Http2Settings
{

  public function __construct($http2Settings = null)
  {

  }

  /**
   * @return integer
   */
  public function getHeaderTableSize()
  {
    return 0;
  }

  /**
   * @param $headerTableSize integer
   * @return $this
   */
  public function setHeaderTableSize($headerTableSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getInitialWindowSize()
  {
    return 0;
  }

  /**
   * @param $initialWindowSize integer
   * @return $this
   */
  public function setInitialWindowSize($initialWindowSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxConcurrentStreams()
  {
    return 0;
  }

  /**
   * @param $maxConcurrentStreams integer
   * @return $this
   */
  public function setMaxConcurrentStreams($maxConcurrentStreams)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxFrameSize()
  {
    return 0;
  }

  /**
   * @param $maxFrameSize integer
   * @return $this
   */
  public function setMaxFrameSize($maxFrameSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxHeaderListSize()
  {
    return 0;
  }

  /**
   * @param $maxHeaderListSize integer
   * @return $this
   */
  public function setMaxHeaderListSize($maxHeaderListSize)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isPushEnabled()
  {
    return false;
  }

  /**
   * @param $pushEnabled bool
   * @return $this
   */
  public function setPushEnabled($pushEnabled)
  {
    return $this;
  }
}