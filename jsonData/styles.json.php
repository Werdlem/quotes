<?php 

require_once ('../DAL/DAL.php');

$dal = new carton();
$fetch = $dal->getStyles();
echo json_encode($fetch);

