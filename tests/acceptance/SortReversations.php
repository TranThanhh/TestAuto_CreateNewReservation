<?php
use Step\Acceptance\FirstSteps;
class SortReversations
{
    public function sortIDTable(FirstSteps $I)
    {
        $I->sortTableByID();
    }
}