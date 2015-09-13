<?php
namespace Payu\Response;

class PaymentResponse extends ResponseAbstract
{
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @var string
     */
    protected $enrolled3dsRedirectUrl;

    /**
     * @param string $transactionId
     * @return $this;
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $enrolled3dsRedirectUrl
     */
    public function setEnrolled3dsRedirectUrl($enrolled3dsRedirectUrl) {
        $this->enrolled3dsRedirectUrl = $enrolled3dsRedirectUrl;
    }

    /**
     * @return string
     */
    public function getEnrolled3dsRedirectUrl() {
        return $this->enrolled3dsRedirectUrl;
    }

    /**
     * @param integer $status
     * @param string $code
     * @param string $message
     * @param string $transactionId
     */
    public function __construct($status, $code, $message, $transactionId, $enrolled3dsRedirect)
    {
        parent::__construct($status, $code, $message);
        $this->setTransactionId($transactionId);
        $this->setEnrolled3dsRedirectUrl($enrolled3dsRedirect);
    }
} 