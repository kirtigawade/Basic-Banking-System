<?php 
	session_start();
	include 'connection.php';

	$q="select * from customer";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style> 
		
		
		table {
			font-family: 'Lato', sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
			font-family: 'Lato', sans-serif; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color:#f5f5dc;
		}
		nav{ /*this is the navigation bar*/
            width: 100%;
            background-color:grey;
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
            color: 	#000000;
            display:block;
            font-weight: 700;
        }
        .logo{
            float: left;
            padding: 10px;
        }	
		body
        {
            background-image: url(transfer1.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
		.table{
			color: white;
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
                <li><a href="home.php">HOME</a></li>
               
                <li><a href="display.php">View Customers</a></li>
               
                <li><a href="transfermoney.php">Transfer Money </a></li>
                <li><a href="transactionhistory.php">View Transaction History</a></li>
            </ul>
        </nav>
		
<!-- <nav>
            <div class="logo">
                <img src="logo.png" width="50" height="50">
            </div>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="display.php">VIEW Customers</a></li>
                <li><a href="transfermoney.php">Transfer Money </a></li>
                <li><a href="transactionhistory.php">View Transaction History</a></li>
            </ul>
        </nav> -->
		
	 <!-- <div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
			
            <td style = "text-align:center;border:0px"> <a href="home.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="display.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">Transaction History</button></a></td>
            
		</tr>
        </table> 
	</div> -->
    <h2 style="color:black;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: 'Lato', sans-serif;;color:black;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["id"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["email"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>