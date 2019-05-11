<?php 
use Step\Acceptance\FirstSteps;
use Step\Acceptance\SecondSteps;
class ReservationsCest
{
    /**
     * @var string
     */
    protected $tableIDValid;
    /**
     * @var
     */
    protected  $tableIDInValid;
    /**
     * @var
     */
    protected $numPerson;
    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $descript;
    /**
     * @var
     */
    protected $startTime;
    /**
     * @var
     */
    protected $startTimeInvalid;

    public  function __construct()
    {
        $this->tableIDValid="5";
        $this->tableIDInValid="8";
        $this->numPerson="6";
        $this->date="05/10/2019";
        $this->descript="booking online";
        $this->startTime="22";
        $this->startTimeInvalid="";
    }

    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createSuccess(FirstSteps $I,$scenario)
    {
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->tableIDValid, $this->numPerson, $this->date, $this->descript, $this->startTime);
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
        $I->fillInput($this->tableIDInValid, $this->numPerson, $this->date, $this->descript, $this->startTime);
        $I->waitForText("Table ID is not existing !","10");
        $I->pause();
        $I->comment("Create Failed");
    }

    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createFailWithTimeInvalid(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->tableIDValid, $this->numPerson, $this->date, $this->descript, $this->startTimeInvalid);
        $I->waitForText("You must correct the following errors before you may continue.","10");
        $I->pause();
        $I->comment("Create Failed");
    }
}
