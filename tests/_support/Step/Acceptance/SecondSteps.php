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
        $I->click(SecondPage::$buttonAddOrEdit);
        //$I->pause();
    }
}