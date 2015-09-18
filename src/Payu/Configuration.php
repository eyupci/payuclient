<?php
namespace Payu;

class Configuration
{
    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var string
     */
    private $paymentEndpointUrl;

    /**
     * @var string
     */
    private $loyaltyInquiryEndPointUrl;

    /**
     * @var string
     */
    private $tokenEndPointUrl;

    public function __construct($merchantId = null, $secretKey = null, $paymentEndpointUrl = null,
                                $loyaltyInquiryEndPointUrl = null, $tokenEndPointUrl = null)
    {
        $this->merchantId = $merchantId;
        $this->secretKey = $secretKey;
        $this->paymentEndpointUrl = $paymentEndpointUrl;
        $this->loyaltyInquiryEndPointUrl = $loyaltyInquiryEndPointUrl;
        $this->tokenEndPointUrl = $tokenEndPointUrl;
    }

    /**
     * @param string $loyaltyInquiryEndPointUrl
     * @return $this
     */
    public function setLoyaltyInquiryEndPointUrl($loyaltyInquiryEndPointUrl)
    {
        $this->loyaltyInquiryEndPointUrl = $loyaltyInquiryEndPointUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoyaltyInquiryEndPointUrl()
    {
        return $this->loyaltyInquiryEndPointUrl;
    }

    /**
     * @param string $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param string $paymentEndpointUrl
     * @return $this
     */
    public function setPaymentEndpointUrl($paymentEndpointUrl)
    {
        $this->paymentEndpointUrl = $paymentEndpointUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentEndpointUrl()
    {
        return $this->paymentEndpointUrl;
    }

    /**
     * @param string $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     * @return $this
     */
    public function setTokenEndPointUrl($tokenEndPointUrl) {
        $this->tokenEndPointUrl = $tokenEndPointUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenEndPointUrl() {
        return $this->tokenEndPointUrl;
    }
}
