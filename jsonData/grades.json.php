<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getGrades();
echo json_encode($fetch);

