var app = angular.module('quoteApp', []);
app.controller('styleController', function($scope, $http) {
    $scope.styles = null;
    $scope.grades = [{

        type: "125K",

    }];
    $scope.flutes = [{
            flute: "B",
            thickness: 3,
            image: "/images/bFlute.png",
        },
        {
            flute: "BC",
            thickness: 7,
            image: "/images/bcFlute.png",
        },
        {
            flute: "E",
            thickness: 2,
            image: "/images/eFlute.png",
        },
        {
            flute: "C",
            thickness: 4,
            image: "/images/cFlute.png",
        }
    ];

    $scope.liners = [{
            grade: "125T",
        },
        {
            grade: "125K",
        }
    ];

    $scope.height = null;

    $scope.calcSqMperBox = function(){
        try {
        return ($scope.height * $scope.selectedStyle.height + $scope.breadth * $scope.selectedStyle.width + $scope.selectedFlute.thickness*3)
            * ($scope.length * $scope.selectedStyle.length
            + $scope.breadth * $scope.selectedStyle.breadth
            + $scope.selectedFlute.thickness * 8 + $scope.selectedStyle.glueFlap) / 1000000;
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
        url: '/styles.json.php'
    }).then(function(response){
        $scope.styles = response.data;
    });

});
