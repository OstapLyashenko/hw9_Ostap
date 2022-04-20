<?php

use Hillel\Menu\Baranina;
use Hillel\Menu\Govyadina;
use Hillel\Menu\ShawarmaCalculator;
use Hillel\Menu\ShawarmaOdessa;

require_once 'vendor/autoload.php';

$obj = new Govyadina();
$obj1 = new Baranina();
$obj2 = new ShawarmaOdessa();

$test = new ShawarmaCalculator();
$test->add($obj1) . '<br>';
$test->add($obj2) . '<br>';
$test->add($obj) . '<br>';
echo '<pre>';
var_dump($test->ingredients());
echo '<pre>';
var_dump($test->price());
echo '<pre>';
var_dump($test->titles());
echo '<pre>';
