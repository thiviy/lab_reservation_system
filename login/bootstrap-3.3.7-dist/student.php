<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#3498db;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
	
	.thanu	{
		color: darkviolet;
		text-align: right;
		float: right: 33px;
		
	}
	
	* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
	
	
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.active {
  background-color: #717171;
	
	}




/*.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}*/
	
</style>
</head>
<body>
	<header>
<ul>
	<li><a href="">Dashboard</a></li>
  <li><a href="th.php">Home</a></li>
   <li><a href="">Reservation</a></li>
	<li><a href="">users</a></li>
	<li><a href="">Resource</a></li>
	

	
  <li style="float:right"><a class="active" href="index.php">Logout</a></li>
  
</ul></header>

<!--<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="3.jpg" style="width:100%">
  <div class="text">Department 1 </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpg" style="width:100%">
  <div class="text">Department 2 </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="1.png" style="width:100%">
  <div class="text">Department 3</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>-->

<script>
/*var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}*/
</script>

</body>
</html>
