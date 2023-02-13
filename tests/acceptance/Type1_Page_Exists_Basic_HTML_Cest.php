<?php
use \Codeception\Example;
use \Codeception\Util\HttpCode;


/**
 * Web 1 tests
 * - Valid HTML & heading 1 for the page
 */
class Type1_Page_Exists_Basic_HTML_Cest
{
    /**
     * @example { "url": "/"}
     * @example { "url": "/?action=address"}
     * @example { "url": "/?action=modules"}
     */
    public function test_TYPE_1_01_page_response_okay(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $I->amOnPage($url);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }


    /**
     * @example { "url": "/", "expected_text" : "home page", "css_selector" : "body h1"}
     * @example { "url": "/?action=address", "expected_text" : "address page", "css_selector" : "body h1"}
     * @example { "url": "/?action=modules", "expected_text" : "modules page", "css_selector" : "body h1"}
     */
    public function test_TYPE_1_02_contentPage(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


}
