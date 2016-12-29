var myApp = angular.module("myModule",[]);

var myController = function ($scope){
	$scope.message = "Fck the world!";
};

myApp.controller("myController", myController);

