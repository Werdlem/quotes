<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getFinish();
echo json_encode($fetch);

