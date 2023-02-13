<?php
use \Codeception\Example;

/**
 * Web 2 tests
 * - Basic Text Content
 */
class Type2_Page_Contents_Cest
{
    /**
     * @example { "url": "/", "expected_text" : "wednesday home page", "css_selector" : "head title"}
     * @example { "url": "/", "expected_text" : "a mini Moodle page", "css_selector" : "body p"}
     * @example { "url": "/", "expected_text" : "the home page is where it's at", "css_selector" : "body small"}
     */
    public function test_TYPE_2_01_contentPage1(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);

        $I->dontSeeLink('Logout');
    }

    /**
     * @example { "url": "/?action=address", "expected_text" : "wednesday address page", "css_selector" : "head title"}
     * @example { "url": "/?action=address", "expected_text" : "10 Main Street, New York", "css_selector" : "body p span"}
     * @example { "url": "/?action=modules", "expected_text" : "modules page", "css_selector" : "body h1"}
     */
    public function test_TYPE_2_02_contentPage2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }
}
