// js goes here
var todoApp = angular.module('todoApp', []);

todoApp.controller('todoCtrl', ['$scope', function($scope) {
	$scope.tasks = [
		{
			text: 'brush teeth',
			done: false
		},
		{
			text: 'comb hair',
			done: false
		},
		{
			text: 'fold bedsheets',
			done: false
		}
	];

	$scope.todoTotal = function() {
		var uncompletedTasks = 0;

		$scope.tasks.forEach(function(currentElement, index, array) {
			// console.log(currentElement);
			// console.log(index);
			// console.log(array);

			if (currentElement.done === false) uncompletedTasks += 1;
		});
		return uncompletedTasks;
	};

	$scope.addTask = function() {
		if ($scope.newTask === "" || $scope.newTask === undefined) {
			console.log('please enter a value');
		} else {
			$scope.tasks.push(
				{
					text: $scope.newTask,
					done: false
				}
			);
			$scope.newTask = "";
		}
	};

	$scope.toggleComplete = function(finishedTask) {
		console.log(finishedTask.done);

		finishedTask.done = !finishedTask.done;
	};
}]);
