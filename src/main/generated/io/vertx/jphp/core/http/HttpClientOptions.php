<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\http;

use io\vertx\jphp\core\buffer\Buffer;
use io\vertx\jphp\core\net\ClientOptionsBase;
use io\vertx\jphp\core\net\JdkSSLEngineOptions;
use io\vertx\jphp\core\net\JksOptions;
use io\vertx\jphp\core\net\OpenSSLEngineOptions;
use io\vertx\jphp\core\net\PemKeyCertOptions;
use io\vertx\jphp\core\net\PemTrustOptions;
use io\vertx\jphp\core\net\PfxOptions;
use io\vertx\jphp\core\net\ProxyOptions;

/**
 * Options describing how an @see \io\vertx\jphp\core\http\HttpClient will make connections.
 */
class HttpClientOptions extends ClientOptionsBase
{

  public function __construct($httpClientOptions = null)
  {

  }

  /**
   * @return string
   */
  public function getAlpnVersions()
  {
    return null;
  }

  /**
   * @param $alpnVersions string
   * @return $this
   */
  public function setAlpnVersions($alpnVersions)
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
   * @return integer
   */
  public function getDecoderInitialBufferSize()
  {
    return 0;
  }

  /**
   * @param $decoderInitialBufferSize integer
   * @return $this
   */
  public function setDecoderInitialBufferSize($decoderInitialBufferSize)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDefaultHost()
  {
    return "";
  }

  /**
   * @param $defaultHost string
   * @return $this
   */
  public function setDefaultHost($defaultHost)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getDefaultPort()
  {
    return 0;
  }

  /**
   * @param $defaultPort integer
   * @return $this
   */
  public function setDefaultPort($defaultPort)
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
   * @return bool
   */
  public function isForceSni()
  {
    return false;
  }

  /**
   * @param $forceSni bool
   * @return $this
   */
  public function setForceSni($forceSni)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isHttp2ClearTextUpgrade()
  {
    return false;
  }

  /**
   * @param $http2ClearTextUpgrade bool
   * @return $this
   */
  public function setHttp2ClearTextUpgrade($http2ClearTextUpgrade)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getHttp2ConnectionWindowSize()
  {
    return 0;
  }

