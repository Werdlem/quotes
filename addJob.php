
Refrence: <input type="text" name="ref">
<?php 

$style = $_POST['style'];
$height =  $_POST['height'];
$length =  $_POST['length'];
$breadth = $_POST['breadth'];
$details = $_POST['details'];

echo '<p>Style: '.$style .
 '<p>Height: '.$height.
 '<p>Breadth: '.$breadth.
 '<p>Length: '.$length.
 '<p>Spec: '.$details;


