<?php /** @noinspection ALL */
namespace io\vertx\jphp\core\net;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Options for configuring a @see \io\vertx\jphp\core\net\NetServer.
 */
class NetServerOptions extends TCPSSLOptions
{

  public function __construct($netServerOptions = null)
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