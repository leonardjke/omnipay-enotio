<?php

namespace Omnipay\Enotio\Traits;

trait Parametrable
{

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    public function setSecretKey2($value)
    {
        return $this->setParameter('secretKey2', $value);
    }

    public function getSecretKey2()
    {
        return $this->getParameter('secretKey2');
    }

    public function setDescription($value)
    {
        return $this->setParameter('description', $value);
    }

    public function getDescription()
    {
        return $this->getParameter('description');
    }

    public function setPaymentType($value)
    {
        return $this->setParameter('paymentType', $value);
    }

    public function getPaymentType()
    {
        return $this->getParameter('paymentType');
    }

    public function setSuccessUrl($value)
    {
        return $this->setParameter('successUrl', $value);
    }

    public function getSuccessUrl()
    {
        return $this->getParameter('successUrl');
    }

    public function setFailUrl($value)
    {
        return $this->setParameter('failUrl', $value);
    }

    public function getFailUrl()
    {
        return $this->getParameter('failUrl');
    }

}
