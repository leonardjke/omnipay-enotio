<?php

namespace Omnipay\Enotio\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Enotio\Traits\Parametrable;

class PurchaseRequest extends AbstractRequest
{

    use Parametrable;

    public function getData()
    {
        $this->validate('merchantId', 'amount', 'transactionId', 'secretKey');

        $data = [
            'm'  => $this->getMerchantId(),
            'oa' => $this->getAmount(),
            'o'  => $this->getTransactionId(),
        ];

        if ($currency = $this->getCurrency()) {
            $data['cr'] = $currency;
        }

        if ($description = $this->getDescription()) {
            $data['c'] = $description;
        }

        if ($paymentType = $this->getPaymentType()) {
            $data['p'] = $paymentType;
        }

        if ($successUrl = $this->getSuccessUrl()) {
            $data['success_url'] = $successUrl;
        }

        if ($failUrl = $this->getFailUrl()) {
            $data['fail_url'] = $failUrl;
        }

        $data['s'] = hash(
            'md5',
            implode(':', [
                $this->getMerchantId(),
                $this->getAmount(),
                $this->getSecretKey(),
                $this->getTransactionId(),
            ])
        );

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }

    public function genSignature()
    {
        return hash(
            'md5',
            implode(':', [
                $this->getMerchantId(),
                $this->getAmount(),
                $this->getSecretKey(),
                $this->getTransactionId(),
            ])
        );
    }

}
