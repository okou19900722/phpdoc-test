<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis\op;


/**
 */
class MigrateOptions
{

  public function __construct($migrateOptions = null)
  {

  }

  /**
   * @param $copy bool
   * @return $this
   */
  public function setCopy($copy)
  {
    return $this;
  }

  /**
   * @param $replace bool
   * @return $this
   */
  public function setReplace($replace)
  {
    return $this;
  }
}