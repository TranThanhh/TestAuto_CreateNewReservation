<?php
namespace Step\Acceptance;

use Page\FirstPage;
use Page\SecondPage;

class SecondSteps extends \AcceptanceTester
{
    /**
     * @param $tableID
     * @param $numPerson
     * @param $date
     * @param $des
     * @param $startTime
     * @throws \Exception
     */
    public function fillInput($tableID, $numPerson, $date, $des, $startTime)
    {
        $I=$this;
        $I->waitForElementVisible(SecondPage::$tableID,30);
        $I->fillField(SecondPage::$tableID,$tableID);
        $I->fillField(SecondPage::$numPerson,$numPerson);
        $I->fillField(SecondPage::$date,$date);
        $I->fillField(SecondPage::$descript,$des);
        $I->fillField(SecondPage::$startTime,$startTime);
        $I->click(FirstPage::$addOrEditButton);
        //$I->pause();
    }

    /**
     * @param array $reservationSuccess
     * @throws \Exception
     */
    public function fillInput1($reservationSuccess=array())
    {
        $I=$this;
        $I->waitForElementVisible(SecondPage::$tableID,30);
        $I->fillField(SecondPage::$tableID,$reservationSuccess['id']);
        $I->fillField(SecondPage::$numPerson,$reservationSuccess['number']);
        $I->fillField(SecondPage::$date,$reservationSuccess['date']);
        $I->fillField(SecondPage::$descript,$reservationSuccess['des']);
        $I->fillField(SecondPage::$startTime,$reservationSuccess['time']);
        $I->click(FirstPage::$addOrEditButton);
//        if(isset($reservation['des']))
//        {
//
//        }
    }

    /**
     * @param array $reservationUnSuccess
     * @throws \Exception
     */
    public function fillInput2($reservationUnSuccess=array())
    {
        $I=$this;
        $I->waitForElementVisible(SecondPage::$tableID,30);
        $I->fillField(SecondPage::$tableID,$reservationUnSuccess['id']);
        $I->fillField(SecondPage::$numPerson,$reservationUnSuccess['number']);
        $I->fillField(SecondPage::$date,$reservationUnSuccess['date']);
        $I->fillField(SecondPage::$descript,$reservationUnSuccess['des']);
        $I->fillField(SecondPage::$startTime,$reservationUnSuccess['time']);
        $I->click(FirstPage::$addOrEditButton);
        //$I->pause();
    }
}