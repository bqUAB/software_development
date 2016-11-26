<!DOCTYPE html>
<<<<<<< HEAD
<html>
  <body>
	<form enctype="multipart/form-data" name="cloth" method="POST" action="include/picture_saving.php">
	  	<p>Take a picture</p>
	  	<input type="file" accept="image/*" name="test_pic">
	  	<input type="submit" value="Upload">
	</form>
  </body>
</html>
=======
<html ng-app>
  <head>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  </head>
  <body>
  	<label>Name:</label>
	<input type="text" ng-model="yourName" placeholder="Enter a name here">
	<hr>
	<h1>Hello {{yourName}}!</h1>
	<hr>
	<form enctype="multipart/form-data" name="cloth" method="POST" action="include/picture_saving.php">
	  	<p>Tomar una foto</p>
	  	<input type="file" accept="image/*" name="test_pic">
	  	<input type="submit" value="Upload">
	  	
	</form>
  </body>
</html>
>>>>>>> master
