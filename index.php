<!DOCTYPE html>
<html ng-app="quoteApp" >
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body ng-controller="styleController as style">
<form method="post" action="posted.php">
<div>
<h2>Select Style</h2>
<select ng-model="selectedStyle" ng-options="x.type for x in styles"></select>
<h2>Select Grade</h2>	
<select ng-model="selectedGrade" ng-options="x.type for x in grades"></select>
<h2>Select Flute</h2>
<select ng-model="selectedFlute" ng-options="x.flute for x in flutes"></select>
<h2>Select Liner</h2>
<select ng-model="selectedLiner" ng-options="x.grade for x in liners"></select>	

<p>Length: <input type="text" ng-model="length">

<p>width: <input type="text" ng-model="breadth">

<p>height: <input type="text" ng-model="height">

<p><h3>Style: <input type="text" name="style" value="{{selectedStyle.type}}"><br/>

Grade: <input type="text" name="details" value="{{selectedGrade.type}}/{{selectedFlute.flute}}/{{selectedLiner.grade}}"></h3>
<button type="submit">submit</button>

<input type="text" value="{{height * selectedStyle.height ++ breadth * selectedStyle.depth ++ selectedStyle.trimWidth}}" >
<input type="text"  value="{{length * selectedStyle.length ++ breadth * selectedStyle.breadth ++ selectedStyle.trimLength}}" >

{{width * length}}

</div>


<script src ="scripts\myApp.js"></script>



</body>
</html>