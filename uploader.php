<?php

$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['uploadedfile']['name']);

$file_contents = file_get_contents($_FILES['uploadedfile']['tmp_name']);
echo $file_contents;


//echo $target_path;
//
//var_dump($_FILES);

//if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
//    echo "The file " . basename($_FILES['uploadedfile']['name']) .
//    " has been uploaded";
//} else {
//    echo "There was an error uploading the file, please try again!";
//}
?>