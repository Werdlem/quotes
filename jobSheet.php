<?php
include ('header.php')
?>

<div class="options-container" style="float: none; margin-left: auto;">
<div class="options">

<h3>Carton Select</h3>
<p>Carton: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedCarton" ng-options="x.ref for x in cartons"></select></p>
</div>
</div>
<style>
td{
	text-align: right;
	border: 1px solid grey;
}
#setup{
	width: 	auto;
	float: left;
	margin-left: 10px;
	border: 1px solid grey;
	border-radius: 10px;
	padding:5px;
	padding-right: 10px;
	padding-left: 10px;
}
</style>
<div id="jobSheet" style="padding-top: 10px">

    <table class="table">

        <tr style="padding: 5px">
        <tr>
        <td>Date:</td> <td style="text-align: left;">{{date | date:'dd-mm-yyyy'}}</td>
        <td>Ref:</td><td style="text-align: left;">{{selectedCarton.ref}}</td>
        <td>Style:</td><td style="text-align: left;">{{selectedCarton.style}}</td>
        <td>Internal Dimms:</td><td style="text-align: left;">{{selectedCarton.length + "x" + selectedCarton.width + "x" + selectedCarton.height}}</td>
        <td>Grade:</td><td style="text-align: left;">{{selectedCarton.grade}}</td>
        </tr>
        <tr>
        <td>Config</td><td style="text-align: left;">{{selectedCarton.config}}</td>
         <td>Blank Size:</td><td style="text-align: left;">{{selectedCarton.deckle + ' x ' + selectedCarton.chop}}</td>
        </table>
        <img src="{{selectedCarton.image}}" style="width: 100%; height: 80%">
        	<div id='setup'>
        <h3>Step 1</h3>
        <p>A) Chop Slit as required</p>
        <p>B) Chop Crease 1 = {{selectedCarton.chopCrease1}}
        <p>C) Chop Crease 2 = {{selectedCarton.chopCrease2}}
        <p>D) Chop Slit = {{selectedCarton.deckle}}
        </div>
        <div id='setup'>
        <h3>Step 2</h3>
        <p>A) Glue Flap Crease = {{selectedCarton.glueFlap}}
        <p>B) Deckle Crease (L) = {{selectedCarton.deckleCreaseL}}
        <p>C) Deckle Crease (W) = {{selectedCarton.deckleCreaseW}}
        <p>D) Deckle Slit = {{selectedCarton.chop}}</p>
        </div>
         <div id='setup'>
        <h3>Step 3</h3>
        <p>A) Slit 1 = 
        <p>B) Slit 2 = 
        <p>C) Slit 3 =
        <p>D) Slit 4 =
        <p><strong>NB: REPEAT FOR STEP FOR OPPOSTITE SIDE</strong>
        </div>
        <div id="setup">
        <h3>Step 4</h3>
        <p>Finish: {{selectedCarton.finish}}</p>
        </div>
        </div>

<script src="scripts\myApp.js"></script>