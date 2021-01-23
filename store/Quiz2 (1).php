<!doctype html>
<!-- Zahra Saeed AL-Ghazwi.(2180002524)-->
<html>
<head>
<meta charset="utf-8">
<title>Quiz 2</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<h1> New Grocery Products </h1>
	<h2> Organic and fresh </h2>
<?php
	//start writing php code here	
		$displayform=false;
	    $result =$tomato_count=$lemon_count=$broccoli_count =0;
	    $noResult="";
	if (isset($_GET['submit'])){
		if(!empty($_GET['broccoli-quantity'])){
		$result+= $_GET['broccoli-quantity']*$_GET['broccoli-price'];
		$broccoli_count=$_GET['broccoli-quantity'];}
		
		if(!empty($_GET['tomato-quantity'])){
		$result+= $_GET['tomato-quantity']*$_GET['tomato-price'];
		$broccoli_count=$_GET['tomato-quantity'];}
		
		if(!empty($_GET['lemon-quantity'])){
		$result+= $_GET['lemon-quantity']*$_GET['lemon-price'];
		$broccoli_count=$_GET['lemon-quantity'];}
		
		
		if($result>0){
			$displayform=true;
		
		}
		else {
		$noResult="your cart is empty please choose one of our fresh  veggies";	
			
		}
		
		
	}
	
	
	?>
<form method="get">

<div> <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909779.svg" alt="broccoli-img">
<p>
<input type="number" min="0"  name="broccoli-quantity"> 
<input type="text" name="broccoli-price" value="15" readonly > SR for each Kg</p> 
</div>

<div> <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909894.svg" alt="tomato-img">
<p> <input type="number" min="0"  name="tomato-quantity">
	<input type="text" name="tomato-price" value="8" readonly  > SR for each Kg </p> 
</div>
	
<div> <img src="https://www.flaticon.com/svg/static/icons/svg/2909/2909837.svg" alt="lemon-img">
<p> <input type="number" min="0" name="lemon-quantity" >
	<input type="text" name="lemon-price" value="10" readonly  > SR for each Kg </p>
</div>
<br>	
<input type="submit" name="submit" value="checkout">
	<button name="button"><a href="Quiz2.php"> reset </a> </button>	

</form>
	<div class="result">
		<?php 
	if($displayform){
		echo "<h2>"."The total value is :".$result. "SR</h2>";
		echo "<h3>"."YOU HAVE ORDERED : </h3>";
		echo "</p>" .$broccoli_count . "Kg of brocoli";
		echo "<br>" .$tomato_count . "Kg of tomato <br>";
		echo "<br>" .$lemon_count . "Kg of lemon " ."</p>";
		
	} else{
		
		echo "<p class='alart'>" .$noResult ."</p>";
	}
	?>
	
		</div>

</body>
</html>

