<?php /** @noinspection ALL */
namespace io\vertx\jphp\micrometer;

use io\vertx\jphp\core\http\HttpServerOptions;

/**
 * Options for Prometheus metrics backend.
 */
class VertxPrometheusOptions
{

  public function __construct($vertxPrometheusOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getEmbeddedServerEndpoint()
  {
    return "";
  }

  /**
   * @param $embeddedServerEndpoint string
   * @return $this
   */
  public function setEmbeddedServerEndpoint($embeddedServerEndpoint)
  {
    return $this;
  }

  /**
   * @return HttpServerOptions|mixed
   */
  public function getEmbeddedServerOptions()
  {
    return null;
  }

  /**
   * @param $embeddedServerOptions HttpServerOptions|mixed
   * @return $this
   */
  public function setEmbeddedServerOptions($embeddedServerOptions)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isEnabled()
  {
    return false;
  }

  /**
   * @param $enabled bool
   * @return $this
   */
  public function setEnabled($enabled)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isStartEmbeddedServer()
  {
    return false;
  }

  /**
   * @param $startEmbeddedServer bool
   * @return $this
   */
  public function setStartEmbeddedServer($startEmbeddedServer)
  {
    return $this;
  }
}