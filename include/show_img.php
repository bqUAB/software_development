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

$query =  "SELECT * FROM t_test";
$result = $conn->query($query);
if (!$result) echo "<br>ERROR: " . $conn->error . "<br>";

$rows = $result->num_rows;

for ($j = 0; $j < $rows; $j++) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo "<br>";
    echo '<img src="' . $row['img_path'] . $row['img_name'] . '" width="200px">';
    echo "<br>";
}

$result->close();
$conn->close();
