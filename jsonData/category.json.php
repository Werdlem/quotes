<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getCategories();
echo json_encode($fetch);

