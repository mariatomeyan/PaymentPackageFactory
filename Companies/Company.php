<?php
namespace Companies;

interface Company {
    public function getPricePerMinute();
    public function getPricePerMonth();
    public function getPricePerHour();
    public function getPricePerWeek();
}