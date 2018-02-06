<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloWorldControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello/world');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("Hello World", $crawler->filter('h1')->text());
    }
}
