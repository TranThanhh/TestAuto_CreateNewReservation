<?php

use Step\Acceptance\FirstSteps as FirstStep;
class SortCest
{
    /**
     * @param FirstStep $I
     * @throws Exception
     */
    public function sortID(FirstStep $I)
    {
        $I->wantToTest("I want to sort table by ID!");
        $I->sortTableByID();
    }

    /**
     * @param FirstStep $I
     * @throws Exception
     */
    public function sortType(FirstStep $I)
    {
        $I->wantToTest("I want to sort table by Type!");
        $I->sortTableByType();
    }

    /**
     * @param FirstStep $I
     * @throws Exception
     */
    public function sortTableID(FirstStep $I)
    {
        $I->wantToTest("I want to sort Reservation by tableID!");
        $I->sortTableID();
    }
    /**
     * @param FirstStep $I
     * @throws Exception
     */
    public function sortNumOfPerson(FirstStep $I)
    {
        $I->wantToTest("I want to sort Reservation by Number Of Person!");
        $I->sortNumofPerson();
    }
}