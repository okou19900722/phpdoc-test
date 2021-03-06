<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\shell\term;

use io\vertx\jphp\core\buffer\Buffer;
use io\vertx\jphp\core\http\Http2Settings;
use io\vertx\jphp\core\http\HttpServerOptions;
use io\vertx\jphp\core\net\JdkSSLEngineOptions;
use io\vertx\jphp\core\net\JksOptions;
use io\vertx\jphp\core\net\OpenSSLEngineOptions;
use io\vertx\jphp\core\net\PemKeyCertOptions;
use io\vertx\jphp\core\net\PemTrustOptions;
use io\vertx\jphp\core\net\PfxOptions;
use io\vertx\jphp\ext\auth\AuthOptions;
use io\vertx\jphp\ext\web\handler\sockjs\SockJSHandlerOptions;

/**
 * The web term configuration options.
 */
class HttpTermOptions extends HttpServerOptions
{

  public function __construct($httpTermOptions = null)
  {

  }

  /**
   * @return integer
   */
  public function getAcceptBacklog()
  {
    return 0;
  }

  /**
   * @param $acceptBacklog integer
   * @return $this
   */
  public function setAcceptBacklog($acceptBacklog)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isAcceptUnmaskedFrames()
  {
    return false;
  }

  /**
   * @param $acceptUnmaskedFrames bool
   * @return $this
   */
  public function setAcceptUnmaskedFrames($acceptUnmaskedFrames)
  {
    return $this;
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
   * @return AuthOptions|mixed
   */
  public function getAuthOptions()
  {
    return null;
  }

  /**
   * @return string
   */
  public function getCharset()
  {
    return "";
  }

  /**
   * @param $charset string
   * @return $this
   */
  public function setCharset($charset)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getClientAuth()
  {
    return null;
  }

  /**
   * @param $clientAuth string
   * @return $this
   */
  public function setClientAuth($clientAuth)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isClientAuthRequired()
  {
    return false;
  }

  /**
   * @param $clientAuthRequired bool
   * @return $this
   */
  public function setClientAuthRequired($clientAuthRequired)
  {
    return $this;
  }

  /**
   * @return integer
   */
  public function getCompressionLevel()
  {
    return 0;
  }

  /**
   * @param $compressionLevel integer
   * @return $this
   */
  public function setCompressionLevel($compressionLevel)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isCompressionSupported()
  {
    return false;
  }

  /**
   * @param $compressionSupported bool
   * @return $this
   */
  public function setCompressionSupported($compressionSupported)
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
   * @return bool
   */
  public function isDecompressionSupported()
  {
    return false;
  }

  /**
   * @param $decompressionSupported bool
   * @return $this
   */
  public function setDecompressionSupported($decompressionSupported)
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
  public function isHandle100ContinueAutomatically()
  {
    return false;
  }

  /**
   * @param $handle100ContinueAutomatically bool
   * @return $this
   */
  public function setHandle100ContinueAutomatically($handle100ContinueAutomatically)
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
   * @return string
   */
  public function getIntputrc()
  {
    return "";
  }

  /**
   * @param $intputrc string
   * @return $this
   */
  public function setIntputrc($intputrc)
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
   * @param $perFrameWebsocketCompressionSupported bool
   * @return $this
   */
  public function setPerFrameWebsocketCompressionSupported($perFrameWebsocketCompressionSupported)
  {
    return $this;
  }

  /**
   * @param $perMessageWebsocketCompressionSupported bool
   * @return $this
   */
  public function setPerMessageWebsocketCompressionSupported($perMessageWebsocketCompressionSupported)
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
   * @return Buffer
   */
  public function getShellHtmlResource()
  {
    return null;
  }

  /**
   * @param $shellHtmlResource Buffer
   * @return $this
   */
  public function setShellHtmlResource($shellHtmlResource)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isSni()
  {
    return false;
  }

  /**
   * @param $sni bool
   * @return $this
   */
  public function setSni($sni)
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
   * @return SockJSHandlerOptions|mixed
   */
  public function getSockJSHandlerOptions()
  {
    return null;
  }

  /**
   * @param $sockJSHandlerOptions SockJSHandlerOptions|mixed
   * @return $this
   */
  public function setSockJSHandlerOptions($sockJSHandlerOptions)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSockJSPath()
  {
    return "";
  }

  /**
   * @param $sockJSPath string
   * @return $this
   */
  public function setSockJSPath($sockJSPath)
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
   * @return Buffer
   */
  public function getTermJsResource()
  {
    return null;
  }

  /**
   * @param $termJsResource Buffer
   * @return $this
   */
  public function setTermJsResource($termJsResource)
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

  /**
   * @return Buffer
   */
  public function getVertsShellJsResource()
  {
    return null;
  }

  /**
   * @param $vertsShellJsResource Buffer
   * @return $this
   */
  public function setVertsShellJsResource($vertsShellJsResource)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function getWebsocketAllowServerNoContext()
  {
    return false;
  }

  /**
   * @param $websocketAllowServerNoContext bool
   * @return $this
   */
  public function setWebsocketAllowServerNoContext($websocketAllowServerNoContext)
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
  public function getWebsocketPreferredClientNoContext()
  {
    return false;
  }

  /**
   * @param $websocketPreferredClientNoContext bool
   * @return $this
   */
  public function setWebsocketPreferredClientNoContext($websocketPreferredClientNoContext)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getWebsocketSubProtocols()
  {
    return "";
  }

  /**
   * @param $websocketSubProtocols string
   * @return $this
   */
  public function setWebsocketSubProtocols($websocketSubProtocols)
  {
    return $this;
  }
}