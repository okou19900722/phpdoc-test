<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\unit\report;


/**
 * Configures a reporter consisting in a name <code>to</code>, an address <code>at</code> and an optional <code>format</code>.
 */
class ReportOptions
{

  public function __construct($reportOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getFormat()
  {
    return "";
  }

  /**
   * @param $format string
   * @return $this
   */
  public function setFormat($format)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTo()
  {
    return "";
  }

  /**
   * @param $to string
   * @return $this
   */
  public function setTo($to)
  {
    return $this;
  }
}