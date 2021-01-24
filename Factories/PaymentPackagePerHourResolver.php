<?php
namespace Factories;

use Packages\PaymentPackagePerHour;
use Packages\PaymentPackage;
use Companies\Company;

class PaymentPackagePerHourResolver extends PaymentPackageResolver {

    private $hours;
    private $company;

    public function __construct($hours, Company $company)
    {
        $this->hours = $hours;
        $this->company = $company;
    }

    public function getPaymentPackage(): PaymentPackage
    {
       return new PaymentPackagePerHour($this->hours, $this->company );
    }

}