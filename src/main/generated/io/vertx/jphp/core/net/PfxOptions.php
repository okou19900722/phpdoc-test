<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Key or trust store options configuring private key and/or certificates based on PKCS#12 files.
 * <p>
 * When used as a key store, it should point to a store containing a private key and its certificate.
 * When used as a trust store, it should point to a store containing a list of accepted certificates.
 * <p>
 *
 * The store can either be loaded by Vert.x from the filesystem:
 * <p>
 * <pre>
 * HttpServerOptions options = new HttpServerOptions();
 * options.setPfxKeyCertOptions(new PfxOptions().setPath("/mykeystore.p12").setPassword("foo"));
 * </pre>
 *
 * Or directly provided as a buffer:<p>
 *
 * <pre>
 * Buffer store = vertx.fileSystem().readFileSync("/mykeystore.p12");
 * options.setPfxKeyCertOptions(new PfxOptions().setValue(store).setPassword("foo"));
 * </pre>
 */
class PfxOptions
{

  public function __construct($pfxOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getPassword()
  {
    return "";
  }

  /**
   * @param $password string
   * @return $this
   */
  public function setPassword($password)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getPath()
  {
    return "";
  }

  /**
   * @param $path string
   * @return $this
   */
  public function setPath($path)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getValue()
  {
    return null;
  }

  /**
   * @param $value Buffer
   * @return $this
   */
  public function setValue($value)
  {
    return $this;
  }
}