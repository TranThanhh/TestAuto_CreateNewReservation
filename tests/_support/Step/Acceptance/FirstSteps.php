<?php
namespace Step\Acceptance;

use Page\FirstPage;

class FirstSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public  function createReservation()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$buttonNewReservation,20);
        $I->click(FirstPage::$buttonNewReservation);
    }
}