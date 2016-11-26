<<<<<<< HEAD
<?php 
//require_once 'functions.php';
$uploaddir = '../images/';
$uploadpic = $uploaddir . basename($_FILES['test_pic']['name']);

echo '<pre>';

if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $uploadpic)) {
=======
<?php

//$uploaddir = 'D:/byron/Google Drive/A First Semester 2016-2017/Software Development and Quality Assurance/images/';
$uploaddir = '../images/';
$uploadfile = $uploaddir . basename($_FILES['test_pic']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['test_pic']['tmp_name'], $uploadfile)) {
>>>>>>> master
	echo "File is valid, and was successfully uploaded.\n";
} else {
	echo "Possible file upload attack!\n";
}

<<<<<<< HEAD

=======
>>>>>>> master
echo 'Here is some more debugging info:<br>';
print_r($_FILES);

print "</pre>";
<<<<<<< HEAD
?>
<br>
<img src='<?php echo $uploadpic ?>' width="200px">
=======

?> 
<br>
<img src="https://drive.google.com/drive/folders/0Bz-w9y2Nkcx4d2JPSFZJVWxvUU0?usp=sharing/image.jpg" width="512px">
>>>>>>> master
