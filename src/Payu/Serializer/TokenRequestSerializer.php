<?php
namespace Payu\Serializer;
use Payu\Serializer\PaymentRequestSerializer;

class TokenRequestSerializer extends PaymentRequestSerializer
{
    /**
     * @return array
     */
    protected function serializeOrder()
    {
        /** @var $order \Payu\Component\Order */
        $order = $this->request->getOrder();

        if (!$order) {
            return array();
        }
        return parent::serializeOrder();

    }

    /**
     * @return array
     */
    protected function serializeBilling()
    {
        /** @var $billing  \Payu\Component\Billing */
        $billing = $this->request->getBilling();
        if (!$billing) {
            return array();
        }
        return parent::serializeBilling();
    }

    /**
     * @return array
     */
    protected function serializeDelivery()
    {
        /** @var $delivery \Payu\Component\Delivery */
        $delivery = $this->request->getDelivery();
        if (!$delivery) {
            return array();
        }
        return parent::serializeDelivery();
    }

    protected function serializeToken() {
        $token = $this->request->getToken();
        $array  =  array(
                'REF_NO' => $token->getRefNo(),
                'METHOD' => $token->getMethod(),
                'TIMESTAMP' => $token->getTimestamp(),
        );
        $order = $this->request->getOrder();
        if ($order) {
            $array['CURRENCY'] = $order->getCurrency();
            $array['EXTERNAL_REF'] = $order->getCode();
        }
        $basket = $this->request->getBasket();
        if ($basket) {
            $array['AMOUNT'] = $basket->getTotalPrice();
        }
        return $array;
    }

    /**i
     * @return serialize
     */
    public function serialize()
    {
        $concatenatedData = array_merge(
            // $this->serializeOrder(),
            $this->serializeBilling(),
            $this->serializeDelivery(),
            $this->serializeBasket(),
            $this->serializeToken()
        );
        $filteredData               = array_filter($concatenatedData);
        $filteredData['MERCHANT']   = $this->configuration->getMerchantId();
        $filteredData['SIGN'] = $this->calculateHash($filteredData);
        return $filteredData;
    }
}
