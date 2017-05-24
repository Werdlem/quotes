<?php
include ('header.php')
?>

<div class="options-container" style="float: none; margin-left: auto;">
<div class="options">

<h3>Carton Select</h3>
<p>Carton: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedCarton" ng-options="x.ref for x in cartons"></select></p>
</div>
</div>
<div id="jobSheet">

    <table class="table">

        <tr style="padding: 5px">
        <th>Name:</th>  <td>{{selectedCarton.ref}}</td>
            <th>Sheet Board Size:</th>  <td>{{selectedCarton.deckle}} x {{selectedCarton.chop}}</td>
            <th>Deckle Crease L:</th>    <td>{{selectedCarton.deckleCreaseL}}</td>
            <th>Chop Crease 1:</th>   <td>{{selectedCarton.chopCrease1}}</td>


            </tr>
            
            <tr>
        <th>Style:</th> <td>{{selectedCarton.style}}</td>
        <th>Grade:</th> <td>{{selectedCarton.grade}}</td>
        <th>Deckle Crease W:</th>  <td>{{selectedCarton.deckleCreaseW}}</td>
        <th>Chop Crease 2</th>  <td>{{selectedCarton.chopCrease2}}</td>
        
        </tr>
        
        <tr>
        <th>Internal Dimms:</th>    <td>(L-{{selectedCarton.length}})(W-{{selectedCarton.width}})(H-{{selectedCarton.height}})</td>
            <th>Config:</th> <td>{{selectedCarton.config}}</td>
            <th></th>   <td></td>
            <th>Slit:</th>  <td>{slit}</td>
        </tr>

        <tr>
        <th>Finish:</th><td>{{selectedCarton.finish}}</td>
        <th>Quantity:</th><td>{{selectedCarton.qty}}</td>
         <th>Board Qty:</th><td>{{selectedCarton.boardQty}}</td>
        </tr>
        </table>
        <img src="{{selectedCarton.image}}" style="width: 100%; height: 80%">
        </div>
<script src="scripts\myApp.js"></script>