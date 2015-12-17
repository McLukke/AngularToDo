<html>
<?php include('partials/head.html'); ?>
<body ng-app="todoApp">
	<div ng-controller="todoCtrl">
		<h1>There's still XXX things left to do</h1>

		<ul>
			<li ng-repeat="task in tasks">{{task}}</li>
		</ul>

		<form ng-submit="addTask()">
			<input placeholder="Add a new to-do" type="text" ng-model="newTask" />
			<input type="submit" value="Add to-do!">
		</form>
	</div>
</body>
</html>
