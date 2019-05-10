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

    public  function __construct()
    {
        $this->tableIDValid="6";
        $this->numPerson="6";
        $this->date="05/10/2019";
        $this->descript="booking online";
        $this->startTime="22";
    }
    public function createSuccess(FirstSteps $I,$scenario)
    {
        
    }
}
