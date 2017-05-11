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

if (isset($_POST['addJob']))
{
$ref = $_POST['ref'];
$initials = $_POST['initials'];
$style = $_POST['style'];
$height =  $_POST['height'];
$length =  $_POST['length'];
$breadth = $_POST['breadth'];
$qty = $_POST['qty'];
$deckle =  $_POST['deckle'];
$chop =  $_POST['chop'];
$chopCrease = $_POST['chopCrease'];
$deckleCrease = $_POST['deckleCrease'];
$slit = $_POST['slit'];
$finish =  $_POST['finish'];
$grade =  $_POST['grade'];
$image = $_POST['image'];

$carton->addJob($ref, $style, $height, $length, $breadth, $qty, $deckle, $chop, $chopCrease, $deckleCrease, $slit, $finish, $grade, $image, $initials);
echo 'Success!';
};