<?php
namespace Companies;

class CompanyFirst extends CompanyResolver implements Company {

    public const PRICE_PER_HOUR = 15;
    public const PRICE_PER_DAY = 50;
    public const PRICE_PER_MINUTE = 5;
    public const PRICE_PER_WEEK = 300;
    public const PRICE_PER_MONTH = 1000;

    public function getPricePerHour()
    {
       return self::PRICE_PER_HOUR;
    }
    public function getPricePerMinute()
    {
       return self::PRICE_PER_MINUTE;
    }
    public function getPricePerMonth()
    {
        return self::PRICE_PER_MONTH;
    }
    public function getPricePerWeek()
    {
       return self::PRICE_PER_WEEK;
    }

}