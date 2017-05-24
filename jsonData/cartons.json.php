<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getCartons();
echo json_encode($fetch);

