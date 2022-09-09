<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FizzBuzzControllerTest extends WebTestCase
{
    public function testGetHelloWorld_returns_HelloWorld()
    {
        $client = static::createClient();
        $client->request('GET', '/fizzbuzz');

        self::assertEquals(200, $client->getResponse()->getStatusCode());
        self::assertStringContainsString("FizzBuzz", $client->getResponse()->getContent());
    }
}