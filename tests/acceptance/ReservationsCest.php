<?php 
use Step\Acceptance\FirstSteps;
use Step\Acceptance\SecondSteps;
include 'EditReservationCest.php';
class ReservationsCest extends EditReservationCest
{
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createSuccess(FirstSteps $I,$scenario)
    {
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->reservation1);
        $I->pause();
        $I->comment("Create Succeed");
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createFailWithIDInvalid(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->reservation5);
        $I->waitForText("Table ID is not existing !","10");
        $I->pause();
        $I->comment("Create Failed");
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createFailWithIDNull(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->reservation2);
        $I->waitForText("You must correct the following errors before you may continue.","10");
        $I->pause();
        $I->comment("Create Failed");
    }

    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createFailWithNumOfPersonNull(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->reservation3);
        $I->waitForText("You must correct the following errors before you may continue.","10");
        $I->pause();
        $I->comment("Create Failed");
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createFailWithTimeNull(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->reservation4);
        $I->waitForText("You must correct the following errors before you may continue.","10");
        $I->pause();
        $I->comment("Create Failed");
    }
}
