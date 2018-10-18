<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mail;


/**
 * Represent the result of the sendMail operation
 */
class MailResult
{

  public function __construct($mailResult = null)
  {

  }

  /**
   * @return string
   */
  public function getMessageID()
  {
    return "";
  }

  /**
   * @param $messageID string
   * @return $this
   */
  public function setMessageID($messageID)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getRecipients()
  {
    return "";
  }

  /**
   * @param $recipients string
   * @return $this
   */
  public function setRecipients($recipients)
  {
    return $this;
  }
}