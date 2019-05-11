<?php


use Step\Acceptance\FirstSteps;
use Step\Acceptance\SecondSteps;

class EditReservationCest
{
    /**
     * @var string
     */
    protected $tableIDValid;
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
     * EditReservationCest constructor.
     */
    public  function __construct()
    {
        $this->tableIDValid="5";
        $this->numPerson="6";
        $this->date="05/10/2019";
        $this->descript="booking online";
        $this->startTime="22";
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function editSuccess(FirstSteps $I,$scenario)
    {
        $I->editReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput($this->tableIDValid, $this->numPerson, $this->date, $this->descript, $this->startTime);
        $I->pause();
        $I->comment("Edit Succeed");
    }
}