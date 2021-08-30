<?php
$variable=$_POST['submit'];
echo $variable;
exit();
$file_name=rand(1000,10000).$_FILES['file']['name'];
$targe_path="uploads/".$file_name;
echo(move_uploaded_file($_FILES['file']['tmp_name'],$targe_path));

?>