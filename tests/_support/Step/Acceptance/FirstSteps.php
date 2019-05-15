<?php
namespace Step\Acceptance;

use Page\FirstPage;
use Page\SecondPage;

class FirstSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     * I want to sort first table by ID
     */
    public function sortTableByID()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$sortID,20);
        $I->click(FirstPage::$sortID);
        $I->waitForElementVisible(FirstPage::$IDDes,20);
        $I->click(FirstPage::$IDDes);
        $I->comment("Table has Type Desc");
        $I->pause();
        $I->waitForElementVisible(FirstPage::$IDAsc,20);
        $I->click(FirstPage::$IDAsc);
        $I->comment("Table has Type Asc");
        $I->pause();
    }
    /**
     * @throws \Exception
     * I want to sort first table by Type
     */
    public function sortTableByType()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$sortType,20);
        $I->click(FirstPage::$sortID);
        $I->waitForElementVisible(FirstPage::$TypeDes,20);
        $I->click(FirstPage::$TypeDes);
        $I->comment("Table has Type Desc");
        $I->pause();
        $I->waitForElementVisible(FirstPage::$TypeAsc,20);
        $I->click(FirstPage::$TypeAsc);
        $I->comment("Table has Type Asc");
        $I->pause();
    }
    /**
     * @throws \Exception
     * I want to sort second table by ID
     */
    public function sortTableID()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$sortTableID,20);
        $I->click(FirstPage::$sortTableID);

        $I->waitForElementVisible(FirstPage::$tableIDDesc,20);
        $I->click(FirstPage::$tableIDDesc);
        $I->comment("TableID has Desc");
        $I->pause();
        $I->waitForElementVisible(FirstPage::$tableIDAsc,20);
        $I->click(FirstPage::$tableIDAsc);
        $I->comment("TableID has Asc");
        $I->pause();
    }
    /**
     * @throws \Exception
     * I want to sort second table by NumberOfPerson
     */
    public function sortNumofPerson()
    {
        $I=$this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$sortNum,20);
        $I->click(FirstPage::$sortNum);

        $I->waitForElementVisible(FirstPage::$numDesc,20);
        $I->click(FirstPage::$numDesc);
        $I->comment("Number of person has Desc");
        $I->pause();
        $I->waitForElementVisible(FirstPage::$numAsc,20);
        $I->click(FirstPage::$numAsc);
        $I->comment("Number of person has Asc");
        $I->pause();
    }
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