<?php
namespace Companies;

class CompanySecond extends CompanyResolver implements Company {

    public const PRICE_PER_HOUR = 14;
    public const PRICE_PER_DAY = 40;
    public const PRICE_PER_MINUTE = 4;
    public const PRICE_PER_WEEK = 400;
    public const PRICE_PER_MONTH = 4000;

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