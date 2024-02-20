<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="create t";

$con=mysqli_connect('localhost','root','','create t');

if(mysqli_connect_error())
{
    echo "ERROR";
}



if(isset($_POST['validate']))
{

$fname=$_POST['fname'];
$mail=$_POST['mail'];
$pass=$_POST['psw'];


$sql="INSERT INTO `practice` (`fname`,`mail`,`psw`) VALUES ('$fname','$mail','$pass')";

if($con->query($sql) === TRUE)
{
    echo'<script> alert("Inserted Successfully") </script> ';
    header("location:contact.html");
}

else
{
    echo'<script>  alert("Error") </script>';
    header("location:contact.html");
}

$con->close();

}


?>