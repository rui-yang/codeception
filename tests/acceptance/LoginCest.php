<?php
/**
 * Created by PhpStorm.
 * User: ruiyang
 * Date: 2/23/2018
 * Time: 5:14 PM
 */

class LoginCest
{

    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.trivago.co.uk');
        $I->amOnPage('/');
    }

    public function tryToTest(AcceptanceTester $I){
        $I->click('//button[@tabindex="-1"]');
        $I->click('//a[@href="/oauth-login"]');
        sleep(10);
        $I->seeCurrentUrlEquals('https://accounts.trivago.com/login#');
    }
}