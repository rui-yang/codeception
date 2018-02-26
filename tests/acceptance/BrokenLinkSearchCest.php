<?php
/**
 * Created by PhpStorm.
 * User: ruiyang
 * Date: 2/23/2018
 * Time: 8:23 PM
 */

class BrokenLinkSearchCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.trivago.co.uk');
        $I->amOnPage('/');
        $I->fillField('//input[@id="horus-querytext"]', 'Barcelona');
        $I->click('//button[@ref="searchButton"]');
        $I->amOnPage('/?aDateRange*');
    }

    // test
    public function tryToTest(\AcceptanceTester $I)
    {
        $aLinks = $I->grabMultiple('a', 'href');
        $imgLinks = $I->grabMultiple('img', 'src');
        print(count($aLinks)."\n");
        for($i=0; $i<count($aLinks); $i++) {
            print($aLinks[$i]."\n");
            if($aLinks[$i]=="https://www.linkedin.com/company/trivagonv/"){
                continue;
            }
            $I->amOnPage($aLinks[$i]);
            $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);

        }
    }
}