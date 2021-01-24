<?php
namespace Factories;
use Packages\PaymentPackage;

abstract class PaymentPackageResolver {

    abstract public function getPaymentPackage() : PaymentPackage;

    public function amount()
    {
        $package =  $this->getPaymentPackage();

        return $package->price();
    }
}