<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mail;


/**
 * represent a mail message that can be sent via the MailClient
 */
class MailMessage
{

  public function __construct($mailMessage = null)
  {

  }

  /**
   * @return MailAttachment|mixed
   */
  public function getAttachment()
  {
    return null;
  }

  /**
   * @param $attachment MailAttachment|mixed
   * @return $this
   */
  public function setAttachment($attachment)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getBcc()
  {
    return "";
  }

  /**
   * @param $bcc string
   * @return $this
   */
  public function setBcc($bcc)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getBounceAddress()
  {
    return "";
  }

  /**
   * @param $bounceAddress string
   * @return $this
   */
  public function setBounceAddress($bounceAddress)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getCc()
  {
    return "";
  }

  /**
   * @param $cc string
   * @return $this
   */
  public function setCc($cc)
  {
    return $this;
  }

  /**
   * @return bool
   */
  public function isFixedHeaders()
  {
    return false;
  }

  /**
   * @param $fixedHeaders bool
   * @return $this
   */
  public function setFixedHeaders($fixedHeaders)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getFrom()
  {
    return "";
  }

  /**
   * @param $from string
   * @return $this
   */
  public function setFrom($from)
  {
    return $this;
  }
  /**
   * @param $key String
   * @param $value String
   * @return $this
   */
  public function addHeader($key, $value)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getHtml()
  {
    return "";
  }

  /**
   * @param $html string
   * @return $this
   */
  public function setHtml($html)
  {
    return $this;
  }

  /**
   * @return MailAttachment|mixed
   */
  public function getInlineAttachment()
  {
    return null;
  }

  /**
   * @param $inlineAttachment MailAttachment|mixed
   * @return $this
   */
  public function setInlineAttachment($inlineAttachment)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getSubject()
  {
    return "";
  }

  /**
   * @param $subject string
   * @return $this
   */
  public function setSubject($subject)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getText()
  {
    return "";
  }

  /**
   * @param $text string
   * @return $this
   */
  public function setText($text)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getTo()
  {
    return "";
  }

  /**
   * @param $to string
   * @return $this
   */
  public function setTo($to)
  {
    return $this;
  }
}