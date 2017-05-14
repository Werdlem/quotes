<?php
include ('header.php')
?>

<style>
 .jobSheet{
    display: none;
}

</style>

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
                    <select ng-model="selectedFlute" ng-options="x.type for x in flutes" ng-init="selectedFlute = flutes[0]" ></select>
                    <img ng-src="{{selectedFlute.image}}">
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Select Grade</h3></div>
                    <div class="panel-footer">
                        <select ng-model="selectedGrade" ng-options="x.type for x in grades" ng-init="selectedGrade = type[0]" ></select>
                    </div>
                </div>
                <div class="panel panel-primary" >
                    <div class="panel-heading">          
                        <h3>Select Liner</h3></div>
                        <div class="panel-footer">
                            <select ng-model="selectedLiner" ng-options="x.grade for x in liners" ng-init="selectedLiner = grade[0]" ></select>
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

                            <p>Width: <input type="text" ng-model="width"></p>

                            <p>Height: <input type="text" ng-model="height"></p>
                            <p>Finish: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedFinish" ng-options="x.finish for x in finish" ng-init="selectedFinish = finish[0]" ></select></p>

                            <p>Qty: <input type="text" name="qty" ng-model="qty"></p>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">       
                            <h2>Costing</h2></div>
                            <div class="panel-footer">
                                <p>£ per SqM: <input type="text" ng-model="cost"></p>
                                <p>Labour: <input type="text" ng-model="hours" placeholder="hours"></p>
                                <p>Margin: <select style="float: right; width: 174px; height: 26px;" ng-model="selectMargin" ng-options="x.amt for x in margin" ng-init="selectMargin = margin[0]" ></select></p>
                                <p>Delivery: <input type="text" ng-model="delivery"></p>
                            </div>
                        </div>
                    </div>

                </div>
                <button ng-click="printSheet('jobSheet');">Print Job Sheet</button>     
                </form>

                <div id="summary" style="float: left; width: 900px">
                 
                 <form method="post" action="addJob.php">
                 <h3 style="text-decoration: underline;">Summary</h3>
                    <p>
                        <span><h3>Style: {{selectedStyle.name}} </h3></span>
                        <span><h3>Chop Crease 1: {{calcChopCrease1()}}</h3></span>
                        <span><h3>Chop Crease 2: {{calcChopCrease2()}}</h3></span>

                                            
                        <!--SUMMARY OF CARTON SPEC-->
                        <h3>Grade: {{selectedFlute.type
                        }}{{selectedGrade.type}}{{selectedLiner.grade}} </h3>
                       

                        <!--calculation for the sheet board size Height + Base X l * 2 + b * 2 + 25 -->
                        <h3>Blank Size: <span ng-if="sheetBoardSize() !==null">{{boardDeckle()}} x {{boardChop()}}</span></h3>

                        <!--SQUARE M PER CARTON-->
                        <h3>Square M per box: {{calcSqMperBox() | number:3}}</h3>

                        <!--CALCULATE THE TOTAL SQUARE M OF BOARD REQUIRED-->
                        <h3>Total Square M:
                            <span ng-if="calcSqMperBoxQty() !== null">{{calcSqMperBoxQty() | number : 3}}</span>
                            <span ng-if="calcSqMperBoxQty() === null">Can't do that yet</span>
                        </h3>
                        <h3>Cost: <span>{{calculateCost() | currency: '£' }}</span></h3>
                        <h3>Margin: {{calculateMargin() | currency: '£'}}</h3>
                        <h3>Margin per box: {{calculateMargin() /(qty) | currency: '£'}}</h3>
                        <h3>Total: {{calculateCost() + calculateMargin() | currency: '£' }}</h3>
                        <label>L: {{length}}</label><br/>
                        <label>B: {{width}}</label><br/>
                        <label>H: {{height}}</label>
                        <!--Hidden fields for page Posting-->
                        <input type="hidden" name="length" value="{{length}}">
                        <input type="hidden" name="breadth" value="{{breadth}}">
                        <input type="hidden" name="height" value="{{height}}">
                        <input type="hidden" name="style" value="{{selectedStyle.name}}">
                        <input type="hidden" name="qty" value="{{qty}}">
                         <input type="hidden" name="deckle" value="{{boardWidth()}}">
                        <input type="hidden" name="chop" value="{{boardLength()}}">
                        <input type="hidden" name="chopCrease" value="{{boardLength() + 55}}">
                        <input type="hidden" name="deckleCrease" value="15">
                        <input type="hidden" name="slit" value="15">
                         <input type="hidden" name="finish" value="{{selectedFinish.finish}}">
                        <input type="hidden" name="grade" value="{{selectedFlute.type}}{{selectedGrade.type}}{{selectedLiner.grade}}">
                        <input type="hidden" name="image" value="{{selectedStyle.image}}">
                        
                        <br/>
                    </p>
                </div>
                <img ng-src="{{selectedStyle.image}}" />

               <button type="submit">Save Job</button> 
            </form>
            
        </div>


        <!--job sheet record-->

        <div class="jobSheet" >
            <div id="jobSheet">
             <h3 style="text-decoration: underline;">Job Sheet</h3>

<style>
@page{
    size: landscape;

}

table{
  width: 70%; 
  float: right;
border-collapse: collapse;
}
table,th,td{
    border: 1px solid black;
    
}

th{
    
    text-align: right;
    font-size: 14px;
   
}
td{
    
    text-align: left;
    font-size: 14px;
  
}
</style>

<div class="jobSheet">
<div>

    <table>

        <tr>
        <th>Name:</th>  <td>{name}</td>
            <th>Sheet Board Size:</th>  <td>{{boardWidth()}} x {{boardLength()}}</td>
            <th>Deckle:</th>    <td>{{boardWidth()}}</td>
            <th>Chop Crease:</th>   <td>{{boardLength() + 55}}</td>


            </tr>
            
            <tr>
        <th>Style:</th> <td>{{selectedStyle.name}}</td>
        <th>Grade:</th> <td>{{selectedFlute.type}}{{selectedGrade.type}}{{selectedLiner.grade}}</td>
        <th>Chop:</th>  <td>{{boardLength()}}</td>
        <th>Deckle Crease</th>  <td>{deckle crease}</td>
        
        </tr>
        
        <tr>
        <th>Internal Dimms:</th>    <td>{{length}}x{{breadth}}x{{height}}</td>
            <th>Flute:</th> <td>{{selectedFlute.type}}</td>
            <th></th>   <td></td>
            <th>Slit:</th>  <td>{slit}</td>
        </tr>

        <tr>
        <th>Finish:</th><td>{{selectedFinish.finish}}</td>
        <th>Quantity:</th><td>{{qty}}</td>
        </tr>
        </table>
         <p><img src="/css/images/dam.png" style=" overflow: auto;"></p>
         </div>
        <img ng-src="{{selectedStyle.image}}">

</div>
<script src="scripts\myApp.js"></script>
                             </div>
                         </body>

                         </html>
