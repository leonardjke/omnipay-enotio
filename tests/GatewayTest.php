<?php

namespace Omnipay\Enotio\Tests;

use Omnipay\Tests\GatewayTestCase;
use Omnipay\Enotio\Gateway;
use Omnipay\Enotio\Message\PurchaseRequest;

class GatewayTest extends GatewayTestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testPurchase()
    {
        $request = $this->gateway->purchase([
            'amount' => '0.1',
            'currency' => 'USD',
            'transactionId' => 213,
            'description' => 'Purchase: 123',
        ]);

        $this->assertInstanceOf(PurchaseRequest::class, $request);
        $this->assertSame('0.10', $request->getAmount());
    }

}
