<?php
/**
 * Created by PhpStorm.
 * User: ruiyang
 * Date: 2/23/2018
 * Time: 7:31 PM
 */

class BrokenLinkHomeCest
{

    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.trivago.co.uk');
        $I->amOnPage('/');
    }

    // test
    public function tryToTest(\AcceptanceTester $I)
    {
        $I->wantTo('Check broken links');
        $aLinks = $I->grabMultiple('a', 'href');
        $imgLinks = $I->grabMultiple('img', 'src');
        print(count($aLinks)."\n");
        for($i=0; $i<count($aLinks); $i++) {
            print($aLinks[$i]."\n");
            $I->amOnPage($aLinks[$i]);
            $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
        }
    }
}