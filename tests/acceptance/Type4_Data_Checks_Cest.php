<?php
use \Codeception\Example;

/**
 * Web 4 tests
 *  - page content from the entity repository test data
 */
class Type4_Data_Checks_Cest
{
    /**
     * @example { "url": "/?action=modules", "expected_count" : "3", "css_selector" : "table tr"}
     */
    public function test_TYPE_4_01_seeItemCount(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $expectedCount = intval($example['expected_count']);
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedCount, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/?action=modules", "expected_text" : "1: Web Framework Development, year 3", "css_selector" : "table td"}
     * @example { "url": "/?action=modules", "expected_text" : "2: Software Development, year 2", "css_selector" : "table td"}
     * @example { "url": "/?action=modules", "expected_text" : "3: Final Year Project, year 4", "css_selector" : "table td"}
     */
    public function test_TYPE_4_02_seeTableDataElementContentForModule(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/?action=module&id=1", "expected_text" : "Module 1", "css_selector" : "p"}
     * @example { "url": "/?action=module&id=1", "expected_text" : "name = Web Framework Development", "css_selector" : "ul li"}
     * @example { "url": "/?action=module&id=1", "expected_text" : "year = 3", "css_selector" : "ul li"}
     */
    public function test_TYPE_4_03_seeDetailsForRecord1(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


    /**
     * @example { "url": "/?action=module&id=2", "expected_text" : "Module 2", "css_selector" : "p"}
     * @example { "url": "/?action=module&id=2", "expected_text" : "name = Software Development", "css_selector" : "ul li"}
     * @example { "url": "/?action=module&id=2", "expected_text" : "year = 2", "css_selector" : "ul li"}
     */
    public function test_TYPE_4_04_seeDetailsForRecord2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


}
