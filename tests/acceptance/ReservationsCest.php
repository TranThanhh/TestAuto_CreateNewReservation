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
    protected  $tableIDNull;
    /**
 * @var
 */
    protected $numPerson;
    /**
     * @var
     */
    protected $numPersonNull;
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
    protected $startTimeNull;

    public  function __construct()
    {
        $this->tableIDValid="5";
        $this->tableIDInValid="8";
        $this->tableIDNull="";
        $this->numPerson="6";
        $this->numPersonNull="";
        $this->date="05/10/2019";
        $this->descript="booking online";
        $this->startTime="22";
        $this->startTimeNull="";
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
    public function createFailWithIDNull(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->createReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->tableIDNull, $this->numPerson, $this->date, $this->descript, $this->startTime);
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
        $I->fillInput($this->tableIDValid, $this->numPersonNull, $this->date, $this->descript, $this->startTime);
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
        $I->fillInput($this->tableIDValid, $this->numPerson, $this->date, $this->descript, $this->startTimeNull);
        $I->waitForText("You must correct the following errors before you may continue.","10");
        $I->pause();
        $I->comment("Create Failed");
    }
}
