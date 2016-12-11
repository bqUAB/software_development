<?php
/** PHP 7.1 */

// require_once 'functions.php'; */

$up_dir = '../img/';
$up_pic = $up_dir . basename($_FILES['test_pic']['name']);

if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $up_pic)) {
    echo "File is valid, and was successfully uploaded.<br>";
} else {
    echo "Possible file upload attack!<br>";
}

echo "Here is some more debugging info:<br>";
echo "<pre>";
print_r($_FILES);

print "</pre>";

?>
<br>
<img src='<?php echo $up_pic ?>' width="200px">
<br>
