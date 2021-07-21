<!DOCTYPE html>
<html>
    <head>
        <title>Banking System</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style type="text/css">
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }
        body{
            background-image: linear-gradient(to right, #900C3F,#02064a);
	        color: #fff;
	        
        
        }
    
        nav{ /*this is the navigation bar*/
            width: 100%;
             
            background-image: linear-gradient(to right, #FFC300,#FF5733 );
            overflow:hidden;
        }
        nav ul{
            list-style-type: none; /*this is to remove the bullet pts*/
            float: right;
            margin-top:7px;
        }
        nav ul li{
            display:inline-block; /*elements will be shown in a single line*/

        }
        nav ul li a{ /*styling anchors*/
            text-decoration:none;
            padding: 20px 35px;
            text-align:center ;
            color: #fff;
            display:block;
            font-weight: 700;
        }
        #banner
        {
	       
	        color: #fff;
	        padding-top: 5%;
        }

        .promo-title
        {
	        font-size: 60px;
	        font-weight: 650;
	        padding-top: 15%;
            margin-left: 40px;
        }
        .img-fluid
        {
            margin-left: 26%;
            width: 100%;
            margin-top: 5%;
        }
         
	 
        .logo{
            float: left;
            padding: 10px;
        }
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;

        }
    hr {
     margin: top 1rem;;
     
    border: 0;
    border-top: 1px solid  white;
    box-sizing: content-box;
    height: 0;
    overflow: visible;
    }
             
       
       
.content {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: linear-gradient(to bottom, white 0%, blue 100%);
  
  
  border: 10px ;
 
 
  background-color: coral;

}
        </style>
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="logo.png" width="50" height="50">
            </div>
            <ul>
            <li><a href='#'>SPARKS FOUNDATION BANKING SYSTEM</a></li>
                <li><a href="#">HOME</a></li>
               
                <li><a href="display.php">View Customers</a></li>
               
                <li><a href="transfermoney.php">Transfer Money </a></li>
                <li><a href="transactionhistory.php">View Transaction History</a></li>
            </ul>
        </nav>
        <section id ="banner">
  <div class = "container">
  <div class = "row">
  <div class = "col-md-6">
  <p class="promo-title">Welcome To Banking System</p>
  </div>  

  <div class = "col-md-6" text-center>
    <img src = "b3.jpg" class = img-fluid>
  </div>
  </div>
  </div>
  
</section>
 
        <div class="footer">
        <hr> 
             <p> Website Designed By KIRTI GAWADE</p>
         </div>   
    </body>
</html>