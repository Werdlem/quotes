<!DOCTYPE html>
<html ng-app="quoteApp" >
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="css/damasco-style.css"  type="text/css"/>
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/dateInput.css" />
<body ng-controller="styleController as style">

<style>
	.container{

		padding-top: 50px
	}
	.dimms{
		padding-top: 20px;
		width: 250px;
			}
	input{
		float:right;

	}

	#imgs {
			float: right; 

	}
	#imgs img{
		display: block;
	}

</style>
<form method="post" action="posted.php">
<h1></h1>
<div class="container">
<div id="imgs">
<img ng-src="{{selectedStyle.image}}"/>
<img ng-src="{{selectedFlute.image}}"/>
</div>
<h3>Select Style</h3>
<select ng-model="selectedStyle" ng-options="x.type for x in styles"></select>
<h3>Select Flute</h3>
<select ng-model="selectedFlute" ng-options="x.flute for x in flutes"></select>
<h3>Select Grade</h3>	
<select ng-model="selectedGrade" ng-options="x.type for x in grades"></select>
<h3>Select Liner</h3>
<select ng-model="selectedLiner" ng-options="x.grade for x in liners"></select>	

<div class="dimms">
<h2>Carton Dimms</h2>
<p>Length: <input type="text" ng-model="length" ></p>

<p>Breadth: <input type="text" ng-model="breadth" ></p>

<p>Height: <input type="text" ng-model="height" ></p>

<p>Qty: <input type="text" ng-model="qty"></p>

<h2>Costing</h2>
<p>£ per SqM: <input type="text" ng-model="cost"></p>
<p>Labour: <input type="text" ng-model="labour"></p>
</div>

<br/>
<h3>---------------------------Summary----------------------------------------</h3>
<br />
<p><h3>Style: {{selectedStyle.type}} </h3>
<input type="hidden" name="style" value="{{selectedStyle.type}}">
<!--SUMMARY OF CARTON SPEC-->
<h3>Grade: {{selectedFlute.flute}}{{selectedGrade.type}}{{selectedLiner.grade}} </h3>
<input type="hidden" name="details" value="{{selectedGrade.type}}/{{selectedFlute.flute}}/{{selectedLiner.grade}}">

<!--calculation for the sheet board size Height + Base X l * 2 + b * 2 + 25 -->
<h3>Blank Size: <span>{{(+height) * (+selectedStyle.height) ++ (+breadth) * 
(+selectedStyle.width) ++ (+selectedFlute.thickness) * 
(+selectedStyle.trimWidth)}} X 
{{(+length) * (+selectedStyle.length) 
++ (+breadth) * (+selectedStyle.breadth) 
++ (+selectedFlute.thickness) * (+selectedStyle.trimLength) ++ (+selectedStyle.glueFlap)}}</span></h3>

<!--SQUARE M PER CARTON-->
<h3>Square M per box: {{(height * selectedStyle.height ++ breadth * selectedStyle.width ++ selectedFlute.thickness*3)
 * (length * selectedStyle.length 
++ breadth * selectedStyle.breadth
++ selectedFlute.thickness * 8 ++ selectedStyle.glueFlap) / 1000000}}</h3>

<!--CALCULATE THE TOTAL SQUARE M OF BOARD REQUIRED-->
<h3>Total Square M: {{(height * selectedStyle.height ++ breadth * selectedStyle.width ++ selectedFlute.thickness*3)
 * (length * selectedStyle.length 
++ breadth * selectedStyle.breadth
++ selectedFlute.thickness * 8 ++ selectedStyle.glueFlap) / 1000000 * qty}}</h3>


<label>L: {{length}}</label><br/>
<label>B: {{breadth}}</label><br/>
<label>H: {{height}}</label>
<br/>

<img ng-src="{{selectedStyle.image}}"/>


<script src ="scripts\myApp.js"></script>

</body>
</html>