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
    

       $scope.boardDeckle = function(){
    	try{
    		return ($scope.selectedStyle.breadth * $scope.width * 2 +(+$scope.height) + (+$scope.selectedStyle.trimWidth) + (+$scope.selectedFlute.width))       
    	}
    	catch(x){}
    };

    $scope.boardChop = function(){
    	try{
    		return (($scope.selectedStyle.length * $scope.length )+($scope.selectedStyle.width * $scope.width) + (+$scope.selectedStyle.glueFlap) + (+$scope.selectedStyle.trimLength))
    	}
    	catch(x){}
    };

    $scope.calcSqMperBox = function(){
        try {
        return ($scope.boardDeckle() * $scope.boardChop()) 
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

    $scope.calcChopCrease1 = function(){
      try{
        return($scope.width * $scope.selectedStyle.breadth)
      }
      catch(x){}
    };

    $scope.calcChopCrease2 = function(){
      try{
        return($scope.calcChopCrease1() + (+$scope.height))
      }
      catch(x){}
    };

    $scope.sheetBoardSize = function(){
        var res = $scope.boardDeckle();
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
