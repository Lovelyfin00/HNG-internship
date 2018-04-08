<?php
$date = date("Y/m/d");
$time = date("h:i:sa");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body, html {
		height: 100%;
		margin: 0;
	}
	.bg {
		background-image: url(death.jpg);
		height: 100%;
		margin-top: 0;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	p {
		padding-top: 0px;
		font-size: 100px; 
		color: #8b0000; 
		text-align: center; 
		font-family: Amaranth; 
		text-shadow: 2px 2px 10px #ff0000;
		font-weight: bolder;
	}
	.text-glow:hover, .text-glow:focus, .text-glow:active {

   -webkit-stroke-width: 5.3px;

   -webkit-stroke-color: #FFFFFF;

   -webkit-fill-color: #FFFFFF;

   text-shadow: 1px 0px 10px blue;

   -webkit-transition: width 0.3s; /*Safari & Chrome*/

   transition: width 0.3s;

   -moz-transition: width 0.3s; /* Firefox 4 */

   -o-transition: width 0.3s; /* Opera */

   }
   .text {
   	font-size: 70px;
   	padding-top: 170px;
   	padding-bottom: 0px;
   }
	</style>
	
</head>
<body class="bg">
	<p class="text">
		TIME TO DIE!!!
	</p>
	<p class="text-glow">
		<?php 
		echo $time . "<br />";
		echo $date;
		?>
	</p>
</body>
</html>

