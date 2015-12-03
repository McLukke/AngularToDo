<html>
<?php include('partials/head.html'); ?>
<body ng-app>
	<div ng-controller="ToDoCtrl">
		<h1>There's still XXX things left to do</h1>

		<ul>
			<li></li>
		</ul>

		<form>
			<input placeholder="search for stuff here" type="text" ng-model="formText" />
			<button class="addMore" ng-click="addMore">Add To Do!</button>
		</form>
	</div>
</body>
</html>
