<?php

//to be created
require "init.php";

if (isset($_SESSION['user'])) {
    header("location: callback.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with GitHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 25px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    margin-left: 570px;
    
}

.button:hover {
    background-color: green;
}

.font {
font-family: "timesnewroman";
font-size: 19px;
color: green; 
margin-left: 500px;
}

.header{
    font-family: "timesnewroman";
font-size: 30px;
color: green; 
margin-left: 620px;
}

</style>
</head>
<body>
    
    <h1 class="header"> Shopify </h1>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="image/shop1.jpg" style="width:100%; height:400px;">
  <img class="mySlides" src="image/shop2.jpg" style="width:100%; height:400px;">
  <img class="mySlides" src="image/shop3.jpg" style="width:100%; height:400px;"><br/>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<a class="button" href="login.php">Sign in with GitHub</a><br/>
    <p class="font"> You will be redirected to the github login page</p>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>










