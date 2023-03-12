<?php

$con = mysqli_connect('localhost','root');

if ($con){
    echo "conection successful";
}
else
{
    echo "No connection"
}

mysqli_select_db($con,'website');
$user = $_POST['user'];
$email = $_POST['email'];
$moblie = $_POST['moblie'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user,email,moblie , comments)
values('$user','$email','$moblie','$comments')";
mysqli_query($con,$query);
echo "$query"
mysqli_query($con, $query);
?>