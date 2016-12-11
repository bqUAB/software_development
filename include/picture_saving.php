<?php
/** PHP 7.1 */
//require_once 'functions.php';
require_once 'login.php';

$img_path = './img/';
$img_name = basename($_FILES['test_pic']['name']);

$up_dir = '../img/';
$up_pic = $up_dir . basename($_FILES['test_pic']['name']);

if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $up_pic)) {
    echo "<p>File is valid, and was successfully uploaded.</p><br>";

    // Database entry
    $conn = new mysqli($ServerName, $UserName, $Password, $DataBase);
    if ($conn->connect_error) echo "<br>ERROR: " . $conn->connect_error . "<br>";

    $query  = "INSERT INTO t_test(img_path,img_name) VALUES" . "('$img_path', '$img_name')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";

    $conn->close();
} else {
    echo "<p>Possible file upload attack!</p><br>";
}

// TODO: Add an ok button.

?>
<br>
<img src='<?php echo $up_pic ?>' width="200px">
