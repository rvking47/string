<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
h1{
    font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: white;
  text-decoration: underline;
    font-size: 50px;
}
.jumbotron{
    margin: auto;
    margin-top: 7%;
    background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
 
  
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  
}
label{
    font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: white;
  text-decoration: underline;
}
.hh{
  padding: 0px;
  transition: transform .3s; /* Animation */
 
  height: auto;
  margin: 0 auto;
}
.hh:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.table{
    width: 550px;
    margin: auto;
    margin-top: 4%;
    transition: transform .3s;
   
}
.table:hover{
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
th{
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);   
    text-decoration: underline;
    color: white;
    font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
}
td{
   background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    font-style: italic;
    font-weight: 400;
    text-transform: none;
  font-weight: 400;
  
    color: black;
}
.btn{
    font-style: oblique;
    
}
body{
    background-color: gray;
}
.table{
  width: 100%;
}
    </style>       
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="hh">
    <div class="jumbotron bg-dark">
    <h1 class="text-center">String Functions</h1>
    <form method="post">
        <label for="na" class="form-label">Enter String:</label>
   <input type="text" name="en" class="form-control"><br>
<input type="submit" name="submit" value="submit" class="btn btn-outline-warning text-center">
    </form>
</div>
        </div>
</div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $en=$_POST['en'];
     if($en)
     {
        $rev=strtoupper($_POST['en']);
        $rev1=strtolower($_POST['en']);
        $rev2=lcfirst($_POST['en']);
        $rev3=ucfirst($_POST['en']);
        $rev4=ucwords($_POST['en']);
        echo "<table class=table table-bordered ><thead><tr>";
        echo "<th scope='col'>Function Name</th><th scope='col'>Output</th></tr></thead>";
        echo "<tbody><tr>";
        if($rev==$_POST['en'])
     {
        echo "<td>Capital letters</td><td>".$en."</td>";
     }
     else if($rev1==$_POST['en'])
     {
        echo "<td>Small letters</td><td>".$en."</td>";
     }
     else if($rev2==$_POST['en'])
     {
        echo "<td>First letter Small</td><td>".$en."</td>";
     }
     else if($rev4==$_POST['en'])
     {
        echo "<td>All First World is  Capital</td><td>".$en."</td>";
     }
     else if($rev3==$_POST['en'])
     {
        echo "<td>First letter is Capital</td><td>".$en."</td>";
     }
     echo "</tr></tbody></table>";
     }
}
?>