<?php
require 'vendor/autoload.php';

/**
 * The name of the company can come from anywhere,
 * you can store it in db, or in .env
 */

$companyName = 'Companies\CompanySecond';
$companyName = 'Companies\CompanyFirst';

function resolveCompany($companyClassName)
{
    $instance = new ReflectionClass($companyClassName);
    return $instance->newInstance();
}

function resolvePackage(\Factories\PaymentPackageResolver $packageResolver)
{
     $packageResolver->amount();
}

$company = resolveCompany($companyName);

resolvePackage(new \Factories\PaymentPackagePerHourResolver(34, $company));
//resolvePackage(new \Factories\PaymentPackagePerDayResolver(34, $company));