  /**
   * @param $http2ConnectionWindowSize integer
   * @return $this
   */
  public function setHttp2ConnectionWindowSize($http2ConnectionWindowSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getHttp2KeepAliveTimeout()
  {
    return 0;
  }

  /**
   * @param $http2KeepAliveTimeout integer
   * @return $this
   */
  public function setHttp2KeepAliveTimeout($http2KeepAliveTimeout)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getHttp2MaxPoolSize()
  {
    return 0;
  }

  /**
   * @param $http2MaxPoolSize integer
   * @return $this
   */
  public function setHttp2MaxPoolSize($http2MaxPoolSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getHttp2MultiplexingLimit()
  {
    return 0;
  }

  /**
   * @param $http2MultiplexingLimit integer
   * @return $this
   */
  public function setHttp2MultiplexingLimit($http2MultiplexingLimit)
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
   * @return Http2Settings|mixed
   */
  public function getInitialSettings()
  {
    return null;
  }

  /**
   * @param $initialSettings Http2Settings|mixed
   * @return $this
   */
  public function setInitialSettings($initialSettings)
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
   * @return bool
   */
  public function isKeepAlive()
  {
    return false;
  }

  /**
   * @param $keepAlive bool
   * @return $this
   */
  public function setKeepAlive($keepAlive)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getKeepAliveTimeout()
  {
    return 0;
  }

  /**
   * @param $keepAliveTimeout integer
   * @return $this
   */
  public function setKeepAliveTimeout($keepAliveTimeout)
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
   * @return integer
   */
  public function getMaxChunkSize()
  {
    return 0;
  }

  /**
   * @param $maxChunkSize integer
   * @return $this
   */
  public function setMaxChunkSize($maxChunkSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxHeaderSize()
  {
    return 0;
  }

  /**
   * @param $maxHeaderSize integer
   * @return $this
   */
  public function setMaxHeaderSize($maxHeaderSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxInitialLineLength()
  {
    return 0;
  }

  /**
   * @param $maxInitialLineLength integer
   * @return $this
   */
  public function setMaxInitialLineLength($maxInitialLineLength)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxPoolSize()
  {
    return 0;
  }

  /**
   * @param $maxPoolSize integer
   * @return $this
   */
  public function setMaxPoolSize($maxPoolSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxRedirects()
  {
    return 0;
  }

  /**
   * @param $maxRedirects integer
   * @return $this
   */
  public function setMaxRedirects($maxRedirects)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxWaitQueueSize()
  {
    return 0;
  }

  /**
   * @param $maxWaitQueueSize integer
   * @return $this
   */
  public function setMaxWaitQueueSize($maxWaitQueueSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxWebsocketFrameSize()
  {
    return 0;
  }

  /**
   * @param $maxWebsocketFrameSize integer
   * @return $this
   */
  public function setMaxWebsocketFrameSize($maxWebsocketFrameSize)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getMaxWebsocketMessageSize()
  {
    return 0;
  }

  /**
   * @param $maxWebsocketMessageSize integer
   * @return $this
   */
  public function setMaxWebsocketMessageSize($maxWebsocketMessageSize)
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
   * @return bool
   */
  public function isPipelining()
  {
    return false;
  }

  /**
   * @param $pipelining bool
   * @return $this
   */
  public function setPipelining($pipelining)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPipeliningLimit()
  {
    return 0;
  }

  /**
   * @param $pipeliningLimit integer
   * @return $this
   */
  public function setPipeliningLimit($pipeliningLimit)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getPoolCleanerPeriod()
  {
    return 0;
  }

  /**
   * @param $poolCleanerPeriod integer
   * @return $this
   */
  public function setPoolCleanerPeriod($poolCleanerPeriod)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getProtocolVersion()
  {
    return null;
  }

  /**
   * @param $protocolVersion string
   * @return $this
   */
  public function setProtocolVersion($protocolVersion)
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
   * @return bool
   */
  public function isSendUnmaskedFrames()
  {
    return false;
  }

  /**
   * @param $sendUnmaskedFrames bool
   * @return $this
   */
  public function setSendUnmaskedFrames($sendUnmaskedFrames)
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
  public function isTryUseCompression()
  {
    return false;
  }

  /**
   * @param $tryUseCompression bool
   * @return $this
   */
  public function setTryUseCompression($tryUseCompression)
  {
    return $this;
  }

  /**
   * @param $tryUsePerFrameWebsocketCompression bool
   * @return $this
   */
  public function setTryUsePerFrameWebsocketCompression($tryUsePerFrameWebsocketCompression)
  {
    return $this;
  }

  /**
   * @param $tryUsePerMessageWebsocketCompression bool
   * @return $this
   */
  public function setTryUsePerMessageWebsocketCompression($tryUsePerMessageWebsocketCompression)
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

  /**
   * @return bool
   */
  public function isVerifyHost()
  {
    return false;
  }

  /**
   * @param $verifyHost bool
   * @return $this
   */
  public function setVerifyHost($verifyHost)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getWebsocketCompressionAllowClientNoContext()
  {
    return false;
  }

  /**
   * @param $websocketCompressionAllowClientNoContext bool
   * @return $this
   */
  public function setWebsocketCompressionAllowClientNoContext($websocketCompressionAllowClientNoContext)
  {
    return $this;
  }

  /**
   * @param $websocketCompressionLevel integer
   * @return $this
   */
  public function setWebsocketCompressionLevel($websocketCompressionLevel)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getWebsocketCompressionRequestServerNoContext()
  {
    return false;
  }

  /**
   * @param $websocketCompressionRequestServerNoContext bool
   * @return $this
   */
  public function setWebsocketCompressionRequestServerNoContext($websocketCompressionRequestServerNoContext)
  {
    return $this;
  }
}