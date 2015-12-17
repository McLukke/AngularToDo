// js goes here
var todoApp = angular.module('todoApp', []);

todoApp.controller('todoCtrl', ['$scope', function($scope) {
	$scope.tasks = ['brush teeth', 'comb hair', 'fold bedsheets'];

	$scope.addTask = function() {
		
	}
}]);