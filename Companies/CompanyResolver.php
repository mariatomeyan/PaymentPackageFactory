<?php
namespace Companies;
abstract class CompanyResolver {

    // Defining default prices for companies

    public const PRICE_PER_HOUR = 10;
    public const PRICE_PER_DAY = 30;
    public const PRICE_PER_WEEK = 200;
    public const PRICE_PER_MONTH = 1000;

    public function getCompany(): Company
    {
        $instance =  new \ReflectionClass($this);
        return $instance->newInstance();
    }
}
