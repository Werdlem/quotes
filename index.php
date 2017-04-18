<!DOCTYPE html>
<html ng-app="quoteApp" >
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="css/damasco-style.css"  type="text/css"/>
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/dateInput.css" />
<body ng-controller="styleController as style">
<form method="post" action="posted.php">
<div class="container">
<h2>Select Style</h2>
<select ng-model="selectedStyle" ng-options="x.type for x in styles"></select>
<h2>Select Grade</h2>	
<select ng-model="selectedGrade" ng-options="x.type for x in grades"></select>
<h2>Select Flute</h2>
<select ng-model="selectedFlute" ng-options="x.flute for x in flutes"></select>
<h2>Select Liner</h2>
<select ng-model="selectedLiner" ng-options="x.grade for x in liners"></select>	

<h3>Length: <input type="text" ng-model="length" ></h3>

<h3>Breadth: <input type="text" ng-model="breadth" ></h3>

<h3>Height: <input type="text" ng-model="height" ></h3>

<p><h3>Style: {{selectedStyle.type}} </h3>
<input type="hidden" name="style" value="{{selectedStyle.type}}">

<h3>Grade: {{selectedFlute.flute}}{{selectedGrade.type}}{{selectedLiner.grade}} </h3>
<input type="hidden" name="details" value="{{selectedGrade.type}}/{{selectedFlute.flute}}/{{selectedLiner.grade}}">

<h3>Blank Size: {{height * selectedStyle.height ++ breadth * selectedStyle.width ++ selectedStyle.trimWidth}} X 
{{length * selectedStyle.length ++ breadth * selectedStyle.breadth ++ selectedStyle.trimLength}}</h3>

<label>{{height * selectedStyle.height ++ breadth * selectedStyle.width * length * selectedStyle.length ++ breadth * selectedStyle.breadth / 1000000}}</label>


<label>{{selectedtrimWidth ++ height * selectedStyle.height ++ breadth * selectedStyle.width * length * selectedStyle.length ++ breadth * selectedStyle.breadth ++ selectedStyle.trimLength}} </label>


<button type="submit">submit</button><br/>

</div>


<script src ="scripts\myApp.js"></script>



</body>
</html>