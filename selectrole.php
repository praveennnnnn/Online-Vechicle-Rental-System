<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Your Role - RentingINN</title>

    <!-- Font Icon -->
<link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">

    		<style>
    			.small-container{background: transparent;} 
    			.container{background: transparent; width: 70%;}
    			h2{ text-align: center; padding: 5px;margin: 5px; border:2px solid #ff1a1a;}
    			p{font-size: 15px;font-weight: bold;}
    			.pimg{ height: 200px;width: 200px; margin-right: 50%; margin-left: 30%;}
    			.col1{float: left; background: radial-gradient(#ffffff,#80ccff,); margin: 10px; padding: 20px; width:400px;height: 360px;}
    			.col2{float: right;   background: radial-gradient(#ffffff,#80ccff,); margin: 10px; padding: 20px; width:400px; height: 360px;}



    		</style>


</head>
<body style=" background: radial-gradient(#ffffff,#80ccff,#00e6e6,#563434);">
    
    <div class="header" > <!-- header class div starts---->
         <div class="container1">  <!--contanier class div starts-->
             <div class="navbar">  <!--navbar class div starts-->
                 
                 <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" style="font-size: 20px;">
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href="aboutus.php"> About US   </a> </li>
                             <li> <a href='contactus.php'> Contact US  </a> </li>
                             
                         </ul>
						 </nav> </div> <!-- class navbar div ends-->
						</div> <!-- end of contanier div-->
    					 </div> <!--header class div ends-->

    		<div class="container">
    			<div class="small-container" >
    				<h2> Select Category</h2>
    			
    			<div class="row">
    				<div class="col1">
    					<p> If You want to sell your product-Click below:</p>
    					<a href="adupload.php"><img class="pimg" src="images/seller.png"> 

    			
    					<h2> Seller</h2></a>

    				</div>
    				<div class="col2">
    					<p> If You want to Rent your product-Click below:</p>
    					<a href="rentingproduct.php"><img class="pimg" src="images/renter.png" style="padding-right: 40px;"> <br>
    			    
    			        <h2> Renter</h2></a>
    				</div>
    			</div>

    			</div>
    			</div>

</body>
</html>