<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style type=text/css>
.navbar-nav
{
padding-left: 250px;
}
.nav-item{
    padding-left: 20px;
    padding-right: 40px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 500;
    font-size:17px;
    color:black;
}
.nav-link:hover
{
    color:violet;
}
.dropdown-menu
{
    display: none;
    padding: 10px;
}
.dropdown:hover .dropdown-menu
{
    display:block;
    transition:10ms;
}
.dropdown-item:hover
{
    color: violet;
}
@media(max-width:600px)
{
    .dropdown-menu a
    {
        color: black;
    }
.navbar-nav
{
    padding-left: 0px;
}

}

.insert {
  display: inline-block;
  padding: 15px 24px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 30px;
  box-shadow: 0 9px #999;
  float: right;
}

.insert:hover {background-color: #3e8e41}

.insert:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/* table
{
  width:100%;
  text-align: center;
  border:50%;
  border-collapse: collapse;
  color:#d96459;
  font-family:monospace;
  font-size:16px;
  height:10px;
  }

th
{
    background-color:#d96459;
    color: white;
}
tr:nth-child(even){
 background-color:#3e8e41;

} */

table
{
  width:100%;
  height:100px;
  border:50%;
  border-collapse: collapse;
  text-align: center;
  font-family:monospace;
  font-size:16px;
  height:10px;
}
th{
  background-color: #d96459;
  color: #fff;
}
tr:nth-child(even)
{
  background: #3e8e41;
}
.footer-box
{
    background:black;
    padding:5%;
    
}
.add
{
    float:right;
    padding-bottom: 10px;
}
.footer-bottom
{
    background:#d96459;
    padding: 20px;
}
.col-lg-12
{
 text-align: center;
 font-size: 20px;
 font-weight: 300;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

</style>
</head>
<body style="background:aquamarine;">
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
<form method='post' action='index.php' name='add' style="padding-bottom: 80px;">
  <input type="button" name='insert' value="add" class='insert'>
</form>
<?php
$connect=mysqli_connect('localhost','root','','new1');
if(!$connect)
{
  echo "<script>alert('not connect');location.href='#'</script>";
}

$sql="SELECT * FROM `registerval`";
$res=mysqli_query($connect,$sql);
$count=mysqli_num_rows($res);
if($count>0)
{
$i=0;
echo"<table border='3' cellspacing='6'>";
echo"<tr>";
echo"<th>s.no</th>";
echo"<th>username</th>";
echo"<th>countrycode</th>";
echo"<th>phone no</th>";
echo"<th>image</th>";
echo"<th colspan='3'>action</th>";
echo"</tr>";


while ($row= mysqli_fetch_array($res)) {

      $i++;
    echo"<tr>";
    echo"<td> $i </td>";
    echo"<td>" .$row['username']. "</td>";
    echo"<td>" .$row['countrycode']. "</td>";
    echo"<td>" .$row['phone']. "</td>";
    echo"<td><a href='uploads/{$row['img']}'><img src='uploads/{$row['img']}' height='100' width='200';></a></td>";
    echo"<td><a href='update.php?id=$row[id];'>update</td>";
    echo"<td><a href='delete.php?id=$row[id];' onclick=\"return confirm('are you sure you want  delete')\">update</td>";
    echo"</tr>";
}
echo"</table>";
}
else{
  echo "<script>alert('no matching records found');location.href='#'</script>";
}


?>
<footer class="footer-box">
<div class="row">
<div class="col-lg-4">
<ul>
    <li><a href="#">lhakjh</a></li>
    <li>kjhKAJS</li>
</ul>


</div>
<div class="col-lg-4">
    <li>maintennace</li>
    <li>services</li>
</div>
<div class="col-lg-4">
<form>
    <h5>newss letter</h5>
    <input type="email" placeholder="typer tour eail">
    <button type="submit">submit</button>
</form>
</div>

</div>
</footer>
<div class="footer-bottom">
<div class="row">
    <div class="col-lg-12">
    <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script>  All Rights Reserved</p>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>