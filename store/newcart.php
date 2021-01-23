<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-widht , initial-scale=1.0">	
<meta name="Description" content="Adorable store">
<meta name="Keywords" content="Adorable store,store,shop">
<meta name="author" content="Nora hamim ALdossary,Nada Nasser Albeshi,Zahra Saeed Al-Ghazwi ">	
<title>Cart</title>
	
    <link rel="stylesheet" href="As-css.css">	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
<div class="header">
<div class="container">	
<div class="navbar">
<div class="logo">
<img src="IMGE/onlinelogomaker-112820-1942-4961-2000-transparent.png" width="170px" alt="NNZ">
</div>
<nav>	
	
<ul id="menuitems">

<li class="current"><a href="Adorable.html"><i class="fa fa-home"></i>Home</a></li>	
<li><a href="Adorable.html">Account<i class="fa fa-user" aria-hidden="true"></i></a></li>	
<li><a href="products.html">products</a></li>	
</ul>
</nav>
    
<a href="newcart.php">
    <img src="https://img.icons8.com/dotty/80/000000/favorite-cart.png" width="40px" height="40px" alt="cart"/>
    </a>
<img src="IMGE/menu.png" class="menu" onclick="menutoggle()"> </div>   
    
    
    
    
	<h1> Cart Products </h1>
<?php
	//start writing php code here	
		$displayform=false;
	    $result =$p1_count=$p2_count=$p3_count=$p4_count=0;
	    $noResult=" ";
    
	if (isset($_GET['submit'])){
        
		if(!empty($_GET['broccoli-quantity'])){
		$result+= $_GET['broccoli-quantity']*$_GET['broccoli-price'];
		$p1_count=$_GET['broccoli-quantity'];}
		
		if(!empty($_GET['tomato-quantity'])){
		$result+= $_GET['tomato-quantity']*$_GET['tomato-price'];
		$p2_count=$_GET['tomato-quantity'];}
		
		if(!empty($_GET['lemon-quantity'])){
		$result+= $_GET['lemon-quantity']*$_GET['lemon-price'];
		$p3_count=$_GET['lemon-quantity'];}
		
        if(!empty($_GET['lemon-quantity'])){
		$result+= $_GET['lemon-quantity']*$_GET['lemon-price'];
		$p4_count=$_GET['lemon-quantity'];}
		
		if($result>0){
			$displayform=true;
		
		}
		else {
		$noResult="your cart is empty please choose one of our product or more !!";	
			
		}
		
		
	}
	?>
    
<form method="get">
    
<!--------p1------------------>
<div class="col-4">
			<a href="pd2.html">
		<img src="IMGE/IMG_8551.JPG" height="100px" width="100px">
         <h4>Wooden wool game</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
              <p>
                <input type="number" min="0"  name="p1-quantity">
			    <input type="text" name="p1-price" value="40.00" readonly > $ 
              </p>
			</a>
			</div>
<!--------p2------------------>
<div class="col-4">
			<a href="pd3.html">
		<img src="IMGE/IMG_8550.JPG">
<h4>Educational arithmetic game</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
			  <p>
                <input type="number" min="0"  name="p2-quantity">
			    <input type="text" name="p2-price" value="15.00" readonly > $ 
              </p>
			</a>
			</div>
<!--------p3------------------>    

    
<div class="col-4">
			<a href="Products details.html">
	<img src="IMGE/IMG_8553.JPG" width="230px" height="238px">
<h4> long sleeve t-shirt in white</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			  <p> 
                <input type="number" min="0" name="p3-quantity" >
                <input type="text" name="p3-price" value="400.99" readonly  > $400.99
              </p>
			</a>
			</div>
    
<!--------p4------------------>

<div class="col-4">
			<a href="pd4.html">
		<img src="IMGE/IMG_8554.JPG" width="230px" height="238px">
<h4>Art tools</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			   <p> 
                <input type="number" min="0" name="p4-quantity" >
                <input type="text" name="p4-price" value="399.99" readonly  > $ 
                </p>
			</a>
			</div>
		</div>

<!-----------submit---------->
<br>	
    <input type="submit" name="submit" value="Add To Cart">
	<button name="button"><a href="newcart.php"> Reset </a> </button>	
	<button name="button"><a href="Adorable.html"> Go Back To Shopping </a> </button>	

</form>
    
	<div class="result">
		<?php 
	          if($displayform){
		      echo "<h2>"."The total value is :".$result. "$</h2>";
		      echo "<h3>"."YOU HAVE ORDERED : </h3>";
		      echo "</p>" .$p1_count . "of Wooden wool game";
		      echo "<br>" .$p2_count . "of Educational arithmetic game <br>";
		      echo "<br>" .$p3_count . "of long sleeve t-shirt in white";
		      echo "<br>" .$p3_count . "of Art tools"."</p>";
		
	            } else{
		
		      echo "<p class='alart'>" .$noResult ."</p>";
	            }
	    ?>
	
		</div>
    
    <!------footer-------->
	<div class="footer">
	<div class="container">
		<div class="row">
		<div class="footer-col-1">
			<h3>Download Our App</h3>
			<p>Download app for android and ios mobile phone.</p>
			<div class="app-logo">
			<img src="IMGE/g.png"> 
		    <img src="IMGE/تنزيل (1).png" > </div>
			
		  </div>
		<div class="footer-col-2">
			<img src="IMGE/onlinelogomaker-112820-1942-4961-2000-transparent.png">
			<p>Our goal is to provide you with the best original products at the best prices and quality</p>
			</div>
			<div class="footer-col-3">
			<h3>Useful links</h3>
			<ul>
				
				<li>coupons</li>
				<li>Blog post</li>
				<li>return policy</li>
				<li>join affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
			<h3>Follow us</h3>
			<ul>
				
				<li>twitter</li>
				<li>instagram</li>
				<li>snapchat</li>
				<li>youtube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">&copy;copyright 2020 - project web based design IS1</p>
		</div>
	</div>
	
	<script>
	var menuitems=document.getelementById("menuitems");
	menuitems.style.maxheight = "0px";
		function menutoggle(){
			if(menuitems.style.maxheight == "0px")
				{
					
				menuitems.style.maxheight = "200px";	
				}
			else{
				menuitems.style.maxheight = "0px";
			}
		}
	</script>

</body>
</html>

