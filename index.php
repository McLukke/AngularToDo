<html>
<?php include('partials/head.html'); ?>
<body ng-app="todoApp">
	<div ng-controller="todoCtrl">
		<h1>There's still {{todoTotal()}} things left to do</h1>
		<br />
		<ul>
			<li ng-repeat="task in tasks">
				<span class="taskCompleted-{{task.done}}">{{task.text}}</span>
				<a href="#" ng-click="toggleComplete(task)">
					<span ng-show="task.done">Not Finished Yet...</span>
					<span ng-show="!task.done">Finished!</span>
				</a>
				<hr>
			</li>
		</ul>

		<form ng-submit="addTask()">
			<input placeholder="Add a new to-do" type="text" ng-model="newTask" />
			<input type="submit" value="Add to-do!">
		</form>
		{{newTask}}
	</div>
<style>
	span > a {
		float: right;
	}

	.taskCompleted-true {
		text-decoration: line-through;
	}

	.taskCompleted-false {
		text-decoration: none;
	}
</style>
</body>
</html>
