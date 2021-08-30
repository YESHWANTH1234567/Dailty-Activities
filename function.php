<?php

$con=mysqli_connect("localhost","root","","claritytts");
if(!$con)
{
    echo "Something Went Wrong";
}
$chk="";
$checkbox=$_POST['hobbie'];
foreach($checkbox as $ch)
{
  $chk .= $ch.",";
}
$statusMsg="";


$total = count($_FILES['file']['name']);
$files=array();


for( $i=0 ; $i < $total ; $i++ )
{

  $tmpFilePath = $_FILES['file']['tmp_name'][$i];
  $file_name=rand(1000,10000)."-".$_FILES['file']['name'][$i];


  if ($tmpFilePath != "")
  {

    $newFilePath = "uploads/" . $file_name;

    if(move_uploaded_file($tmpFilePath, $newFilePath))
    {
        echo "The file ".$file_name." is successfully uploaded<br>";
    }
    else
    {
      echo "Error occured while uploading the file";
    }
    $files[$i]="http://localhost/25-08-2021(Task)/".$newFilePath;
  }
 
}
$string=implode("*",$files);
echo $string;


$sql = "INSERT INTO form(firstname, lastname, email, dob, gender, address, country, state, department, technology, hobbie, uploaded_on) VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["dateofbirth"]."','".$_POST["gender"]."','".$_POST["address"]."','".$_POST["country"]."','".$_POST['state']."','".$_POST['department']."','".$_POST['technology']."','".$chk."','".$string."')";
if($con->query($sql))
{
  echo "The New Record has been uploaded successfully.";
}




?>
<!DOCTYPE html>
<html>
  <body>
    <h1>to view record<a href="record.php">click here</a></h1>
  </body>
</html>














