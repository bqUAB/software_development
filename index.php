<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
  <head>
      <h1> Warehouse database controller for clothes</h1>
  </head>
  <body class="container" ng-app="showApp" ng-controller="mainController">
  <div id="all">
      <form action="include/welcome.php" method="post">
          <h2>Please select the gender</h2>
          <fieldset id="gender">
              <!--Specifying gender-->
              <input name="gender" type="radio" id="M" value="0"><label for="M">Men</label>
                     <img src="include/images/Men.png" style="width:100px; height:150px"/>
              <input name="gender" type="radio" id="U" value="2"><label for="U">Unisex</label>
                     <img src="include/images/Unisex.png" style="width:100px; height:150px"/>
              <input name="gender" type="radio" id="W" value="1"><label for="W">Women</label>
                  <img src="include/images/Woman.png" style="width:100px; height:150px"/>
        </fieldset>
    <br>
    <div id="clothType">
        <h2>Please select the type of cloth</h2>
        <fieldset id="clothType">
            <!--Clothes types-->
            <input name="clothType" type="radio" id="top" value="1" ng-click="top = !top; bottom=false; shoes=false; accs=false">Top
            <img src="include/images/ClotheType/1.jpg" style="width:100px; height:150px">
            </input>
            <input name="clothType" type="radio" id="bottom" value="2" ng-click="bottom = !bottom; top=false; shoes=false; accs=false">Bottom
            <img src="include/images/ClotheType/2.jpg" style="width:100px; height:150px">
            </input>
            <input name="clothType" type="radio" id="shoes" value="3" ng-click="shoes = !shoes; top=false; bottom=false; accs=false">Shoes
            <img src="include/images/ClotheType/3.jpg" style="width:100px; height:150px">
            </input>
            <input name="clothType" type="radio" id="accs" value="4" ng-click="accs = !accs; top=false; bottom=false; shoes=false" >Accessories
            <img src="include/images/ClotheType/4.jpg" style="width:100px; height:150px">
            </input>
        </fieldset>
    </div>
          <!--For top of the clothes-->
          <div id="top">
              <input name="top" type="radio" id="top" value="1" ng-show="top">
              <img src="include/images/ClotheStyle/1.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="2" ng-show="top">
              <img src="include/images/ClotheStyle/2.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="3" ng-show="top">
              <img src="include/images/ClotheStyle/3.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="4" ng-show="top">
              <img src="include/images/ClotheStyle/4.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="5" ng-show="top">
              <img src="include/images/ClotheStyle/5.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="6" ng-show="top">
              <img src="include/images/ClotheStyle/6.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
              <input name="top" type="radio" id="top" value="17" ng-show="top">
              <img src="include/images/ClotheStyle/17.jpg" style="width:100px; height:150px" ng-show="top">
              </input>
          </div>
          <!--For bottom of the clothes-->
          <div id="bottom">
              <input name="bottom" type="radio" id="bottom" value="7" ng-show="bottom">
              <img src="include/images/ClotheStyle/7.jpg" style="width:100px; height:150px" ng-show="bottom">
              </input>
              <input name="bottom" type="radio" id="bottom" value="8" ng-show="bottom">
              <img src="include/images/ClotheStyle/8.jpg" style="width:100px; height:150px" ng-show="bottom">
              </input>
              <input name="bottom" type="radio" id="bottom" value="9" ng-show="bottom">
              <img src="include/images/ClotheStyle/9.jpg" style="width:100px; height:150px" ng-show="bottom">
              </input>
              <input name="bottom" type="radio" id="bottom" value="10" ng-show="bottom">
              <img src="include/images/ClotheStyle/10.jpg" style="width:100px; height:150px" ng-show="bottom">
              </input>
              <input name="bottom" type="radio" id="bottom" value="11" ng-show="bottom">
              <img src="include/images/ClotheStyle/11.jpg" style="width:100px; height:150px" ng-show="bottom">
              </input>
          </div>
          <!--For shoes-->
          <div id="shoes">
              <input name="shoes" type="radio" id="shoes" value="12" ng-show="shoes">
              <img src="include/images/ClotheStyle/12.jpg" style="width:100px; height:150px" ng-show="shoes">
              </input>
              <input name="shoes" type="radio" id="shoes" value="13" ng-show="shoes">
              <img src="include/images/ClotheStyle/13.jpg" style="width:100px; height:150px" ng-show="shoes">
              </input>
              <input name="shoes" type="radio" id="shoes" value="14" ng-show="shoes">
              <img src="include/images/ClotheStyle/14.jpg" style="width:100px; height:150px" ng-show="shoes">
              </input>
              <input name="shoes" type="radio" id="shoes" value="15" ng-show="shoes">
              <img src="include/images/ClotheStyle/15.jpg" style="width:100px; height:150px" ng-show="shoes">
              </input>
              <input name="shoes" type="radio" id="shoes" value="16" ng-show="shoes">
              <img src="include/images/ClotheStyle/16.jpg" style="width:100px; height:150px" ng-show="shoes">
              </input>
          </div>
          <!--For accessories-->
          <div id="accs">
              <input name="accs" type="radio" id="accs" value="18" ng-show="accs">
              <img src="include/images/ClotheStyle/18.jpg" style="width:100px; height:150px" ng-show="accs">
              </input>
              <input name="accs" type="radio" id="accs" value="19" ng-show="accs">
              <img src="include/images/ClotheStyle/19.jpg" style="width:100px; height:150px" ng-show="accs">
              </input><input name="accs" type="radio" id="accs" value="20" ng-show="accs">
              <img src="include/images/ClotheStyle/20.jpg" style="width:100px; height:150px" ng-show="accs">
              </input><input name="accs" type="radio" id="accs" value="21" ng-show="accs">
              <img src="include/images/ClotheStyle/21.jpg" style="width:100px; height:150px" ng-show="accs">
              </input>
              <input name="accs" type="radio" id="accs" value="22" ng-show="accs">
              <img src="include/images/ClotheStyle/22.jpg" style="width:100px; height:150px" ng-show="accs">
              </input>
          </div>
          <!--For choosing the color-->
          <h2>Please select a color.</h2>
          <fieldset id="color">
          <div id="color" class="container-fluid">
              <div id="color" class="row">
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #bd1e24"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #e97600"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #f6c700"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #007256"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #0067a7"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #964e87"></label>
                  </div>
                  <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #633517"></label>
                  </div>
                      <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #ffffff"></label>
                      </div>
                          <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #000000"></label>
                          </div>
                              <div class="col-xs-6">
                  <input name="color" id="color" type="radio">
                  <label style="width:100px;height:50px;border:1px solid #000;background: #e8919c"></label>
                              </div>
                </div>
          </div>
          </fieldset>
          <br>
    <input type="submit" name="submit" value="submit">
        </form>
  </div>
      <br/>

  <script>
      var showApp = angular.module('showApp', [])
          .controller('mainController', function($scope) {
              $scope.top = false;
              $scope.bottom = false;
              $scope.shoes = false;
              $scope.accs = false;
          });
  </script>
<!--	<form enctype="multipart/form-data" name="cloth" method="POST" action="include/picture_saving.php">-->
<!--	  	<p>Take a picture</p>-->
<!--	  	<input type="file" accept="image/*" name="test_pic">-->
<!--	  	<input type="submit" value="Upload">-->
<!--	</form>-->
<!--    <br>-->
<!--    --><?php //require_once './include/show_img.php';?>
  </body>
</html>
