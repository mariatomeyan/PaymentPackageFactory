<?php
namespace Packages;
use Packages\PaymentPackage;

class PaymentPackagePerDay implements PaymentPackage {

    private $start_date;
    private $end_date;
    private $price;

    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;

    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function calculate(): void
    {
        echo 'amoutn is 434';


    }

    public function duration()
    {

    }

    public function price()
    {

    }

}