<?php
/**
 * Created by PhpStorm.
 * User: ruiyang
 * Date: 2/23/2018
 * Time: 10:23 AM
 */
class HomeCest
{
    public $home_title = "trivago.co.uk - The world’s top hotel price comparison site";

    // test
    public function tryToTest(\AcceptanceTester $I)
    {

        $I->wantTo('Check the search results page title');
        $I->amOnUrl('https://www.trivago.co.uk');
        $I->amOnPage('/');
        $I->canSeeInTitle($this->home_title);
    }
}