<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style type=text/css>
.container
{
    width: 100%;
    height: 100%;
}
.navbar-nav
{
padding-left: 250px;    

}
.nav-item
{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:18px;
    font-weight: 500;
    padding-left: 20px;
    padding-right: 40px;
}
.nav-link:hover
{
    color: violet;

}
.dropdown-menu
{
    display: none;
}
.dropdown:hover .dropdown-menu
{
    display: block;
}
@media(max-width:600px)
{

.collapse
{
    width: 100px;
    overflow: scroll;
    border: 1px dotted black;
}

.navbar-nav
{
padding-left: 0px;   
}

}
#login
{
    padding-left: 30%;
    padding-bottom: 100px;
    padding-top: 50px;
}
.insert
{
    width:100px;
    height:50px;
    border-radius:50px ;
    border:none;
    box-shadow: 0 9px #999;
    background-color:lightgreen;
    font-size:20px;
    cursor:pointer;
}
.insert:hover
{
    background-color:darkgreen;
}
.insert:active 
{
  background-color: #3e8e41;
  transform: translateY(4px);
}

</style>
<script>
function FindAge()
{
  var day= document.getElementById("dob").value;
  var DOB = new Date(day);
  var today = new Date();
  var Age = today.getTime() - DOB.getTime();
  Age = Math.floor(Age/(1000*60*60*24*365.25));
  document.getElementById("age").value = Age;
}
var stateObject = {
    "India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
</head>
<body style="background-color: aquamarine;">
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php

$connection=mysqli_connect('localhost','root','','new1');
if(!$connection)
{
    echo"<script>alert('not coonect');location.href='#'";
}

$id=$_GET['id'];
$sql="SELECT * FROM `registerval` WHERE id='$id'";
$res=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($res);
?>

<?php
if(isset($_POST["update"]))
{
 $id=$_POST['id'];
 $username=$_POST['username'];
 $txtdob=$_POST['txtdob'];
$AGE=$_POST['age'];
$message=$_POST['message'];
$countrycode =$_POST['countrycode'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$countySel=$_POST['countySel'];
$stateSel=$_POST['stateSel'];
$districtSel=$_POST['districtSel'];
$targetDir="uploads/";
$fileName0=basename($_FILES['img']['name']);
$random=rand();
$fileName=$random.$fileName0;
$targetfilepath=$targetDir.$fileName;
$filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
$allowtype=array('img','jpg','jpeg','png');
$old_name=$row['filename'];
if(isset($_FILES['img']['name']) && ($_FILES['img']['name']!=""))
{

if(!file_exists($targetfilepath))
{
if(in_array($filetype,$allowtype))
{
unlink("uploads/$old_name");
move_uploaded_file($_FILES['img']['tmp_name'],$targetfilepath);

}
else
{
    $fileName=$old_name;
    echo"<script>alert('not a valid type');location.href='viewp.php';</script>";
}
}else{
    $fileName=$old_name;
    echo"<script>alert('already existed');location.href='viewp.php';</script>";
}

}else{
    $fileName=$old_name;
}
$sql1="UPDATE `registerp` SET `id`='$id', `username`= '$username',`txtdob`='$txtdob',`AGE`='$AGE',`message`='$message',`countrycode`='$countrycode',`phone`='$phone',`gender`='$gender',`countySel`='$countySel',`stateSel`='$stateSel', `districtSel`='$districtSel', `filename`='".$fileName."' WHERE id='{$row['id']}'";
$row=$connection->query($sql1);
if($row)
{
    echo "<script>alert('update success');location.href='viewp.php';</script>";
}
else
{
    echo "<script>alert('not update success');location.href='viewp.php';</script>";
    
}

}
?>

<div id="login" style="background-color:green;">
<form name='login' method='post' action="update.php?id=<?php echo $row["id"]; ?> " style="text-align: center;">
<div class="row">
<div class='col-lg-6'>
<h3><center>UPDATE form</center></h3>
<p> userid<span class="required">*</span> </p> 
<input type='id' name='id' id='id' class="form-control" value="<?php echo$row['id'];?>" size=30 placeholder='enter your userename' required>
<p>username<span class="required">*</span> </p> 
<input type='username' name='username' id='username' class="form-control" value="<?php echo$row['username']; ?>" size='30' placeholder='enter your password' required>
<br><br>
<p>$userpwd<span class="required">*</span> </p> 
<input type='userpwd' name='userpwd' id='userpwd' class="form-control" value="<?php echo$row['userpwd']; ?>" size='30' placeholder='enter your password' required>
<br><br>
<p>userage<span class="required">*</span> </p> 
<input type='dob' name='dob' id='dob' class="form-control" value="<?php echo$row['dob']; ?>" size='30' onchange='FindAge()' placeholder='enter your password' required>
<br><br>
<p>userage<span class="required">*</span> </p> 
<input type='age' name='age' id='age' class="form-control" value="<?php echo$row['age']; ?>" size='30' placeholder='enter your password' required>
<br><br>
<p>userphone<span class="required">*</span> </p> 
<select name='countrycode' class='countrycode'>
    <option value="<?php echo $row['countrycode']?>" selected><?php echo $row['countrycode']?></option>
    <option value="">usa(+1)</option>
    <option value="">uae(+2)</option>
    <option value="">uk(+3)</option>
</select>
<input type="tel" name="phone" class="phone" pattern='{1-9}{1}{0-9}{9}' value="<?php echo $row['phone']?>">
<br><br>
<p>gender<span class="required">*</span> </p> 
<input type="radio" name="gender" value="male" <?php if($row["gender"] == "male") {echo"checked";}  ?>>male
<input type="radio" name="gender" value="female" <?php if($row["gender"] == "female") {echo"checked";}  ?>>female
<br><br>
<p>userphone<span class="required">*</span> </p> 
<input type="file" name="img" class="img">
<br><br>
<h5><?php echo $row['img']; ?></h5>
<img src="<?php echo 'uploads/'.$row['img'];?>" width="100px"  >
<br><br>
</div>
<div class="col-lg-6">
Select Country: <select name="country" id="countySel" size="1">
<option value="<?php echo$row['country'] ?>" selected="selected"><?php echo$row['country'] ?></option>
</select>
<br>
<br>
Select State: <select name="state" id="stateSel" size="1">
<option value="<?php echo$row['state'] ?>" selected="selected"><?php echo$row['state'] ?></option>
</select>
<br>
<br>
Select District: <select name="district" id="districtSel" size="1">
<option value="<?php echo$row['district'] ?>" selected="selected"><?php echo$row['district'] ?></option>
</select><br><br>
<input type="submit" class='insert' name='update' value="submit"><br><br>
to regsiter<a href="index.php" style="float:center; padding: left 20px;" ><u>click here</u></a> 
</div>
</div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>