<?php 

include ('header.php')
?>
<div id="add" style="width: 250px">
<form method="post" action="action.php">
<p>Refrence: <input type="text" style="float: right;" name="ref">
<p>initials: <input type="text" style="float: right;" name="initials">

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
$glueFlap = $_POST['glueFlap'];
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
  <p> Style:  <label type="text" name="style" ><?php echo $style ?></label>
 <p> Length: <label type="text" name="length" ><?php echo $length ?></label>
<p> Width: <label type="text" name="width" ><?php echo $width ?></label>
                        <p>Height: <label type="text" name="height" ><?php echo $height ?></label>
                       <p> Finish: <label type="text" name="finish" ><?php echo $finish ?></label>
                       </div>
                       <!--
                        <p> <label type="text" name="qty" ><?php echo $qty ?></label>
                         <p> <label type="text" name="deckle" ><?php echo $deckle ?></label>
                        <p> <label type="text" name="chop" ><?php echo $chop ?></label>
                        <p> <label type="text" name="chopCrease1" ><?php echo $chopCrease1 ?></label>
                        <p> <label type="text" name="chopCrease2" ><?php echo $chopCrease2 ?></label>
                        <p> <label type="text" name="deckleCreaseL" ><?php echo $deckleCreaseL ?></label>
                        <p> <label type="text" name="deckleCreaseW" ><?php echo $deckleCreaseW ?></label>
                        <p> <label type="text" name="glueFlap" ><?php echo $glueFlap ?></label>
                         
                        <p> <label type="text" name="grade" ><?php echo $grade ?></label>
                        <p> <label type="text" name="image" ><?php echo $image ?></label>
                        <p> <label type="text" name="category" ><?php echo $category ?></label>
                         <p> <label type="text" name="cost" ><?php echo $cost ?></label>
                          <p> <label type="text" name="margin" ><?php echo $margin ?></label>
                          <p> <label type="text" name="boardQty" ><?php echo $boardQty ?></label>
                          <p> <label type="text" name="config" >Config<?php echo $config ?></label><br/><br/>

                      
                       
                        
                       
                         
                        
                        
                        <input type="Hidden" name="slit" value="15">
                        
                        
                       -->
                      
                        
                       
                    


 
 
                        <input type="HIDDEN" name="width" value="<?php echo $width ?>">
                        <input type="HIDDEN" name="height" value="<?php echo $height ?>">
                        <input type="HIDDEN" name="style" value="<?php echo $style ?>">
                        <input type="HIDDEN" name="qty" value="<?php echo $qty ?>">
                         <input type="HIDDEN" name="deckle" value="<?php echo $deckle ?>">
                        <input type="HIDDEN" name="chop" value="<?php echo $chop ?>">
                        <input type="HIDDEN" name="chopCrease1" value="<?php echo $chopCrease1 ?>">
                        <input type="HIDDEN" name="chopCrease2" value="<?php echo $chopCrease2 ?>">
                        <input type="HIDDEN" name="deckleCreaseL" value="<?php echo $deckleCreaseL ?>">
                        <input type="HIDDEN" name="deckleCreaseW" value="<?php echo $deckleCreaseW ?>">
                        <input type="HIDDEN" name="glueFlap" value="<?php echo $glueFlap ?>">
                         <input type="HIDDEN" name="finish" value="<?php echo $finish ?>">
                        <input type="HIDDEN" name="grade" value="<?php echo $grade ?>">
                        <input type="HIDDEN" name="image" value="<?php echo $image ?>">
                        <input type="HIDDEN" name="category" value="<?php echo $category ?>">
                         <input type="HIDDEN" name="cost" value="<?php echo $cost ?>">
                          <input type="HIDDEN" name="margin" value="<?php echo $margin ?>">
                          <input type="HIDDEN" name="boardQty" value="<?php echo $boardQty ?>">
                          <input type="HIDDEN" name="config" value="<?php echo $config ?>">
                          <input type="HIDDEN" name="length" value="<?php echo $length ?>">
                    
 
 <button type="submit" name="addJob">addjob</button>