<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Key store options configuring a list of private key and its certificate based on
 * <i>Privacy-enhanced Electronic Email</i> (PEM) files.
 * <p>
 *
 * A key file must contain a <b>non encrypted</b> private key in <b>PKCS8</b> format wrapped in a PEM
 * block, for example:
 * <p>
 *
 * <pre>
 * -----BEGIN PRIVATE KEY-----
 * MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDV6zPk5WqLwS0a
 * ...
 * K5xBhtm1AhdnZjx5KfW3BecE
 * -----END PRIVATE KEY-----
 * </pre><p>
 *
 * Or contain a <b>non encrypted</b> private key in <b>PKCS1</b> format wrapped in a PEM
 * block, for example:
 * <p>
 *
 * <pre>
 * -----BEGIN RSA PRIVATE KEY-----
 * MIIEowIBAAKCAQEAlO4gbHeFb/fmbUF/tOJfNPJumJUEqgzAzx8MBXv9Acyw9IRa
 * ...
 * zJ14Yd+t2fsLYVs2H0gxaA4DW6neCzgY3eKpSU0EBHUCFSXp/1+/
 * -----END RSA PRIVATE KEY-----
 * </pre><p>
 *
 * A certificate file must contain an X.509 certificate wrapped in a PEM block, for example:
 * <p>
 *
 * <pre>
 * -----BEGIN CERTIFICATE-----
 * MIIDezCCAmOgAwIBAgIEZOI/3TANBgkqhkiG9w0BAQsFADBuMRAwDgYDVQQGEwdV
 * ...
 * +tmLSvYS39O2nqIzzAUfztkYnUlZmB0l/mKkVqbGJA==
 * -----END CERTIFICATE-----
 * </pre>
 *
 * Keys and certificates can either be loaded by Vert.x from the filesystem:
 * <p>
 * <pre>
 * HttpServerOptions options = new HttpServerOptions();
 * options.setPemKeyCertOptions(new PemKeyCertOptions().setKeyPath("/mykey.pem").setCertPath("/mycert.pem"));
 * </pre>
 *
 * Or directly provided as a buffer:<p>
 *
 * <pre>
 * Buffer key = vertx.fileSystem().readFileSync("/mykey.pem");
 * Buffer cert = vertx.fileSystem().readFileSync("/mycert.pem");
 * options.setPemKeyCertOptions(new PemKeyCertOptions().setKeyValue(key).setCertValue(cert));
 * </pre>
 *
 * Several key/certificate pairs can be used:
 * <p>
 * <pre>
 * HttpServerOptions options = new HttpServerOptions();
 * options.setPemKeyCertOptions(new PemKeyCertOptions()
 *    .addKeyPath("/mykey1.pem").addCertPath("/mycert1.pem")
 *    .addKeyPath("/mykey2.pem").addCertPath("/mycert2.pem"));
 * </pre>
 */
class PemKeyCertOptions
{

  public function __construct($pemKeyCertOptions = null)
  {

  }

  /**
   * @param $certPath string
   * @return $this
   */
  public function setCertPath($certPath)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getCertPaths()
  {
    return "";
  }

  /**
   * @param $certPaths string
   * @return $this
   */
  public function setCertPaths($certPaths)
  {
    return $this;
  }

  /**
   * @param $certValue Buffer
   * @return $this
   */
  public function setCertValue($certValue)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getCertValues()
  {
    return null;
  }

  /**
   * @param $certValues Buffer
   * @return $this
   */
  public function setCertValues($certValues)
  {
    return $this;
  }

  /**
   * @param $keyPath string
   * @return $this
   */
  public function setKeyPath($keyPath)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getKeyPaths()
  {
    return "";
  }

  /**
   * @param $keyPaths string
   * @return $this
   */
  public function setKeyPaths($keyPaths)
  {
    return $this;
  }

  /**
   * @param $keyValue Buffer
   * @return $this
   */
  public function setKeyValue($keyValue)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getKeyValues()
  {
    return null;
  }

  /**
   * @param $keyValues Buffer
   * @return $this
   */
  public function setKeyValues($keyValues)
  {
    return $this;
  }
}