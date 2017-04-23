<!DOCTYPE html>
<head>
<html ng-app="quoteApp">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="css/damasco-style.css" type="text/css" />
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/dateInput.css" />
</html>

<body ng-controller="styleController as style">

    <style>
        
    </style>
    <form method="post" action="posted.php">
        <h1></h1>
        <div class="container">
           <div class="panel-wrapper" style="">
           <h2>Step 1</h2>
            <div class="panel panel-primary">
            <div class="panel-heading">
            <h3>Select Style</h3></div>
            <div class="panel-footer">
            <select ng-model="selectedStyle" ng-options="x.name for x in styles"></select>
            <img ng-src="{{selectedStyle.image}}">
            </div>
            </div>

             <div class="panel panel-primary">
            <div class="panel-heading">
            <h3>Select Flute</h3></div>
             <div class="panel-footer">
            <select ng-model="selectedFlute" ng-options="x.type for x in flutes"></select>
             <img ng-src="{{selectedFlute.image}}">
             </div>
             </div>

            <div class="panel panel-primary">
            <div class="panel-heading">
            <h3>Select Grade</h3></div>
             <div class="panel-footer">
            <select ng-model="selectedGrade" ng-options="x.type for x in grades"></select>
            </div>
            </div>
            <div class="panel panel-primary" >
            <div class="panel-heading">          
            <h3>Select Liner</h3></div>
            <div class="panel-footer">
            <select ng-model="selectedLiner" ng-options="x.grade for x in liners"></select>
            </div>
            </div>
            </div>


          <div class="panel-wrapper">
              <div class="dimms">
              <h2>Step 2</h2>
            <div class="panel panel-primary">
            <div class="panel-heading">          
                <h2>Carton Dimms</h2>
                </div>
               <div class="panel-footer">
                <p>Length: <input type="text" ng-model="length"></p>

                <p>Breadth: <input type="text" ng-model="breadth"></p>

                <p>Height: <input type="text" ng-model="height"></p>

                <p>Qty: <input type="text" ng-model="qty"></p>
                </div>
                </div>
            <div class="panel panel-primary">
            <div class="panel-heading">       
                <h2>Costing</h2></div>
                <div class="panel-footer">
                <p>£ per SqM: <input type="text" ng-model="cost"></p>
                <p>Labour: <input type="text" ng-model="labour"></p>
                </div>
                </div>
                </div>
                </div>

            <div id="summary" style="float: left; width: 900px">
           <h3>Summary</h3>
            <p>
                <h3>Style: {{selectedStyle.name}} </h3>
                <input type="hidden" name="style" value="{{selectedStyle.type}}">
                <!--SUMMARY OF CARTON SPEC-->
                <h3>Grade: {{selectedFlute.type
                }}{{selectedGrade.type}}{{selectedLiner.grade}} </h3>
                <input type="hidden" name="details" value="{{selectedGrade.type}}/{{selectedFlute.flute}}/{{selectedLiner.grade}}">

                <!--calculation for the sheet board size Height + Base X l * 2 + b * 2 + 25 -->
                <h3>Blank Size: <span>{{boardWidth()}} x {{boardLength()}}</span></h3>

                <!--SQUARE M PER CARTON-->
                <h3>Square M per box: {{calcSqMperBox()}}</h3>
                 
                <!--CALCULATE THE TOTAL SQUARE M OF BOARD REQUIRED-->
                <h3>Total Square M:
                    <span ng-if="calcSqMperBoxQty() !== null">{{calcSqMperBoxQty()}}</span>
                    <span ng-if="calcSqMperBoxQty() === null">Can't do that yet</span>
                </h3>
                <h3>Cost: 
                    <span ng-if="calcSqMperBoxQty() !==null">{{calcSqMperBoxQty() * cost}}</span></h3>


                <label>L: {{length}}</label><br/>
                <label>B: {{breadth}}</label><br/>
                <label>H: {{height}}</label>
                <br/>
                </p>
                </div>

                <img ng-src="{{selectedStyle.image}}" />


                <script src="scripts\myApp.js"></script>

</body>

</html>
