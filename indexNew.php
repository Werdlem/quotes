<?php
include ('header.php')
?>

<div class="options-container">
<div class="options">

<h3>Carton Select</h3>
<p>Style: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedStyle" ng-options="x.style for x in styles"></select></p>
<p>Flute: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedFlute" ng-options="x.flute for x in flutes" ng-init="selectedFlute = flutes[0]" ></select></p>
<p>Grade: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedGrade" ng-options="x.grade for x in grades" ng-init="selectedGrade = type[0]" ></select></p>
<p>Liner: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedLiner" ng-options="x.liner for x in liners" ng-init="selectedLiner = liner[0]" ></select></p>

<h3>Carton Dimms</h3>
<p>Length: <input type="text" ng-model="length"></p>
<p>Width: <input type="text" ng-model="width"></p>
<p>Height: <input type="text" ng-model="height"></p>
<p>Finish: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedFinish" ng-options="x.finish for x in finish" ng-init="selectedFinish = finish[0]" ></select></p>
<p>Category: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedCategory" ng-options="x.category for x in category" ng-init="selectedCategory = category[0]" ></select></p>
<p>Qty: <input type="text" name="qty" ng-model="qty"></p>

<h3>Costing</h3>
<p>£ per SqM: <input type="text" ng-model="cost"></p>
 <p>Labour: <input type="text" ng-model="hours" placeholder="hours"></p>
<p>Margin: <select style="float: right; width: 174px; height: 26px;" ng-model="selectedMargin" ng-options="x.margin for x in margin" ng-init="selectMargin = margin[0]" ></select></p>
<p>Delivery: <input type="text" ng-model="delivery"></p>
</div>
</div>

<style>

.visible{
	border: 1px solid #99ccff;
}
.invisible{
	display: none;
}

</style>

<div class="results">

<p><img ng-if="selectedStyle.image !==null" ng-src="{{selectedStyle.image}}"></p>
<p><img ng-src="{{selectedFlute.image}}"></p>
<p><span ng-if="cartonGrade() !==null"><strong>Board Grade:</strong> {{cartonGrade()}}</span></p>
<p><span ng-if="sheetBoardSize() !==null"><strong>Blank Size:</strong> {{boardDeckle()}} x {{boardChop()}}</span></p>

<p><span ng-if="calcSqMperBox() !==null"><strong> Square M per box: </strong> {{calcSqMperBox() | number:3}}</span></p>
<p><span ng-if="calcSqMperBoxQty() !== null"><strong>Total Square M: </strong> {{calcSqMperBoxQty() | number : 3}}</span></p>
<p><span ng-if="calculateCost() !==null"><strong>Cost:</strong> {{calculateCost() | currency: '£' }}</span></p>
<p><span ng-if="calculateMargin() !==null"><strong>Margin:</strong> {{calculateMargin() | currency: '£'}}</span></p>
<p><span ng-if="calculateMargin() !==null"><strong>Margin per box:</strong> {{calculateMargin() /(qty) | currency: '£'}}</span></p>
<p><span ng-if="calculateTotal() !==null"><strong>Total:</strong> {{calculateTotal() | currency: '£' }}</span></p>


<p><span ng-if="calcChopCrease1() !==null"><strong>Chop Crease 1:</strong> {{calcChopCrease1()}}</span></p>
<p><span ng-if="calcChopCrease1() !==null"><strong>Chop Crease 2:</strong> {{calcChopCrease2()}}</span></p>
</div>
</div>
<br/><br/>
<!--Hidden fields for page Posting-->
                        <input type="text" name="length" value="{{length}}">
                        <input type="text" name="width" value="{{width}}">
                        <input type="text" name="height" value="{{height}}">
                        <input type="text" name="style" value="{{selectedStyle.name}}">
                        <input type="text" name="qty" value="{{qty}}">
                         <input type="text" name="deckle" value="{{boardDeckle()}}">
                        <input type="text" name="chop" value="{{boardChop()}}">
                        <input type="text" name="chopCrease" value="{{boardLength() + 55}}">
                        <input type="text" name="deckleCrease" value="15">
                        <input type="text" name="slit" value="15">
                         <input type="text" name="finish" value="{{selectedFinish.finish}}">
                        <input type="text" name="grade" value="{{selectedFlute.type}}{{selectedGrade.type}}{{selectedLiner.grade}}">
                        <input type="text" name="image" value="{{selectedStyle.image}}">
                        <input type="text" name="image" value="{{cost | currency: '£'}}">
                        <input type="text" name="image" value="{{margin}}">

    <!--end-->
<script src="scripts\myApp.js"></script>