<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-widht , initial-scale=1.0">	
<meta name="Description" content="Adorable store">
<meta name="Keywords" content="Adorable store,store,shop">
<meta name="author" content="Nora hamim ALdossary,Nada Nasser Albeshi,Zahra Saeed Al-Ghazwi ">	
<title>Registeration</title>
	
<link rel="stylesheet" href="As-css.css">	
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<!----------------------header---------------------->   
<div class="header">
<div class="container">	
<div class="navbar">
<div class="logo">
    <a href="Adorable.html">
        <img src="IMGE/onlinelogomaker-112820-1942-4961-2000-transparent.png" width="170px" alt="NNZ">
    </a>
</div>
<nav>	
	
<ul id="menuitems">

<li class="current"><a href="Adorable.html"><i class="fa fa-home"></i>Home</a></li>	
<li><a href="">Account<i class="fa fa-user" aria-hidden="true"></i></a></li>	
<li><a href="products.html">products</a></li>	
</ul>
</nav>
<a href="newcart.php">
    <img src="https://img.icons8.com/dotty/80/000000/favorite-cart.png" width="40px" height="40px" alt="cart"/>
</a>
<img src="IMGE/menu.png" class="menu" onclick="menutoggle()"> </div>
    
<!----------------------- account-page ----------------------->
<div class="account-page"> 
    <div class="container">
        <div class="row"> 
            <div class="col-2">
                   <img src="IMGE/image0.jpeg" width="100%">
            </div>
            <div class="col-2">
                   <div class="form-container">
                       <div class="form-btn">
                          <span onClick="login()">Login</span>
                       </div>
                       
                       <form id="LoginForm">
                       <input type="text" placeholder="Username">
                       <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                           <a href="">Forgot password</a>
                       </form>
                       <!---
                       <form id=RegForm>
                       <input type="text" placeholder="Username">
                     <input type="email" placeholder="Email">
                       <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                       </form> 
                       --->
                       
                   </div>
            </div>
        </div>
    </div>        
</div>          
 <!----------------------footer---------------------->
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
            
<!--------------- js for toggle Form ------------>
    
    <script>
           var LoginForm = document.getElementById("LoginForm");
        
    
        
        
        
        
        
        
        
        
        
        
        
        
        
    </script>      
            
            
</body>
</html>