<?php

/*
 * This file is part of the BehatBundle.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$steps->Then('/^Response status code is (\d+)$/', function($world, $code) {
    PHPUnit_Framework_Assert::assertEquals($code, $world->getClient()->getResponse()->getStatusCode());
});

$steps->Then('/^I should see "([^"]*)"$/', function($world, $text) {
   PHPUnit_Framework_Assert::assertRegExp('/' . $text . '/', $world->getClient()->getResponse()->getContent());
});

$steps->Then('/^I should not see "([^"]*)"$/', function($world, $text) {
    PHPUnit_Framework_Assert::assertNotRegExp('/' . $text . '/', $world->getClient()->getResponse()->getContent());
});

$steps->Then('/^I should see element "([^"]*)"$/', function($world, $css) {
    PHPUnit_Framework_Assert::assertTrue(count($world->crawler->filter($css)) > 0);
});

$steps->Then('/^Header "([^"]*)" is set to "([^"]*)"$/', function($world, $key, $value) {
    PHPUnit_Framework_Assert::assertTrue($world->getClient()->getResponse()->headers->has($key));
    PHPUnit_Framework_Assert::assertEquals($value, $world->getClient()->getResponse()->headers->get($key));
});

$steps->Then('/^Header "([^"]*)" is not set to "([^"]*)"$/', function($world, $key, $value) {
    PHPUnit_Framework_Assert::assertTrue($world->getClient()->getResponse()->headers->has($key));
    PHPUnit_Framework_Assert::assertNotEquals($value, $world->getClient()->getResponse()->headers->get($key));
});

$steps->Then('/^I was redirected$/', function($world) {
    PHPUnit_Framework_Assert::assertTrue($world->getClient()->getResponse()->isRedirection());
});

$steps->Then('/^I was not redirected$/', function($world) {
    PHPUnit_Framework_Assert::assertFalse($world->getClient()->getResponse()->isRedirection());
});

$steps->Then('/^Print output$/', function($world) {
    $world->printDebug($world->getClient()->getResponse()->getContent());
});
