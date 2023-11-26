<?php

$conn=mysqli_connect('localhost','root','','new1');
if(!$conn)
{
    echo"<script>alert('not coonected');location.href='#';</script>";
}

$id=$_GET['id'];
$sql="DELETE FROM `registerval` WHERE id='$id'";
if($conn->query($sql))
{
    echo"<script>alert('deleted');location.href='view.php';</script>";
}
else{
    echo"<script>alert('not deleted');location.href='#';</script>";

}
?>