<?php
namespace Packages;

interface PaymentPackage {
    public function calculate();
    public function duration();
    public function price();
}