<!doctype html>
<html ng-app="valueExample">
<script src="include/scripts/angular.min.js"></script>
<script src="include/scripts/script.js"></script>
<script src="include/scripts/example.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap.min.js"></script>

	<body>
	
	<div>
	
	<button type="submit" id="M" onclick="reply_click(this.id);document.getElementById('M').disabled=true;document.getElementById('U').disabled=false;document.getElementById('W').disabled=false">
	<img src="include/images/Men.png" style="width:200px; height:300px"></button>
	<button type="submit" id="U" onclick="reply_click(this.id);document.getElementById('M').disabled=false;document.getElementById('U').disabled=true;document.getElementById('W').disabled=false">
	<img src="include/images/Unisex.png" style="width:200px; height:300px"></button>
	<button type="submit" id="W" onclick="reply_click(this.id);document.getElementById('M').disabled=false;document.getElementById('U').disabled=false;document.getElementById('W').disabled=true">
	<img src="include/images/Woman.png" style="width:200px; height:300px"></button>

<button onclick="document.getElementById('up7913').disabled=true;document.getElementById('down7913').disabled=false;" type="submit" name="up7913" id="up7913">First</button>

<button onclick="this.disabled=true;document.getElementById('up7913').disabled=false;" type="submit" name="down7913" id="down7913">Second</button>
	<script type="text/javascript">
	function reply_click(clicked_id)
	{
		var id=clicked_id;
    	alert(id);
	}
	</script>
	
	<div  ng-controller="ExampleController">
		
		<h2>Which is your favorite?</h2>
     	<label ng-repeat="name in names" for="{{name}}">
       			{{name}}
        <input type="radio" ng-model="my.favorite" ng-value="name" id="{{name}}" name="favorite">
     	</label>
   		
   		<div>You chose {{my}}, {{message}} </div>
   		
 	</div>
 	
 		<table>
  			<tr><th>Row number</th></tr>
  			<tr ng-repeat="i in [0, 1, 2, 3, 4, 5, 6, 7]"><td>{{i+1}}</td></tr>
		</table>
		
		Name:<input ng-model="name" type="text"/>
    	Hello {{name}}!

<label>Click me to toggle: <input type="checkbox" ng-model="checked"></label><br/>
<button ng-model="button" ng-disabled="checked">Button</button>
		
	</body>
</html>
