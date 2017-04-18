var app = angular.module('quoteApp',[]);
app.controller('styleController', ['$scope', function($scope){
	$scope.styles = [{
	type: "0201",
	height: 1,
	width: 1,
	length: 2,
	breadth: 2,
	trimWidth: 9,
	trimLength: 41,
},
{
	type: "0203",
	height: "1",
	depth: "2",
	length: "2",
	breadth: "2",
	trimWidth: 9,
	trimLength: 40,
}
];
$scope.grades=[{

	type: "125K",
}];
$scope.flutes=[{
	flute: "B",
},
{
	flute: "C",
}];

$scope.liners=[{
	grade: "125T",
},
{
	grade: "125K",
}];

}]);