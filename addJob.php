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
$width = $_POST['width'];
$qty = $_POST['qty'];
$deckle =  $_POST['deckle'];
$chop =  $_POST['chop'];
$chopCrease1 = $_POST['chopCrease1'];
$chopCrease2 = $_POST['chopCrease2'];
$deckleCreaseL = $_POST['deckleCreaseL'];
$deckleCreaseW = $_POST['deckleCreaseW'];
$slit = $_POST['slit'];
$finish =  $_POST['finish'];
$grade =  $_POST['grade'];
$image = $_POST['image'];
$category = $_POST['category'];
$cost = $_POST['cost'];
$margin = $_POST['margin'];
$boardQty = $_POST['boardQty'];
$config = $_POST['config'];
//add the fields found in the DB table to this page. print job sheet from this page. Posted vairables all need to be in <input>'s for the addJob DB function to work

 ?>
<p> <label type="text" name="width" ><?php echo $width ?></label>
                        <p> <label type="text" name="height" ><?php echo $height ?></label>
                        <p> <label type="text" name="style" ><?php echo $style ?></label>
                        <p> <label type="text" name="qty" ><?php echo $qty ?></label>
                         <p> <label type="text" name="deckle" ><?php echo $deckle ?></label>
                        <p> <label type="text" name="chop" ><?php echo $chop ?></label>
                        <p> <label type="text" name="chopCrease1" ><?php echo $chopCrease1 ?></label>
                        <p> <label type="text" name="chopCrease2" ><?php echo $chopCrease2 ?></label>
                        <p> <label type="text" name="deckleCreaseL" ><?php echo $deckleCreaseL ?></label>
                        <p> <label type="text" name="deckleCreaseW" ><?php echo $deckleCreaseW ?></label>
                        <p> <label type="text" name="slit" ><?php echo $slit ?></label>
                         <p> <label type="text" name="finish" ><?php echo $finish ?></label>
                        <p> <label type="text" name="grade" ><?php echo $grade ?></label>
                        <p> <label type="text" name="image" ><?php echo $image ?></label>
                        <p> <label type="text" name="category" ><?php echo $category ?></label>
                         <p> <label type="text" name="cost" ><?php echo $cost ?></label>
                          <p> <label type="text" name="margin" ><?php echo $margin ?></label>
                          <p> <label type="text" name="boardQty" ><?php echo $boardQty ?></label>
                          <p> <label type="text" name="config" >Config<?php echo $config ?></label><br/><br/>
 <!-- 
                      
                       
                        
                       
                         
                        
                        
                        <input type="Hidden" name="slit" value="15">
                        
                        
                       
                      
                        
                       
                         -->


 
 
                        <input type="text" name="width" value="<?php echo $width ?>">
                        <input type="text" name="height" value="<?php echo $height ?>">
                        <input type="text" name="style" value="<?php echo $style ?>">
                        <input type="text" name="qty" value="<?php echo $qty ?>">
                         <input type="text" name="deckle" value="<?php echo $deckle ?>">
                        <input type="text" name="chop" value="<?php echo $chop ?>">
                        <input type="text" name="chopCrease1" value="<?php echo $chopCrease1 ?>">
                        <input type="text" name="chopCrease2" value="<?php echo $chopCrease2 ?>">
                        <input type="text" name="deckleCreaseL" value="<?php echo $deckleCreaseL ?>">
                        <input type="text" name="deckleCreaseW" value="<?php echo $deckleCreaseW ?>">
                        <input type="text" name="slit" value="<?php echo $slit ?>">
                         <input type="text" name="finish" value="<?php echo $finish ?>">
                        <input type="text" name="grade" value="<?php echo $grade ?>">
                        <input type="text" name="image" value="<?php echo $image ?>">
                        <input type="text" name="category" value="<?php echo $category ?>">
                         <input type="text" name="cost" value="<?php echo $cost ?>">
                          <input type="text" name="margin" value="<?php echo $margin ?>">
                          <input type="text" name="boardQty" value="<?php echo $boardQty ?>">
                          <input type="text" name="config" value="<?php echo $config ?>">
                          <input type="text" name="length" value="<?php echo $length ?>">

 
 <button type="submit" name="addJob">addjob</button>