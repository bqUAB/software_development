angular.module('valueExample', [])
     .controller('ExampleController', ['$scope', function($scope) {
       
       $scope.names = ['Men', 'Unisex', 'Woman'];
       	
       $scope.my = { favorite: 'Woman' };
       
       $scope.message = 'Fck the world!';
       
       $scope.imageUrl = 'http://placekitten.com/g/200/400';
       
       $scope.onTap = function() {
       	$scope.imageUrl = 'http://placekitten.com/g/200/300';
       };
       
     }]);