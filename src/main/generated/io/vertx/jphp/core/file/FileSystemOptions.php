<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\file;


/**
 * Vert.x file system base configuration, this class can be extended by provider implementations to configure
 * those specific implementations.
 */
class FileSystemOptions
{

  public function __construct($fileSystemOptions = null)
  {

  }

  /**
   * @return bool
   */
  public function isClassPathResolvingEnabled()
  {
    return false;
  }

  /**
   * @param $classPathResolvingEnabled bool
   * @return $this
   */
  public function setClassPathResolvingEnabled($classPathResolvingEnabled)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isFileCachingEnabled()
  {
    return false;
  }

  /**
   * @param $fileCachingEnabled bool
   * @return $this
   */
  public function setFileCachingEnabled($fileCachingEnabled)
  {
    return $this;
  }
}