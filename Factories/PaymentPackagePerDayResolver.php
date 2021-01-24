<?php
namespace Factories;

use Packages\PaymentPackage;
use Packages\PaymentPackagePerDay;

class PaymentPackagePerDayResolver extends PaymentPackageResolver {

    private $start_date;
    private $end_date;
    private $company;

    public function __construct($start_date, $end_date, $company)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->company = $company;
    }

    public function getPaymentPackage(): PaymentPackage {

      return new PaymentPackagePerDay($this->start_date, $this->end_date);

    }
}