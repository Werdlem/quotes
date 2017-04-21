<?php

require_once('/DAL/DAL.php');

$carton = new carton();


if (isset($_POST['add']))
{

$style = $_POST['style'];
$height =  $_POST['height'];
$width =  $_POST['width'];
$length =  $_POST['length'];
$breadth = $_POST['breadth'];
$glueFlap = $_POST['glueFlap'];
$trimWidth = $_POST['trimWidth'];
$trimLength = $_POST['trimLength'];
$image = $_POST['image'];

$carton->addStyle($style,$height, $width, $length,$breadth,$glueFlap, $trimWidth, $trimLength, $image);
header('quotes/');

echo $style;
};