<?php

function createEmployee($array, $xmlDocument)
{
    $root = $xmlDocument->documentElement;
    $employee = $xmlDocument->createElement('Employee', ' ');
    $name = $xmlDocument->createElement('Name', $array['Name']);
    $address = $xmlDocument->createElement('Address', $array['Address']);
    $phone = $xmlDocument->createElement('Phone', $array['Phone']);
    $email = $xmlDocument->createElement('Email', $array['Email']);

    $employee->appendChild($name);
    $employee->appendChild($address);
    $employee->appendChild($phone);
    $employee->appendChild($email);

    $root->appendChild($employee);
}

function displayEmployee($employee)
{
    $array = [];
    $array['Name'] = $employee->getElementsByTagName('Name')->item(0)->nodeValue;
    $array['Address'] = $employee->getElementsByTagName('Address')->item(0)->nodeValue;
    $array['Phone'] = $employee->getElementsByTagName('Phone')->item(0)->nodeValue;
    $array['Email'] = $employee->getElementsByTagName('Email')->item(0)->nodeValue;

    return $array;
}