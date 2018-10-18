<?php /** @noinspection ALL */
namespace io\vertx\jphp\redis;

use io\vertx\jphp\core\buffer\Buffer;
use io\vertx\jphp\core\net\JdkSSLEngineOptions;
use io\vertx\jphp\core\net\JksOptions;
use io\vertx\jphp\core\net\NetClientOptions;
use io\vertx\jphp\core\net\OpenSSLEngineOptions;
use io\vertx\jphp\core\net\PemKeyCertOptions;
use io\vertx\jphp\core\net\PemTrustOptions;
use io\vertx\jphp\core\net\PfxOptions;
use io\vertx\jphp\core\net\ProxyOptions;

/**
 * This object controls the connection setting to the Redis Server. There is no need to specify most of the settings
 * since it has built the following sensible defaults:
 * <p>
 * * `encoding`: `UTF-8`
 * * `host`: `localhost`
 * * `port`: 6379
 * * `tcpKeepAlive`: true
 * * `tcpNoDelay`: true
 * * `binary`: false
 * <p>
 * However there are two extra properties that have no defaults since they are optional:
 * <p>
 * * `auth`
 * * `select`
 * <p>
 * The usage of this two extra properties is to setup required authentication and optionally the selection of the active
 * database at connection time. If you define this extra properties on every connection to Redis server this client
 * will perform the authentication handshake and database selection, however if you don't do this and call @see \io\vertx\jphp\redis\RedisClient::auth
 * yourself in case of connection failure the client will not be able to perform the correct authentication handshake.
 */
class RedisOptions extends NetClientOptions
{

