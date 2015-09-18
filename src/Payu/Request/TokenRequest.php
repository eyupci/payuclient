<?php
namespace Payu\Request;

class TokenRequest extends RequestAbstract
{
    /**
     * @var \Payu\Component\Order
     */
    private $order;

    /**
     * @var \Payu\Component\Billing
     */
    private $billing;

    /**
     * @var \Payu\Component\Delivery
     */
    private $delivery;

    /**
     * @var \Payu\Component\Basket
     */
    private $basket;

    /**
     * @var \Payu\Component\Token
     */
    private $token;

    /**
     * @param \Payu\Component\Basket $basket
     * @return $this
     */
    public function setBasket($basket)
    {
        $this->basket = $basket;
        return $this;
    }

    /**
     * @return \Payu\Component\Basket
     */
    public function getBasket()
    {
        return $this->basket;
    }

    /**
     * @param \Payu\Component\Billing $billing
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * @return \Payu\Component\Billing
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param \Payu\Component\Delivery $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return \Payu\Component\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param \Payu\Component\Order $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return \Payu\Component\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param \Payu\Component\Token $token
     * @return $this
     */
    public function setToken($token) {
        $this->token = $token;
        return $this;
    }

    /**
     * @return \Payu\Component\Token
     */
    public function getToken() {
        return $this->token;
    }

    public function __construct($order = null, $billing = null, $delivery = null, $basket = null, $token = null)
    {
        $this->setOrder($order);
        $this->setBilling($billing);
        $this->setDelivery($delivery);
        $this->setBasket($basket);
        $this->setToken($token);
    }
}
