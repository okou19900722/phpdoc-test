<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\web;


class Http2PushMapping
{

  public function __construct($http2PushMapping = null)
  {

  }

  /**
   * @return string
   */
  public function getExtensionTarget()
  {
    return "";
  }

  /**
   * @param $extensionTarget string
   * @return $this
   */
  public function setExtensionTarget($extensionTarget)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getFilePath()
  {
    return "";
  }

  /**
   * @param $filePath string
   * @return $this
   */
  public function setFilePath($filePath)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isNoPush()
  {
    return false;
  }

  /**
   * @param $noPush bool
   * @return $this
   */
  public function setNoPush($noPush)
  {
    return $this;
  }
}