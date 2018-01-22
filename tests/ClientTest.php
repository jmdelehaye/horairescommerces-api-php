<?php

namespace TLH\HorairesCommercesApi;

use TLH\HorairesCommercesApi\Client as ApiClient;
use GuzzleHttp\Client as GuzzleClient;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @test
     */
    public function initializeClient()
    {
        $client = new ApiClient('testclient', 'secretkey');

        $this->assertTrue($client instanceof ApiClient);
    }

    /**
     * @test
     * @expectedException \Exception
     * @expectedExceptionMessage The secret key is empty.
     */
    public function failToInitializeClient()
    {
        new ApiClient();
    }

    /**
     * @test
     */
    public function guzzleHttpClient()
    {
        $client = new ApiClient('testclient', 'secretkey');

        $this->assertObjectHasAttribute('clientId', $client);
        $this->assertObjectHasAttribute('secret', $client);
        $this->assertObjectHasAttribute('httpClient', $client);

        // $this->assertTrue($client->getClient() instanceof GuzzleClient);
    }
}
