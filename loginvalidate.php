<?php
$connection=mysqli_connect('localhost','root','','new1');
if(!$connection)
{
    echo"<script>alert('not coonect');location.href='#'";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$username=$_POST['username'];
$userpwd=$_POST['userpwd'];


$sql="SELECT * FROM registerval WHERE username='$username' and userpwd='$userpwd'";
$result =mysqli_query($connection,$sql);
$count =mysqli_num_rows($result);
if($count>0)
{
    echo"<script>window.open('view.php','_self');alert('success');</script>";
}
else
{
    echo"<script>alert('not succes');location.href='#';</script>";
}




}














?>