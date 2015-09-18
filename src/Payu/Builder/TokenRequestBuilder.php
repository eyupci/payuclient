<?php
namespace Payu\Builder;

use Payu\Component\Basket;
use Payu\Component\Billing;
use Payu\Component\Delivery;
use Payu\Component\Order;
use Payu\Component\Product;
use Payu\Configuration;
use Payu\Request\TokenRequest;
use Payu\Serializer\TokenRequestSerializer;
use Payu\Validator\PaymentRequestValidator;
use Payu\Builder\PaymentRequestBuilder;

class TokenRequestBuilder extends PaymentRequestBuilder
{
    /**
     * @var \Payu\Component\Token
     */
    protected $token;

    /**
     * @param Token token
     * @return $this
     */
    public function setToken($token) {
        $this->token = $token;
        return $this;
    }

    public function __construct(Configuration $configuration)
    {
        parent::__construct($configuration);
        $this->basket = new Basket();
    }

    public function build()
    {
        $request = new TokenRequest($this->order, $this->billing, $this->delivery, $this->basket, $this->token);

        $serializer = new TokenRequestSerializer($request, $this->configuration);
        $rawData = $serializer->serialize();

        $request->setRawData($rawData);

        return $request;
    }
}
