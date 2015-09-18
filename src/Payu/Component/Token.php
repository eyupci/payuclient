<?php
namespace Payu\Component;

class Token implements ComponentInterface
{
    /**
     * @var string
     */
    private $refNo;

    /**
     * @var string
     * format: TOKEN_GETINFO | TOKEN_NEWSALE | TOKEN_CANCEL
     */
    private $method;

    /**
     * @var string
     */
    private $timestamp;

    public function __construct(
        $refNo = null,
        $method = null
    ) {
        $this->setRefNo($refNo);
        $this->setMethod($method);
        $this->timestamp = gmdate('YmdHis');
    }

    /**
     * @param string $refNo
     * @return $this
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}
