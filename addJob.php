<?php 

include ('header.php')
?>

<form method="post" action="action.php">
<p>Refrence: <input type="text" name="ref">
<p>initials: <input type="text" name="initials">

<?php 
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

//add the fields found in the DB table to this page. print job sheet from this page. Posted vairables all need to be in <input>'s for the addJob DB function to work

echo '<p>Style: <input type="text" name="style" value="'.$style .'">'.
 '<p>Height: '.$height.
 '<p>Breadth: '.$breadth.
 '<p>Length: '.$length.
 '<p>Spec: '.$grade.
 '<p><img src="'.$image.'">';
 ?>
 
 <input type="hidden" name="length" value="<?php echo $length ?>">
                        <input type="hidden" name="breadth" value="<?php echo $breadth ?>">
                        <input type="hidden" name="height" value="<?php echo $height ?>">
                        <input type="hidden" name="style" value="<?php echo $style ?>">
                        <input type="hidden" name="qty" value="<?php echo $qty ?>">
                         <input type="hidden" name="deckle" value="<?php echo $deckle ?>">
                        <input type="hidden" name="chop" value="<?php echo $chop ?>">
                        <input type="hidden" name="chopCrease" value="<?php echo $chopCrease ?>">
                        <input type="hidden" name="deckleCrease" value="<?php echo $deckleCrease ?>">
                        <input type="hidden" name="slit" value="<?php echo $slit ?>">
                         <input type="hidden" name="finish" value="<?php echo $finish ?>">
                        <input type="hidden" name="grade" value="<?php echo $grade ?>">
                        <input type="hidden" name="image" value="<?php echo $image ?>">

 
 <button type="submit" name="addJob">addjob</button>