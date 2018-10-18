<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\healthchecks;


/**
 * Represents the outcome of a health check procedure. Each procedure produces a @see \io\vertx\jphp\ext\healthchecks\Status indicating either OK
 * or KO. Optionally, it can also provide additional data.
 */
class Status
{

  public function __construct($status = null)
  {

  }

  /**
   * @return array
   */
  public function getData()
  {
    return [];
  }

  /**
   * @param $data array
   * @return $this
   */
  public function setData($data)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isOk()
  {
    return false;
  }

  /**
   * @param $ok bool
   * @return $this
   */
  public function setOk($ok)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isProcedureInError()
  {
    return false;
  }

  /**
   * @param $procedureInError bool
   * @return $this
   */
  public function setProcedureInError($procedureInError)
  {
    return $this;
  }
}