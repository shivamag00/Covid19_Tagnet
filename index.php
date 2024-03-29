<?php
include 'counter.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>IIIT Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
  background-image: url("b2.jfif");
  background-repeat: no-repeat;
  background-size:100% 100%;
  height: 100%;
}

.aside p {
	text-align:left;
	}



.header {
  background-color: #0000ef;
  color: #ffffff;
  padding: 15px;
  width:100%;
  float:left;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}


.dropdown {
	display:none;
}


.dropdown li{
	padding: 8px;
	padding-left:32px;
	margin-bottom: 7px;
	background-color: #ffffff;
	color: #000000;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.dropdown li:hover {
  background-color: #d3d3d3;
}


.subdropdown {
	display:none;
}


.subdropdown li{
	padding-left:64px;
}


.logo{
	float:right;
}


.header h1 {
  padding-top: 15px;
  }

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
  
  
  .header h1 {
  font-size: 25px;
  padding-top: 0px;
  }
  
  img {
  width: 14%;
  height: auto;
}


 html{
    background-image:url("b3.png");
	background-repeat: repeat;
	
  }

  
}



</style>
</head>
<body>

	<div class="header">
		<h1 style="float:left; font-family:'Courier New', 'Courier', 'monospace';">#tagnet</h1>
		<img class="logo" src="logo.png">
	</div>

	<div class="row">
		<div class="col-3 menu">
			<ul>
				<li class="dropdown-btn">First Year</li>
					<div class="dropdown">
						<li><a href="first/dsa/">Data Structures & Algorithms</a></li>
						<li><a href="first/edc/">Electronic Devices & Circuits</a></li>
						<li><a href="first/em/">Engineering Mechanics</a></li>
						<li><a href="first/dld/">Digital Logic Design</a></li>
						<li><a href="first/dm/">Discrete Mathematics</a></li>
						<li><a href="first/sig/">Signals & Systems</a></li>
					</div>
		
				<li class="dropdown-btn">Second Year</li>
					<div class="dropdown">
						<li><a href="second/os/">Operating Systems</a></li>
						<li><a href="second/cn/">Computer Networks</a></li>
						<li class="subdropdown-btn">ECE</li>
							<div class="subdropdown">
								<li><a href="second/ece/ac/">Analog Circuits</a></li>
								<li><a href="second/ece/dcom/">Digital Communications</a></li>
								<li><a href="second/ece/mc/">Microcontroller</a></li>
								<li><a href="second/ece/em/">Electromagnetics</a></li>
							</div>
					
						<li class="subdropdown-btn">CSE</li>
							<div class="subdropdown">
								<li><a href="second/cse/dbms/">Database Management System</a></li>
								<li><a href="second/cse/oot/">Object Oriented Technology</a></li>
								<li><a href="second/cse/ss/">System Software</a></li>
								<li><a href="second/cse/daa/">Design & Analysis of Algorithms</a></li>
							</div>
					</div>
				
				<li class="dropdown-btn">Third Year</li>
					<div class="dropdown">
						<li><a href="third/avr">Augmented &  Virtual Reality</a></li>
						<li><a href="third/we">Web Engineering</a></li>
						<li><a href="third/cc">Cloud Computing & Big Data Infrastructure</a></li>
						<li><a href="third/ml">Introduction to Machine Learning</a></li>
						<li class="subdropdown-btn">ECE</li>
							<div class="subdropdown">
								<li><a href="third/ece/vlsi">Digital VLSI Desing</a></li>
								<li><a href="third/ece/es">Embedded Systems</a></li>
							</div>
					
						<li class="subdropdown-btn">CSE</li>
							<div class="subdropdown">
								<li><a href="third/cse/adbms">Advanced DBMS</a></li>
								<li><a href="third/cse/hpc">High Performance Computing</a></li>
							</div>
					</div>
			</ul>
		</div>

		<div class="col-6">
			<h1>Home</h1>
			<p>Greetings!!! Here you can find all the study material, shared by the faculty, for preparation of end-sem.</p>
		</div>

		<div class="col-3 right">
			<div class="aside">
				<h2>Latest Info</h2>
				<p> New Study Material has been uploaded on 8 April 2020</p>
				<p> New Study Material has been uploaded on 3 April 2020</p>
				<p> New Study Material has been uploaded on 31 March 2020</p>
				<p> Study Materials have been uploaded on 29 March 2020</p>
				<p></p>
				<p></p>
			</div>
		</div>
	</div>
	
	
	
	<script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) 
		{
			dropdown[i].addEventListener("click", function() {
			//this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") 
			{
				dropdownContent.style.display = "none";
			} 
			else 
			{
				dropdownContent.style.display = "block";
			}
			});
		}
		
		
		var dropdown2 = document.getElementsByClassName("subdropdown-btn");
		var i;

		for (i = 0; i < dropdown2.length; i++) 
		{
			dropdown2[i].addEventListener("click", function() {
			//this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") 
			{
				dropdownContent.style.display = "none";
			} 
			else 
			{
				dropdownContent.style.display = "block";
			}
			});
		}
		
</script>

	
</body>
</html>
