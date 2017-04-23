var app = angular.module('quoteApp', []);
app.controller('styleController', function($scope, $http) {
    
    $scope.liners = [{
            grade: "125T",
        },
        {
            grade: "125K",
        }
    ];

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
