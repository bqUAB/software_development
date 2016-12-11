<?php
/**
 * Created by PhpStorm.
 * User: byron
 * Date: 11/12/2016
 * Time: 16:04
 */
require_once 'login.php';
$conn = new mysqli($ServerName, $UserName, $Password, $DataBase);
if ($conn->connect_error) die($conn->connect_error);

$query =  "SELECT * FROM t_test";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0; $j < $rows; $j++) {
    $result->data_seek($j);
    echo "<br>";
    echo '<img src="' . $result->fetch_assoc()['img_path'];
    $result->data_seek($j);
    echo $result->fetch_assoc()['img_name'] . '" width="200px">';
    echo "<br>";
}
