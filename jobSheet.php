<?php
require_once('/DAL/DAL.php');

$carton = new carton();

$ref = $_GET['ref'];

$fetch = $carton->getCarton($ref);

foreach ($fetch as $results){

    echo 'Ref: ' . $results['ref'];
};