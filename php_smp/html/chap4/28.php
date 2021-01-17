<?php

class Employee
{
    private static $company = 'absdfs';

    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        self::$company = $value;
    }
}

echo Employee::getCompany(), PHP_EOL;
Employee::setCompany('alphabet');
echo Employee::getCompany(), PHP_EOL;