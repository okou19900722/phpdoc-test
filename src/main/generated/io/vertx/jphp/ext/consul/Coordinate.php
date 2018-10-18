<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\consul;


/**
 * Holds network coordinates of node
 */
class Coordinate
{

  public function __construct($coordinate = null)
  {

  }

  /**
   * @return float
   */
  public function getAdj()
  {
    return 0;
  }

  /**
   * @param $adj float
   * @return $this
   */
  public function setAdj($adj)
  {
    return $this;
  }

  /**
   * @return float
   */
  public function getErr()
  {
    return 0;
  }

  /**
   * @param $err float
   * @return $this
   */
  public function setErr($err)
  {
    return $this;
  }

  /**
   * @return float
   */
  public function getHeight()
  {
    return 0;
  }

  /**
   * @param $height float
   * @return $this
   */
  public function setHeight($height)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getNode()
  {
    return "";
  }

  /**
   * @param $node string
   * @return $this
   */
  public function setNode($node)
  {
    return $this;
  }

  /**
   * @return float
   */
  public function getVec()
  {
    return 0;
  }

  /**
   * @param $vec float
   * @return $this
   */
  public function setVec($vec)
  {
    return $this;
  }
}