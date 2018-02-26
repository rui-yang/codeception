<?php
/**
 * Created by PhpStorm.
 * User: ruiyang
 * Date: 2/23/2018
 * Time: 5:15 PM
 */

use \Codeception\Util\Locator;
class SearchCest
{
    private $searchTxt = 'bar';
    private $suggestionText = 'Barcelona';

    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.trivago.co.uk');
        $I->amOnPage('/');
    }

    public function tryToTest(AcceptanceTester $I){
        $I->fillField('//input[@id="horus-querytext"]', $this->searchTxt);
        Locator::contains('ul[@class="ssg-suggestion"]', $this->suggestionText);
        Locator::contains('div[@class="ssg-suggestion__info"]', $this->suggestionText);
        //$I->click('.//button[@ref="searchButton"]');
        sleep(10);
        $I->seeInCurrentUrl('/?aDateRange*');
    }

}