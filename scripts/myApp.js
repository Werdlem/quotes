var app = angular.module('quoteApp', []);
app.controller('styleController', function($scope, $http) {
    
    $scope.liners = [{
            grade: "125T",
        },
        {
            grade: "125K",
        }
    ];

    $scope.finish =[{
    	finish: "Glued",
    	cost: 0.10
    },
    {
    	finish: "Stitched",
    	cost: 0.25
    }];

     $scope.margin =[{
    	amt: .10
    },
    {
    	amt: .20
    },
    {
     	amt: .30
     },
     {
     	amt:.40
     },
      {
     	amt: .50
     },
      {
     	amt: .60
     },
      {
     	amt: .70
     },
      {
     	amt: .80
     },
      {
     	amt: .90
     },
      {
     	amt: 1
     }];

    $scope.labour = 8;
    

       $scope.boardWidth = function(){
    	try{
    		return ($scope.height * $scope.selectedStyle.height + $scope.breadth * $scope.selectedStyle.width + (+$scope.selectedFlute.width * $scope.selectedStyle.trimWidth))       
    	}
    	catch(x){}
    };

    $scope.boardLength = function(){
    	try{
    		return ($scope.length * $scope.selectedStyle.length
            + $scope.breadth * $scope.selectedStyle.breadth
            + (+$scope.selectedFlute.width * $scope.selectedStyle.trimLength) + (+$scope.selectedStyle.glueFlap))
    	}
    	catch(x){}
    };

     $scope.calcSqMperBox = function(){
        try {
        return (($scope.height * $scope.selectedStyle.height + $scope.breadth * $scope.selectedStyle.width + (+$scope.selectedFlute.width * $scope.selectedStyle.trimWidth))
        	* ($scope.length * $scope.selectedStyle.length
            + $scope.breadth * $scope.selectedStyle.breadth
            + (+$scope.selectedFlute.width * $scope.selectedStyle.trimLength) + (+$scope.selectedStyle.glueFlap))
           ) 
         /1000000;
        } catch(x) {}
    };

    $scope.calcSqMperBoxQty = function(){
        var res = $scope.calcSqMperBox() * $scope.qty;
        if (isNaN(res)) {
            return null;
        }
        return res;
    };

    $scope.sheetBoardSize = function(){
        var res = $scope.boardWidth();
        if (isNaN(res)) {
            return null;
        }
        return res;
    };

    $scope.calculateCost = function(){
    	try{
    		return(($scope.calcSqMperBoxQty() * $scope.cost + ($scope.selectFinish.cost * $scope.qty) + ($scope.hours * $scope.labour)))
    	}
    	catch(x){}
    };
    $scope.calculateMargin = function(){
    	try{
    		return((($scope.calcSqMperBoxQty() * $scope.cost + ($scope.selectFinish.cost * $scope.qty) + ($scope.hours * $scope.labour)) * $scope.selectMargin.amt))
    	}
    	catch(x){}
    };

    $scope.printSheet = function(jobSheet) {
  var printContents = document.getElementById(jobSheet).innerHTML;
  var popupWin = window.open('', '_blank', 'width=600,height=600');
  popupWin.document.open();
  popupWin.document.write('<html><head><link rel="stylesheet" type="text/css"/></head><body onload="window.print()">' + printContents + '</body></html>');
  popupWin.document.close();
};


    $http({
        method: 'GET',
        url: './jsonData/styles.json.php'
    }).then(function(response){
        $scope.styles = response.data;
    });
    $http({
    	method: 'GET',
    	url: './jsonData/flutes.json.php'
    }).then(function(response){
    	$scope.flutes=response.data;
    });
    $http({
    	method: 'GET',
    	url: './jsonData/grades.json.php'
    }).then(function(response){
    	$scope.grades=response.data;
    });

});
