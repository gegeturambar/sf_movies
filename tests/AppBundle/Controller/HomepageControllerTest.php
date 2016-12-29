<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/fr/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        //$client->getContainer();
        $this->assertContains('for the fun', $crawler->filter('title')->text());
        $this->assertContains('for the fun', $crawler->filter('title')->text());

        $this->assertCount(1,$crawler->filter("#totalprice"));
        $this->assertEmpty($crawler->filter("#totalprice")->text());
        //$this->assertContains("",$crawler->filter("#totalprice")->text());



        $link = $crawler->selectLink('Login')->link();
        $crawler = $client->click($link);
        $this->assertCount(1,$crawler->filter('#username'));
        $this->assertCount(1,$crawler->filter('#password'));
        $this->assertCount(2,$crawler->filter('form input'));

    }

}
