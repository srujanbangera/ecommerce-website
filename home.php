<?php

require_once('php/CreateDb.php');

//create instance of Createdb class
$database=new CreateDb("Productdb","Producttb");

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
     figcaption {
      color:black;
      font-style: italic;
      padding: 5px;
      text-align: center;
    }
    * {
      box-sizing: border-box;
    }
    
    .column {
      float: left;
      width: 20%;
      padding: 20px;
    }
    
    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }
    </style>
    
    <a href="cart.html"><img src="cart.jpg" style="float:right;width:50px;height:54.5px;"/></a>
<style>
  
   ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow:hidden;
     background-color: #FFD700;
   }
   
   li {
     float: left;
   }
   
   li a {
     display: block;
     color: black;
     text-align: center;
     padding: 14px 16px;
     font-size: large;
     text-decoration: none;
   }
   
   li a:hover {
     background-color:ghostwhite;
   }
   .checked {
  color: orange;
}

   </style>
   
  
   </head>

<body>
   
<ul>
   <li><a class="active" href="home.html"><b>Home</b></a></li>
   <li><a href="recomendation.html"><b>Recomendation</b></a></li>
   <li><a href="contact.html"><b>Contact us</b></a></li>
   <li><a href="#about"><b>About us</b></a></li>
   <li><a href="predict.html"><b>Predict</b></a></li>
 </ul>
 <br>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <div class="row">

  <div class="column">
    <style>
      img {
  border: 1px solid black;
}
body {
    background-color:white;
}
    </style>
    <img src="pendrive.jpg" width="200px" height="180px" />
    <figcaption>Pendrive</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <br>
     <p><b>₹250</b></p>
    <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
  </center>
  </div>
  <div class="column">
    <img src="laptop1.jpg"  width="200px" height="180px" />
    <figcaption>Laptop</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <br>
     <p><b>₹35,000</b></p>
      <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
      </center>
  </div>
  <div class="column">
    <img src="airpod2.jpg"  width="200px" height="180px" />
    <figcaption>Airpod</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <br>
     <p><b>₹3000</b></p>
      <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
      </center>
  </div>
  <div class="column">
    <img src="harddisk.jpg"  width="200px" height="180px" />
    <figcaption>External HardDisk</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <br>
     <p><b>₹4000</b></p>
      <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
      </center>
  </div>
  <div class="column">
    <img src="mouse.jpg"  width="200px" height="180px" />
    <figcaption>Mouse</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <br>
     <p><b>₹500</b></p>
      <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
      </center>
  </div>
<div class="column">
<img src="mb_img_25.jpg" width="200px" height="180px"/>
<figcaption>Phone</figcaption>
<center>
  <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <br>
     <p><b>₹80,000</b></p>
  <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
  </center>
</div>
<div class="column">
  <img src="backcover.jpg" width="200px" height="180px"/>
  <figcaption>Back Cover</figcaption>
  <center>
    <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
      <br>
     <p><b>₹300</b></p>
    <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
    </center>
  </div>
  <div class="column">
    <img src="applewatch.jpg" width="200px" height="180px"/>
    <figcaption>Smart Watch</figcaption>
    <center>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <br>
     <p><b>₹25,000</b></p>
      <button type="submit" class="btn btn-success" button onclick="document.location='cart.html' ">Buy</button>
      </center>
    </div>
</div>
 
   </body>
  
</html>


