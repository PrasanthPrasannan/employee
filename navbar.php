<?php
session_start();
if(!isset($_SESSION['logincheck']))
{

  header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="container-fluid rem-pad navs">
<div class="container rem-pad">
 
<nav class="navbar navbar-expand-lg navbar-light bg-info">
 
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo-navbar" aria-controls="demo-navbar" aria-expanded="false" aria-label="Toggle navigation">
 
    <span class="navbar-toggler-icon"></span>
 
  </button>
 
 
 
  <div class="collapse navbar-collapse" id="demo-navbar">
 
    <ul class="navbar-nav mr-auto">
 
      <li class="nav-item active">
 
      <a class="nav-link text-light" href="employee_add.php">Employee Add</a>
 
      </li>
 
      <li class="nav-item">
 
        <a class="nav-link text-light" href="employee_allview.php">Employee View</a>
 
      </li>

      <li class="nav-item">
 
      <a class="nav-link text-light" href="employee_search.php">Employee Search</a>

     </li>

     <li class="nav-item">
 
      <a class="nav-link text-light" href="employee_search&update.php">Employee Update / Delete</a>

     </li>

 
    </ul>
 
    <a class="nav-link text-light" href="">LOGOUT</a>
  </div>
 
</nav>
 </div>
</div>