<?php
/**
 * Created by PhpStorm.
 * User: byron
 * Date: 11/12/2016
 * Time: 16:04
 */
require_once 'login.php';


$conn = new mysqli($ServerName, $UserName, $Password, $DataBase);
if ($conn->connect_error) echo "<br>ERROR: " . ($conn->connect_error) . "<br>";

$gender = $_POST["gender"];
$clothStyle = $_POST["clothStyle"];
$color = $_POST["color"];
$brand = $_POST["brand"];
$query_all = "SELECT * FROM t_clothe WHERE id_clothe_style = $clothStyle AND id_color = $color AND id_brand=$brand";


#$query =  "SELECT * FROM t_clothe";
$result = $conn->query($query_all);
if (!$result) echo "<br>ERROR: " . $conn->error . "<br>";

$rows = $result->num_rows;

for ($j = 0; $j < $rows; $j++) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo "<br>";
    $path = 'https://'.$ServerName.'\\software-development\\'. $row['clothe_image'];
    echo '<img src=' .$path.' class=resize>';
    echo "<br>";
}

$result->close();
$conn->close();

echo '<form enctype="multipart/form-data" name="cloth" method="POST" action="include/picture_saving.php">
	  	<p>Take a picture</p>
	  	<input type="file" accept="image/*" name="test_pic">
	  	<input type="submit" value="Upload">
	</form>
    <br>';