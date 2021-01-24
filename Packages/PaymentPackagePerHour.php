<?php
namespace Packages;
use Packages\PaymentPackage;

class PaymentPackagePerHour implements PaymentPackage {

    private $price = 23;
    private $hours;
    private $company;

    public function __construct($hours, $company)
    {
        $this->hours = $hours;
        $this->company = $company;
    }

    public function calculate()
    {
       return $this->hours * $this->company->getPricePerHour();
    }
    public function duration()
    {
        //todo return duration
    }
    public function price()
    {
        echo "Price for {$this->hours}: {$this->calculate()} EUR";
    }

}