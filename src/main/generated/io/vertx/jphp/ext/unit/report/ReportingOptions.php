<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\unit\report;


/**
 * Reporting options:
 *
 * <ul>
 *   <li>the <code>reporters</code> is an array of reporter configurations</li>
 * </ul>
 */
class ReportingOptions
{

  public function __construct($reportingOptions = null)
  {

  }
  /**
   * @param $reporters ReportOptions|mixed
   * @return $this
   */
  public function addReporter($reporters)
  {
    return $this;
  }

  /**
   * @return ReportOptions|mixed
   */
  public function getReporters()
  {
    return null;
  }

  /**
   * @param $reporters ReportOptions|mixed
   * @return $this
   */
  public function setReporters($reporters)
  {
    return $this;
  }
}