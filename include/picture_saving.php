<?php 
//require_once 'functions.php';
$uploaddir = '../images/';
$uploadpic = $uploaddir . basename($_FILES['test_pic']['name']);

if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $uploadpic)) {
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
<img src='<?php echo $uploadpic ?>' width="200px">