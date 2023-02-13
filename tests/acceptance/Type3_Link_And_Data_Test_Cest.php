<?php
use \Codeception\Example;

/**
 * Web 3 tests
 * - link testing and more page content
 */
class Type3_Link_And_Data_Test_Cest
{
    /**
     * @example { "url": "/", "linked_url" : "/?action=address", "link_text" : "contact address"}
     * @example { "url": "/", "linked_url" : "/?action=modules", "link_text" : "module list"}
     */
    public function test_TYPE_3_01_linlsPage1(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkedUrl = $example['linked_url'];
        $linkText = $example['link_text'];


        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    /**
     * @example { "url": "/?action=address", "linked_url" : "/", "link_text" : "(home)"}
     * @example { "url": "/?action=address", "linked_url" : "/?action=modules", "link_text" : "module list"}
     */
    public function test_TYPE_3_02_linksPage2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkedUrl = $example['linked_url'];
        $linkText = $example['link_text'];


        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    /**
     * @example { "url": "/", "link_text" : "(home)"}
     * @example { "url": "/", "link_text" : "Logout"}
     */
    public function test_TYPE_3_03_Should_NOT_See_Link(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkText = $example['link_text'];

        $I->amOnPage($url);
        $I->dontSeeLink($linkText);
    }
}
