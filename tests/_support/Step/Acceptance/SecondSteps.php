<?php
namespace Step\Acceptance;

use Page\FirstPage;
use Page\SecondPage;

class SecondSteps extends \AcceptanceTester
{
    /**
     * @param array $reservationSuccess
     * @throws \Exception
     */
    public function fillInput($reservationSuccess=array())
    {
        $I=$this;
        $I->waitForElementVisible(SecondPage::$tableID,30);
        $I->fillField(SecondPage::$tableID,$reservationSuccess['id']);
        $I->fillField(SecondPage::$numPerson,$reservationSuccess['number']);
        $I->fillField(SecondPage::$date,$reservationSuccess['date']);
        $I->fillField(SecondPage::$descript,$reservationSuccess['des']);
        $I->fillField(SecondPage::$startTime,$reservationSuccess['time']);
        $I->click(FirstPage::$addOrEditButton);
    }


}