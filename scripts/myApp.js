var app = angular.module('quoteApp',[]);
app.controller('styleController', ['$scope', function($scope){
	$scope.styles = [{
	type: "0201",
	height: 1,
	width: 1,
	length: 2,
	breadth: 2,
	trimWidth: 3,
	trimLength: 8,
	glueFlap: 25,
	image: "/images/0201.png",
},
{
	type: '0203',
	height: 1,
	width: 2,
	length: 2,
	breadth: 2,
	trimWidth: 9,
	trimLength: 40,
	image: "/images/0203.png",
},
{
	type: '0401',
	height: 1,
	depth: 2,
	length: 2,
	breadth: 2,
	trimWidth: 9,
	trimLength: 40,
	image: "/images/0401.png",
}
];
$scope.grades=[{

	type: "125K",

}];
$scope.flutes=[{
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
}];

$scope.liners=[{
	grade: "125T",
},
{
	grade: "125K",
}];

}]);