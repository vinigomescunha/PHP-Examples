<?php
header('Content-type:text/plain;charset=UTF-8');

$value = 1 + "9.5";// $value == 10.5

$value = 1 + "-1.3e3"; // $value == -1299

$value = 1 + "test10.5";// $value == 1

$value = 1 + "10tests";// $value == 11

$value = 1 + " 10tests";// $value == 11

$value = 1 + "+ 10tests";// $value == 1

$value = 15;// $value is integer (15)

$value = (double) $value;// $value is double (15.0) (real,double or float)

$value = 3.9; // $value is double (3.9)

$value = (int) $value; // $value is integer (3) (int or integer)
