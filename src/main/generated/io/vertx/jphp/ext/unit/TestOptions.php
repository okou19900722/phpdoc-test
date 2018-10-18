<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\unit;

use io\vertx\jphp\ext\unit\report\ReportOptions;
use io\vertx\jphp\ext\unit\report\ReportingOptions;

/**
 * Test execution options:
 *
 * <ul>
 *   <li>the <code>timeout</code> in milliseconds, the default value is 2 minutes </li>
 *   <li>the <code>useEventLoop</code></li> configures the event loop usage
 *     <ul>
 *       <li><code>true</code> always runs with an event loop</li>
 *       <li><code>false</code> never runs with an event loop</li>
 *       <li><code>null</code> uses an event loop if there is one (provided by @see \io\vertx\jphp\core\Vertx::currentContext)
 *       otherwise run without</li>
 *     </ul>
 *   </li>
 *   <li>the <code>reporters</code> is an array of reporter configurations</li>
 * </ul>
 */
class TestOptions extends ReportingOptions
{

  public function __construct($testOptions = null)
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

  /**
   * @return integer
   */
  public function getTimeout()
  {
    return 0;
  }

  /**
   * @param $timeout integer
   * @return $this
   */
  public function setTimeout($timeout)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isUseEventLoop()
  {
    return false;
  }

  /**
   * @param $useEventLoop bool
   * @return $this
   */
  public function setUseEventLoop($useEventLoop)
  {
    return $this;
  }
}