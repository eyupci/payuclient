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
     * @var string
     */
    protected $refNo;

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
     * @param string $transactionId
     * @return $this;
     */
    public function setRefNo($refNo) {
        $this->refNo = $refNo;
    }

    /**
     * @return string
     */
    public function getRefNo() {
        return $this->refNo;
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
     * @param string $refNo
     * @param string $enrolled3dsRedirect
     */
    public function __construct($status, $code, $message, $transactionId, $enrolled3dsRedirect, $refNo)
    {
        parent::__construct($status, $code, $message);
        $this->setTransactionId($transactionId);
        $this->setEnrolled3dsRedirectUrl($enrolled3dsRedirect);
        $this->setRefNo($refNo);
    }
}
