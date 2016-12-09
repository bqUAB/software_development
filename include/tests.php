<?php // This file is used to test working codes

// login.php

$ServerName = 'db4free.net:3306/db_warehouse_tes'; //hn

$DataBase = 'db_warehouse_tes'; //db

$UserName = 'usr_admin_wareho'; //un

$Password = 'warehouse_admin'; //pw

//Call login.php file and connect to database

//require_once './include/login.php';

$conn = new mysqli($ServerName, $UserName, $Password, $DataBase);

if ($conn->connect_error) die($conn->connect_error);

echo "TEST" . '<br>';



//select all information from table

$query = "select * from t_test";

$result = $conn->query($query);

if (!$result) die($conn->error);



//show result from query

$rows = $result->num_rows;



for ($j = 0; $j < $rows; ++$j)
{
    $result->data_seek($j);

    $row = $result->fetch_array(MYSQLI_ASSOC);

   // echo $row['id_clothe'].'<img src='. $row['clothe_image'] . '><br>';
    echo 'name: ' . $row['name'] . ' path: ' . $row['path'] . '<br>';
}

$result->close();


/*
$query2 = "INSERT INTO `t_clothe` (`id_clothe`, `id_clothe_style`, `id_color`, `id_brand`, `id_sex`, `id_age`, `clothe_image`) VALUES ('6', '6', '6', '6', '6', '6', 'INSERT TEST,  PHP')";

$result2 = $conn->query($query2);



//$result2->close();

$conn->close();
*/
