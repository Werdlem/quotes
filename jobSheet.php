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
	border: 1px solid black;
}
</style>
<div id="jobSheet">

    <table class="table">

        <tr style="padding: 5px">
        <tr>
        <td>Date:</td> <td style="text-align: left;">Date Stamp</td>
        <td>Ref:</td><td style="text-align: left;">{{selectedCarton.ref}}</td>
        <td>Style:</td><td style="text-align: left;">{{selectedCarton.style}}</td>
        <td>Internal Dimms:</td><td style="text-align: left;">{{selectedCarton.length + "x" + selectedCarton.width + "x" + selectedCarton.height}}</td>
        <td>Grade</td><td style="text-align: left;">{{selectedCarton.grade}}</td>
        </tr>
        <tr>
        <td>Config</td><td style="text-align: left;">{{selectedCarton.config}}</td>
        </table>
        <img src="{{selectedCarton.image}}" style="width: 100%; height: 80%">
        </div>
<script src="scripts\myApp.js"></script>