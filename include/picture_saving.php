<?php
/** PHP 7.1 */
//require_once 'functions.php';
require_once 'login.php';
echo "asdasda";

$img_path = './images/Clothe/';
$img_name = basename($_FILES['test_pic']['name']);

$up_dir = './images/Clothe/';
$up_pic = $up_dir . basename($_FILES['test_pic']['name']);


if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $up_pic)) {
    echo "<p>File is valid, and was successfully uploaded.</p><br>";

    // Database entry
    $conn = new mysqli($ServerName, $UserName, $Password, $DataBase);
    if ($conn->connect_error) echo "<br>ERROR: " . $conn->connect_error . "<br>";


    $query_id_cloth = "SELECT MAX(id_clothe) FROM t_clothe";
    $data = $conn->query($query_id_cloth);

    $row2=$data->fetch_array(MYSQLI_ASSOC);
    $id_cloth = $row2['MAX(id_clothe)'] + 1;
    $insertPath = 'images/Clothes/' . $id_cloth . '.jpg';

    $query  = "INSERT INTO t_clothe (id_clothe, id_clothe_style, id_color, id_brand, clothe_image) VALUES" .
        "('$id_cloth','1','2','3','$insertPath')";

    $result2 = $conn->query($query);
    if (!$result2) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";

    $conn->close();
} else {
    echo "<p>Possible file upload attack!</p><br>";
}

// TODO: Add an ok button.

?>
<br>
<img src='<?php echo $up_pic ?>' width="200px">
