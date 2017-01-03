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

<script type="text/css">
    img.resize{
        width: 100px;
        height: 150px;
    }
</script>

<head>
    <script>
        function clothStyle_func()
        {
            var sex = $("input:radio[name ='gender']:checked").val();
            var top = $("input:radio[name ='clothType']:checked").val();
            var xhr;
            if (window.XMLHttpRequest) { // Mozilla, Safari, ...
                xhr = new XMLHttpRequest();
            } else if (window.ActiveXObject) { // IE 8 and older
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var data = 'clothStyleRadio=' + top + '&sex=' + sex;
            xhr.open("POST", "./include/clothStyle.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(data);
            xhr.onreadystatechange = display_data;
            function display_data() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        //alert(xhr.responseText);
                        document.getElementById("clothStyle").innerHTML = xhr.responseText;
                    } else {
                        alert('There was a problem with the request.');
                    }
                }
            }
        }
    </script>
      <h1> Warehouse database controller for clothes</h1>
  </head>
  <body class="container" ng-app="showApp" ng-controller="mainController">

  <div id="all">
      <form action="include/show_img.php " method="post">
          <h2>Please select the gender</h2>
          <div>
          <?php include './include/gender.php'?>
          </div>
    <br>
    <div id="clothType">
        <h2>Please select the type of cloth</h2>
        <div>
            <?php include "./include/clothType.php"?>
        </div>
        <br>

    </div>
          <!--For top of the clothes-->
          <div id="clothStyle">
          </div>
          <br>
          <!--For choosing the color-->
          <h2>Please select a color.</h2>
          <div id="color" class="container-fluid">
              <div id="color" class="row">
                  <?php include "./include/color.php"?>
              </div>
          </div>
          <br>
          <div id="brand">
              <?php include "include/brand.php"?>
          </div>
    <input type="submit" name="submit" value="submit">
        </form>
  </div>
      <br/>


<!--  --><?php //require_once './include/show_img.php';?>
  </body>
</html>
