<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\http;


/**
 * Options describing how an @see \io\vertx\jphp\core\http\HttpClient will make connect to make a request.
 */
class RequestOptions
{

  public function __construct($requestOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getHost()
  {
    return "";
  }

  /**
   * @param $host string
   * @return $this
   */
  public function setHost($host)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPort()
  {
    return 0;
  }

  /**
   * @param $port integer
   * @return $this
   */
  public function setPort($port)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSsl()
  {
    return false;
  }

  /**
   * @param $ssl bool
   * @return $this
   */
  public function setSsl($ssl)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getURI()
  {
    return "";
  }

  /**
   * @param $uri string
   * @return $this
   */
  public function setURI($uri)
  {
    return $this;
  }
}