  public function __construct($redisOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAddress()
  {
    return "";
  }

  /**
   * @param $address string
   * @return $this
   */
  public function setAddress($address)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getAuth()
  {
    return "";
  }

  /**
   * @param $auth string
   * @return $this
   */
  public function setAuth($auth)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isBinary()
  {
    return false;
  }

  /**
   * @param $binary bool
   * @return $this
   */
  public function setBinary($binary)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getConnectTimeout()
  {
    return 0;
  }

  /**
   * @param $connectTimeout integer
   * @return $this
   */
  public function setConnectTimeout($connectTimeout)
  {
    return $this;
  }
  /**
   * @param $crlPaths string
   * @return $this
   */
  public function addCrlPath($crlPaths)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getCrlPaths()
  {
    return "";
  }
  /**
   * @param $crlValues Buffer
   * @return $this
   */
  public function addCrlValue($crlValues)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getCrlValues()
  {
    return null;
  }

  /**
   * @return bool
   */
  public function isDomainSocket()
  {
    return false;
  }

  /**
   * @param $domainSocket bool
   * @return $this
   */
  public function setDomainSocket($domainSocket)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDomainSocketAddress()
  {
    return "";
  }

  /**
   * @param $domainSocketAddress string
   * @return $this
   */
  public function setDomainSocketAddress($domainSocketAddress)
  {
    return $this;
  }
  /**
   * @param $enabledCipherSuites string
   * @return $this
   */
  public function addEnabledCipherSuite($enabledCipherSuites)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getEnabledCipherSuites()
  {
    return "";
  }
  /**
   * @param $enabledSecureTransportProtocols string
   * @return $this
   */
  public function addEnabledSecureTransportProtocol($enabledSecureTransportProtocols)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getEnabledSecureTransportProtocols()
  {
    return "";
  }

  /**
   * @param $enabledSecureTransportProtocols string
   * @return $this
   */
  public function setEnabledSecureTransportProtocols($enabledSecureTransportProtocols)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getEncoding()
  {
    return "";
  }

  /**
   * @param $encoding string
   * @return $this
   */
  public function setEncoding($encoding)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHost()
  {
    return "";
  }

  /**
   * @param $host string
   * @return $this
   */
  public function setHost($host)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHostnameVerificationAlgorithm()
  {
    return "";
  }

  /**
   * @param $hostnameVerificationAlgorithm string
   * @return $this
   */
  public function setHostnameVerificationAlgorithm($hostnameVerificationAlgorithm)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getIdleTimeout()
  {
    return 0;
  }

  /**
   * @param $idleTimeout integer
   * @return $this
   */
  public function setIdleTimeout($idleTimeout)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getIdleTimeoutUnit()
  {
    return null;
  }

  /**
   * @param $idleTimeoutUnit string
   * @return $this
   */
  public function setIdleTimeoutUnit($idleTimeoutUnit)
  {
    return $this;
  }

  /**
   * @return JdkSSLEngineOptions|mixed
   */
  public function getJdkSslEngineOptions()
  {
    return null;
  }

  /**
   * @param $jdkSslEngineOptions JdkSSLEngineOptions|mixed
   * @return $this
   */
  public function setJdkSslEngineOptions($jdkSslEngineOptions)
  {
    return $this;
  }

  /**
   * @return JksOptions|mixed
   */
  public function getKeyStoreOptions()
  {
    return null;
  }

  /**
   * @param $keyStoreOptions JksOptions|mixed
   * @return $this
   */
  public function setKeyStoreOptions($keyStoreOptions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getLocalAddress()
  {
    return "";
  }

  /**
   * @param $localAddress string
   * @return $this
   */
  public function setLocalAddress($localAddress)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getLogActivity()
  {
    return false;
  }

  /**
   * @param $logActivity bool
   * @return $this
   */
  public function setLogActivity($logActivity)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMasterName()
  {
    return "";
  }

  /**
   * @param $masterName string
   * @return $this
   */
  public function setMasterName($masterName)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getMetricsName()
  {
    return "";
  }

  /**
   * @param $metricsName string
   * @return $this
   */
  public function setMetricsName($metricsName)
  {
    return $this;
  }

  /**
   * @return OpenSSLEngineOptions|mixed
   */
  public function getOpenSslEngineOptions()
  {
    return null;
  }

  /**
   * @param $openSslEngineOptions OpenSSLEngineOptions|mixed
   * @return $this
   */
  public function setOpenSslEngineOptions($openSslEngineOptions)
  {
    return $this;
  }

  /**
   * @return PemKeyCertOptions|mixed
   */
  public function getPemKeyCertOptions()
  {
    return null;
  }

  /**
   * @param $pemKeyCertOptions PemKeyCertOptions|mixed
   * @return $this
   */
  public function setPemKeyCertOptions($pemKeyCertOptions)
  {
    return $this;
  }

  /**
   * @return PemTrustOptions|mixed
   */
  public function getPemTrustOptions()
  {
    return null;
  }

  /**
   * @param $pemTrustOptions PemTrustOptions|mixed
   * @return $this
   */
  public function setPemTrustOptions($pemTrustOptions)
  {
    return $this;
  }

  /**
   * @return PfxOptions|mixed
   */
  public function getPfxKeyCertOptions()
  {
    return null;
  }

  /**
   * @param $pfxKeyCertOptions PfxOptions|mixed
   * @return $this
   */
  public function setPfxKeyCertOptions($pfxKeyCertOptions)
  {
    return $this;
  }

  /**
   * @return PfxOptions|mixed
   */
  public function getPfxTrustOptions()
  {
    return null;
  }

  /**
   * @param $pfxTrustOptions PfxOptions|mixed
   * @return $this
   */
  public function setPfxTrustOptions($pfxTrustOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPort()
  {
    return 0;
  }

  /**
   * @param $port integer
   * @return $this
   */
  public function setPort($port)
  {
    return $this;
  }

  /**
   * @return ProxyOptions|mixed
   */
  public function getProxyOptions()
  {
    return null;
  }

  /**
   * @param $proxyOptions ProxyOptions|mixed
   * @return $this
   */
  public function setProxyOptions($proxyOptions)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReceiveBufferSize()
  {
    return 0;
  }

  /**
   * @param $receiveBufferSize integer
   * @return $this
   */
  public function setReceiveBufferSize($receiveBufferSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReconnectAttempts()
  {
    return 0;
  }

  /**
   * @param $reconnectAttempts integer
   * @return $this
   */
  public function setReconnectAttempts($reconnectAttempts)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getReconnectInterval()
  {
    return 0;
  }

  /**
   * @param $reconnectInterval integer
   * @return $this
   */
  public function setReconnectInterval($reconnectInterval)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReuseAddress()
  {
    return false;
  }

  /**
   * @param $reuseAddress bool
   * @return $this
   */
  public function setReuseAddress($reuseAddress)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isReusePort()
  {
    return false;
  }

  /**
   * @param $reusePort bool
   * @return $this
   */
  public function setReusePort($reusePort)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSelect()
  {
    return 0;
  }

  /**
   * @param $select integer
   * @return $this
   */
  public function setSelect($select)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSendBufferSize()
  {
    return 0;
  }

  /**
   * @param $sendBufferSize integer
   * @return $this
   */
  public function setSendBufferSize($sendBufferSize)
  {
    return $this;
  }
  /**
   * @param $sentinels string
   * @return $this
   */
  public function addSentinel($sentinels)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSentinels()
  {
    return "";
  }

  /**
   * @param $sentinels string
   * @return $this
   */
  public function setSentinels($sentinels)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getSoLinger()
  {
    return 0;
  }

  /**
   * @param $soLinger integer
   * @return $this
   */
  public function setSoLinger($soLinger)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSsl()
  {
    return false;
  }

  /**
   * @param $ssl bool
   * @return $this
   */
  public function setSsl($ssl)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTcpCork()
  {
    return false;
  }

  /**
   * @param $tcpCork bool
   * @return $this
   */
  public function setTcpCork($tcpCork)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTcpFastOpen()
  {
    return false;
  }

  /**
   * @param $tcpFastOpen bool
   * @return $this
   */
  public function setTcpFastOpen($tcpFastOpen)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTcpKeepAlive()
  {
    return false;
  }

  /**
   * @param $tcpKeepAlive bool
   * @return $this
   */
  public function setTcpKeepAlive($tcpKeepAlive)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTcpNoDelay()
  {
    return false;
  }

  /**
   * @param $tcpNoDelay bool
   * @return $this
   */
  public function setTcpNoDelay($tcpNoDelay)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTcpQuickAck()
  {
    return false;
  }

  /**
   * @param $tcpQuickAck bool
   * @return $this
   */
  public function setTcpQuickAck($tcpQuickAck)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getTrafficClass()
  {
    return 0;
  }

  /**
   * @param $trafficClass integer
   * @return $this
   */
  public function setTrafficClass($trafficClass)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isTrustAll()
  {
    return false;
  }

  /**
   * @param $trustAll bool
   * @return $this
   */
  public function setTrustAll($trustAll)
  {
    return $this;
  }

  /**
   * @return JksOptions|mixed
   */
  public function getTrustStoreOptions()
  {
    return null;
  }

  /**
   * @param $trustStoreOptions JksOptions|mixed
   * @return $this
   */
  public function setTrustStoreOptions($trustStoreOptions)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isUseAlpn()
  {
    return false;
  }

  /**
   * @param $useAlpn bool
   * @return $this
   */
  public function setUseAlpn($useAlpn)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isUsePooledBuffers()
  {
    return false;
  }

  /**
   * @param $usePooledBuffers bool
   * @return $this
   */
  public function setUsePooledBuffers($usePooledBuffers)
  {
    return $this;
  }
}