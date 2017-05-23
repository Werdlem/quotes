<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getLiners();
echo json_encode($fetch);

