<?php

// $connection=mysqli_connect("localhost","root","","new1");

// if(!$connection)
// {
//     echo"<script>windows.open('register.php','_self')</script>";
// }
// else
// {
//     echo"<script>windows.open('register.php','success')</script>";

// }


// if(!file_exists($targetfilepath))
// {

//     if(in_array($filetype,$allowtype))
//     {

//         // if(($_FILES['img']['name']<='10000000') || ($_FILES['img']['name']=='0'))
//         // {
//             move_uploaded_file($_FILES['img']['tmp_name'],$targetfilepath);
//             move_uploaded_file($_FILES['pdf']['tmp_name'],$targetfilepath1);

//             $sql="INSERT INTO `registerval` (age,address,username,dob,userpwd,countrycode,phone,gender,img,pdf,country,state,district)values('$age','$address','$username','$dob','$userpwd','$countrycode','$phone','$gender','".$filename."','".$filename2."','$country','$state','$district')";
//             $row=$connection->query($sql);
//             if(!$row)
//             {
//                 echo"<script>alert('not inserted');location.href='#';</script>";
//             }
//             else
//             {
//                 echo"<script>alert('inserted');location.href='#';</script>";

//             }
//         //  }
//         // else
//         // {
//         //     echo"<script>alert('image exceeds size');location.href='register.php';</script>";

//         // }
//     }
//     else
//     {
//         echo"<script>alert('file not image ');location.href='#';</script>";

//     }
// }    
// else{

//     echo"<script>alert('file already exist');location.href='register.php';</script>
// }


$connection=mysqli_connect("localhost","root","","new1");

if(!$connection)
{

    echo"<script>alert('not connect');location.href='#';</script>";
}
else
{
    echo"<script>alert('connect');location.href='#';</script>";
}

if(isset($_POST['submit']) && !empty($_FILES['img']['name']))
{

$username=$_POST['username'];
$userpwd=$_POST['userpwd'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$countrycode=$_POST['countrycode'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$targetdir='uploads/';
$filename0=basename($_FILES['img'] ['name']);
$random=rand();
$filename=$random.$filename0; 
$targetfilepath=$targetdir.$filename;
$filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
$allowtype=array('img','jpg','jpeg','png');
$targetdir1='pdf/';
$filename1=basename($_FILES['pdf']['name']);
$filename2=$random.$filename1;
$targetfilepath1=$targetdir1.$filename2;
$type=array('pdf');
$filetype1=pathinfo($targetfilepath1,PATHINFO_EXTENSION);
$address=$_POST['address'];
$gender=$_POST['gender'];

if(!file_exists($targetfilepath))
{

        if(in_array($filetype,$allowtype))
        {
            move_uploaded_file($_FILES['img']['tmp_name'],$targetfilepath);
            move_uploaded_file($_FILES['pdf']['tmp_name'],$targetfilepath1);
            
    $sql="INSERT INTO `registerval` (username, userpwd, dob, age, phone, countrycode, address, gender, img, pdf, country, state, district) VALUES ('$username', '$userpwd','$dob','$age','$phone','$countrycode','$address','$gender', '".$filename."', '".$filename2."', '$country', '$state', '$district')";
    $row=mysqli_query($connection,$sql);
    
    if(!$row)
    {
        echo"<script>alert('not success');location.href='#';</script>";

    }
    else
    {
        echo"<script>alert('succes');location.href='index.php';</script>";

    }
}
else
{
    echo"<script>alert('already existed');location.href='#';</script>";

}
    }
    else
    {
        echo"<script>alert('not valid type');location.href='#';</script>";

    }











}










?>