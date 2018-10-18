<?php /** @noinspection ALL */
namespace io\vertx\jphp\ext\mail;

use io\vertx\jphp\core\buffer\Buffer;

/**
 * Represent a mail attachment that can be used in a MailMessage.
 */
class MailAttachment
{

  public function __construct($mailAttachment = null)
  {

  }

  /**
   * @return string
   */
  public function getContentId()
  {
    return "";
  }

  /**
   * @param $contentId string
   * @return $this
   */
  public function setContentId($contentId)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getContentType()
  {
    return "";
  }

  /**
   * @param $contentType string
   * @return $this
   */
  public function setContentType($contentType)
  {
    return $this;
  }

  /**
   * @return Buffer
   */
  public function getData()
  {
    return null;
  }

  /**
   * @param $data Buffer
   * @return $this
   */
  public function setData($data)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return "";
  }

  /**
   * @param $description string
   * @return $this
   */
  public function setDescription($description)
  {
    return $this;
  }

  /**
   * @return string
   */
  public function getDisposition()
  {
    return "";
  }

  /**
   * @param $disposition string
   * @return $this
   */
  public function setDisposition($disposition)
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
  public function getName()
  {
    return "";
  }

  /**
   * @param $name string
   * @return $this
   */
  public function setName($name)
  {
    return $this;
  }
}