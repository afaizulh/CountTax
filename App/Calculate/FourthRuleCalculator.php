<?php
namespace App\Calculate;

//file: FourthRuleCalculator.php
class FourthRuleCalculator extends AbstractCalculator
{
    public function maxPkp(): float
    {
        return 999999999999999999;
    }
    public function minPkp(): float
    {
        return 500000000;
    }
    public function taxPercentage(): float
    {
        return 0.3; //Maksudnya 30%
    }
}
