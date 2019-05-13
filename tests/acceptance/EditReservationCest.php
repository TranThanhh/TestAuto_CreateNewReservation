<?php


use Step\Acceptance\FirstSteps;
use Step\Acceptance\SecondSteps;

class EditReservationCest
{
    /**
     * @var
     */
    protected $reservation1;
    /**
     * @var
     */
    protected $reservation2;
    /**
     * @var
     */
    protected $reservation3;
    /**
     * @var
     */
    protected $reservation4;
    /**
     * EditReservationCest constructor.
     */
    public  function __construct()
    {
        $this->reservation1=
            [
                'id'=>"1",
                'number'=>"6",
                'date'=>"05/09/2019",
                'des'=>"abc lala",
                'time'=>"8"
            ];
        $this->reservation2=
            [
                'id'=>"",
                'number'=>"6",
                'date'=>"05/09/2019",
                'des'=>"abc lala",
                'time'=>"8"
            ];
        $this->reservation3=
            [
                'id'=>"1",
                'number'=>"",
                'date'=>"05/09/2019",
                'des'=>"abc lala",
                'time'=>"8"
            ];
        $this->reservation4=
            [
                'id'=>"1",
                'number'=>"6",
                'date'=>"05/09/2019",
                'des'=>"abc lala",
                'time'=>""
            ];
        $this->reservation5=
            [
                'id'=>"8",
                'number'=>"6",
                'date'=>"05/09/2019",
                'des'=>"abc lala",
                'time'=>"17"
            ];
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     * I want to test edit successfully with value valid!
     */
    public function editSuccess1(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->wantToTest("I want to test edit successfully with value valid!");
        $I->editReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput1($this->reservation1);
        $I->pause();
        $I->comment("Edit Successfully!");
    }

    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     * I want to test edit unsuccess with id was null
     */
    public function editUnSuccess(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->wantToTest("I want to test edit unsuccess with id was null");
        $I->editReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput1($this->reservation2);
        $I->pause();
        $I->comment("Success");
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     * I want to test edit unsuccess with number of person was null
     */
    public function editUnSuccess1(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->wantToTest("I want to test edit unsuccess with number of person was null");
        $I->editReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput1($this->reservation3);
        $I->pause();
        $I->comment("Success");
    }
    /**
     * @param FirstSteps $I
     * @param $scenario
     * @throws Exception
     * I want to test edit unsuccess with start time was null
     */
    public function editUnSuccess2(FirstSteps $I,$scenario)
    {
        $I->openNewTab();
        $I->wantToTest("I want to test edit unsuccess with start time was null");
        $I->editReservation();
        $I=new SecondSteps($scenario);
        $I->fillInput1($this->reservation2);
        $I->pause();
        $I->comment("Success");
    }

}