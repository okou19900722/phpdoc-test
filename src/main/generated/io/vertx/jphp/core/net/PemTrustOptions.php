<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Certificate Authority options configuring certificates based on
 * <i>Privacy-enhanced Electronic Email</i> (PEM) files. The options is configured with a list of
 * validating certificates.
 * <p>
 * Validating certificates must contain X.509 certificates wrapped in a PEM block:<p>
 *
 * <pre>
 * -----BEGIN CERTIFICATE-----
 * MIIDezCCAmOgAwIBAgIEVmLkwTANBgkqhkiG9w0BAQsFADBuMRAwDgYDVQQGEwdV
 * ...
 * z5+DuODBJUQst141Jmgq8bS543IU/5apcKQeGNxEyQ==
 * -----END CERTIFICATE-----
 * </pre>
 *
 * The certificates can either be loaded by Vert.x from the filesystem:
 * <p>
 * <pre>
 * HttpServerOptions options = new HttpServerOptions();
 * options.setPemTrustOptions(new PemTrustOptions().addCertPath("/cert.pem"));
 * </pre>
 *
 * Or directly provided as a buffer:
 * <p>
 *
 * <pre>
 * Buffer cert = vertx.fileSystem().readFileSync("/cert.pem");
 * HttpServerOptions options = new HttpServerOptions();
 * options.setPemTrustOptions(new PemTrustOptions().addCertValue(cert));
 * </pre>
 */
class PemTrustOptions
{

  public function __construct($pemTrustOptions = null)
  {

  }
  /**
   * @param $certPaths string
   * @return $this
   */
  public function addCertPath($certPaths)
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
   * @param $certValues Buffer
   * @return $this
   */
  public function addCertValue($certValues)
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
}