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
<div id="login" style="background-color:green;">
<form name='login' method='post' action='loginvalidate.php ' style="text-align: center;">
<div class="row">
<div class='col-lg-6'>
<h3><center>login form</center></h3>
<p> Name<span class="required">*</span> </p> 
<input type='text' name='username' id='username' class="form-control" size=30 placeholder='enter your userename' required>
<p>userpwd<span class="required">*</span> </p> 
<input type='password' name='userpwd' id='userpwd' class="form-control" size='30' placeholder='enter your password' required>
<br><br>
<input type="submit" class='insert' name='insert' value="submit"><br><br>
to regsiter<a href="index.php" style="float:center; padding: left 20px;" ><u>click here</u></a> 
</div>
</div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>