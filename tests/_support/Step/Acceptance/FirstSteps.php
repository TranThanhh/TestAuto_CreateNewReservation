<?php
namespace Step\Acceptance;

use Page\FirstPage;
use Page\SecondPage;

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

    /**
     * @throws \Exception
     */
    public function editReservation()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$editButton,20);
        $I->click(FirstPage::$editButton);
        $I->click(FirstPage::$clearButton);
        $I->clearField(SecondPage::$date);
    }

}