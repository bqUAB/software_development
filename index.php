<!doctype html>
<html>
<script src="include/scripts/angular.min.js"></script>
<script src="include/scripts/script.js"></script>
<script src="include/scripts/example.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap.min.js"></script>

	<body>
	<div ng-app="valueExample" ng-controller="ExampleController">
		<h2>Which is your favorite?</h2>
     	<label ng-repeat="name in names" for="{{name}}">
       			{{name}}
        <input type="radio" ng-model="my.favorite" ng-value="name" id="{{name}}" name="favorite">
     	</label>
   		<div>You chose {{my}}</div>
 	</div>
 
 	<div ng-app="myModule" ng-controller="myController">
			{{ message }}
		</div>

	</body>

</html>
