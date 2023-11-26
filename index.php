<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style type="text/css">
.container
{
    width:100%;
    height:100%;

}
.nav-item
{
    padding-left:30px;
    padding-right:30px;
}

.dropdown-menu
{

    display:none;
    position:absolute;
}
.nav-item:hover .dropdown-menu
{
    display:block;
}
.nav-link
{
    color:black;
            font-size:20px;
            font-weight:700;
            font-family:'Times New Roman', Times, serif;
}
.nav-link:hover
{
    color:violet;
}
.dropdown-item
{
    color:black;
            font-size:20px;
            font-weight:700;
            font-family:'Times New Roman', Times, serif;
}
.dropdown-item:hover
{
    color:violet;   
}
.dropdown-menu
{
    height:150px;
}
@media(max-width:600px)
{
 .navbar-nav
 {
    padding-right:200px;
 }
 .nav-item
 {
    padding-left:20px;
    padding-right:200px;
 }
 .collapse
 {
    width: 1px;
  height: 200px;
    overflow:scroll;
    border:1px dotted;
 }

}
#leftpane
{
  background:green;
  width: 100%;
  height:50%;
  text-align:center;
  float: left;
}
#login
{
  padding-bottom:200px;
  text-align:center;
  padding-left:30%;
}

.register
{
  text-align: center;
  padding-left: 30%px;
}
.insert {
  display: inline-block;
  padding: 10px 18px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 30px;
  box-shadow: 0 10px #999;
}

.insert:hover {background-color: #3e8e41}

.insert:active {
  background-color: #3e8e41;
  box-shadow: 0 10px #666;
  transform: translateY(4px);
}


</style>
<script>
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

function FindAge()
{
  var day=document.getElementById('dob').value;
  var dob=new Date(day);
  var today=new Date();
  var age=today.getTime() - dob.getTime();
  age=Math.floor(age/(1000*60*60*24*365.25));
  document.getElementById("age").value=age;
}
  </script>
  </head>
  <body style='background:aquamarine;'>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="leftpane">
<form class='register' method="POST" action="registerval.php" enctype="multipart/form-data">
<div id="login" >

    <div class="row">
        <div class="col-lg-6">
          <h3>Register form</h3>
            <p>uername<span class="required">*</span></p>
<input type='text' name='username' id='username' value='koooo' class="form-control"  size='10' placeholder='typer yourname'>
<p>uernpwd<span class="required">*</span></p>
<input type='password' name='userpwd' id='userpwd'  class="form-control" size='10' placeholder='typer yourname'>
<br>
<p>uernpwd<span class="required">*</span></p>
<input id='dob' type='text' name='dob' maxlength='10' placeholder='mm/dd/yyy' onChange="FindAge()">
<br><p>age<span class="required">*</span></p>
<input type='text' name='age' id='age'>
<br> 
<br><p>address<span class="required">*</span></p>
<textarea  name='address' cols='40' rows='3'></textarea><br>
<p>phone<span class="required">*</span></p>
<select name="countrycode" id="countrycode">
<option vlaue="0"> code</option>
<option vlaue="+1">uae(+1)</option>
<option vlaue="+2">usa(+2)</option>
<option vlaue="+3">uk(+3)</option>
</select>
<input type="tel" name="phone" class="phone" id="phone" pattern='{1-9}{1}{0-9}{9}'>
<br><br>
<p>gender<span class="required">*</span></p>
<input type="radio" name="gender" value="male" id="gender" >male
<input type="radio" name="gender" value="female" id="gender" >female
<br><br>
<p>image<span class="required">*</span></p>

<input type="file" name="img" id="img">
<br><br>
<p>pdf<span class="required">*</span></p>

<input type="file" name="pdf" id="pdf">
</div>
<div class="col-lg-6">

<br><br>
<p>country<span >*</span><p>
<select name="country" id="countySel"  class='country' size="1">
<option value="" selected="selected">Select Country</option>
</select>
<br>
<br>
<p>country<span >*</span><p>
<select name="state" class='state' id="stateSel" size="1">
<option value="" selected="selected">Please select state first</option>
</select>
<br>
<br>
<p>country<span >*</span><p>
<select name="district" class='district' id="districtSel" size="1">
<option value="" selected="selected">Please select city first</option>
</select><br><br>
<button type="reset" class="insert" value="reset"> reset </button><br><br>
<button type="submit" class="insert" name='submit' value="submit"> submit</button>
<br><br>
TO sign up <a href="login.php"><u style="padding-left: 10px;">click here</u></a>
</div>
</div>
</div>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>