<?php
/**
 * @category    Chris Queen Consulting
 * @package     ChrisQueen_mage2fb
 * @copyright   Copyright (c) 2017 Chris Queen Consulting LLC (http://www.ChrisQueen.com/)
 * @author      Christopher Queen <christopher.queen@gmail.com>
 */

class SingleTest extends BrowserStackTest {

    public function testGoogle() {
        self::$driver->get("https://www.google.com/ncr");
        $element = self::$driver->findElement(WebDriverBy::name("q"));
        $element->sendKeys("BrowserStack");
        $element->submit();
        $this->assertEquals('BrowserStack - Google Search', self::$driver->getTitle());
    }

}