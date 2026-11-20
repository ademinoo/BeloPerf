<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HomeControllerTest extends WebTestCase
{
    public function testHomeRendersLocalUxIcons(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        self::assertResponseIsSuccessful();
        self::assertSelectorCount(1, '.header-search svg.icon');
        self::assertSelectorCount(1, '.header-cart svg.icon');
        self::assertSelectorCount(1, '.header-mobile-menu summary svg.icon');
        self::assertSelectorCount(2, '.button-container svg.button-icon');
        self::assertSelectorTextContains('.button-container', 'Explorer la boutique');

        self::assertSelectorCount(4, '.infos-container .info');
        self::assertSelectorCount(4, '.infos-container svg.icon');
        self::assertSelectorCount(1, '.info-stars svg.icon');

        foreach ($client->getCrawler()->filter('svg.icon') as $icon) {
            self::assertSame('true', $icon->getAttribute('aria-hidden'));
            self::assertSame('false', $icon->getAttribute('focusable'));
            self::assertGreaterThan(0, $icon->getElementsByTagName('path')->length);
        }
    }
}
