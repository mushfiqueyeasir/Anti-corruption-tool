<?php
    include_once 'dbh.inc.php'
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Analyzed Result</title>
	<style type="text/css">

		h1{
			font-family: monospace;
			text-align: center;
			font-size: 35px;
			color: #d96459;		
	 	 }

		table{
			border-collapse: separate;
			width: 40%;
			color: black;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			}

		th{
			background-color: #d96459;
			color: white;
			}
			tr:nth-child(odd)
          {
               background-color: #Edb9b5;
          }
          tr:nth-child(odd):hover
          {
               background-color: #E5a29c;

          }
            tr:nth-child(even)
          {
               background-color: #ededed;
          }
          tr:nth-child(even):hover
          {
               background-color: lightgray;

          }
		input[type=text] {

			  width: 150px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 16px;
			  background-color: white;
			  
			  background-position: 10px 10px; 
			  background-repeat: no-repeat;
			  padding: 12px 10px 12px 20px;
			  transition: width 0.4s ease-in-out;
			}
			input[type=text]:focus {
			  width: 20%;
			}
			.from {
				  
				   display: block;
				   margin-top: 5%;			  
				  margin-left: 45%;
				}

				.button{
			  background-color: #4CAF50;
			  border: none;
			  color: white;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  border-radius: 20px;  
			  cursor: pointer;
			  transition: all 0.5s;
			}
			.button2 {background-color: red;padding: 15px 64px;margin: 40px 840px;} 
			.button11 {background-color: red;padding: 15px 64px;margin: 40px 840px;} 

			.button span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			.button span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -20px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}

	</style>


</head>
<body>
	<h1>Suspected List</h1>
	 <table class="table">
       		  	<tr>
       		  		<th>No</th>
       		  		<th>Name</th>
       		  		<th>NID</th>      		  		
       		  	</tr>
     	<?php
     	$query = "SELECT * FROM nid";
     	$result = $conn->query($query);

     	$no = 0;

     	while($rows =$result-> fetch_assoc())
     	 {
     	 	$Name = $rows['Name'];
     	 	$NID = $rows['NID'];
     	 	$Income = $rows['Income'];
     	 	$Relationship = $rows['Relationship'];
     	 	$HusbandOrWife_Name = $rows['HusbandOrWife_Name'];
     	 	$Father_Name = $rows['Father_Name'];
     	 	$Mother_Name = $rows['Mother_Name'];
    	 	
     	 	$SumOfBalance = 0;

// Bank-------------------------------------------------------------------------
     			$query1 = "SELECT * FROM dutchbangla_bank WHERE NID = $NID;";
     			$result1 = mysqli_query($conn,$query1);
     			$resultCheck = mysqli_num_rows($result1);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result1);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			} 

     			$query2 = "SELECT * FROM janata_bank WHERE NID = $NID;";
     			$result2 = mysqli_query($conn,$query2);
     			$resultCheck = mysqli_num_rows($result2);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result2);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			} 

     			$query3 = "SELECT * FROM sonali_bank WHERE NID = $NID;";
     			$result3 = mysqli_query($conn,$query3);
     			$resultCheck = mysqli_num_rows($result3);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result3);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			}
// Bank-------------------------------------------------------------------------

// Credit Card------------------------------------------------------------------

     			$query4 = "SELECT * FROM creditcard WHERE NID = $NID;";
     			$result4 = mysqli_query($conn,$query4);
     			$resultCheck = mysqli_num_rows($result4);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result4);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			}
// Credit Card------------------------------------------------------------------

// Mobile Banking---------------------------------------------------------------

     			$query5 = "SELECT * FROM bkash WHERE NID = $NID;";
     			$result5 = mysqli_query($conn,$query5);
     			$resultCheck = mysqli_num_rows($result5);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result5);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			}


     			$query6 = "SELECT * FROM nogod WHERE NID = $NID;";
     			$result6 = mysqli_query($conn,$query6);
     			$resultCheck = mysqli_num_rows($result6);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result6);
     				$SumOfBalance = $SumOfBalance + $row['Current_Balance'];
     			}    			
// Mobile Banking---------------------------------------------------------------

     			$maximumIncome = 0;

     				if($Income > $maximumIncome)
     				{
     					$maximumIncome = $Income;
     				}


// Balance Check--------------------------------------------------------------------

     		$CheckBalance = 0;
     		if($SumOfBalance > ($Income * 2) )
     			{
     				if($Relationship == 'Married')
     				{
     					$query7 = "SELECT * FROM nid WHERE Name = '$HusbandOrWife_Name';";
     					$result7 = mysqli_query($conn,$query7);
     					$resultCheck = mysqli_num_rows($result7);

     						if($resultCheck > 0 )
     						{
     							$row = mysqli_fetch_array($result7);

     							if($row['Income'] > $maximumIncome)
     							{
     								$maximumIncome = $row['Income'];
     							}

     							if($SumOfBalance > ($row['Income'] * 2))
     							{
     								$CheckBalance = 1;
     							}
     						}
       				}

       				
     					$query8 = "SELECT * FROM nid WHERE Name = '$Father_Name';";
     					$result8 = mysqli_query($conn,$query8);
     					$resultCheck = mysqli_num_rows($result8);

     						if($resultCheck > 0 )
     						{
     							$row = mysqli_fetch_array($result8);

     							if($row['Income'] > $maximumIncome)
     							{
     								$maximumIncome = $row['Income'];
     							}

     							if($SumOfBalance > ($row['Income'] * 2))
     							{
     								$CheckBalance = 1;;
     							}
     						}

     					$query9 = "SELECT * FROM nid WHERE Name = '$Mother_Name';";
     					$result9 = mysqli_query($conn,$query9);
     					$resultCheck = mysqli_num_rows($result9);

     						if($resultCheck > 0 )
     						{
     							$row = mysqli_fetch_array($result9);

     							if($row['Income'] > $maximumIncome)
     							{
     								$maximumIncome = $row['Income'];
     							}

     							if($SumOfBalance > ($row['Income'] * 2))
     							{
     								$CheckBalance = 1;;
     							}
     						}
       				
       			}
// Balance Check--------------------------------------------------------------------


// Transaction Check--------------------------------------------------------------------
       			$Account_Number = '';
       			$Amount = 0;

       			$checkTransaction = 0;
       			$suspiciousAmount = 0;
      //DBBL Bank ----------------------------------------------------------------------------------------
       		    $query10 = "SELECT * FROM dutchbangla_bank WHERE NID = $NID;";
     			$result10 = mysqli_query($conn,$query10);
     			$resultCheck = mysqli_num_rows($result10);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result10);
     				$Account_Number = $row['Account_Number'];

     				$query11 = "SELECT * FROM transactions WHERE SenderAccountNUmber = '$Account_Number';";
     				$result11 = mysqli_query($conn,$query11);
     				$resultCheck = mysqli_num_rows($result11);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result11))
     					{
     						$Amount = $row['Amount'];
     						     					
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}

     					}
     				}


     				$query12 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result12 = mysqli_query($conn,$query12);
     				$resultCheck = mysqli_num_rows($result12);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result12))
     					{
     						$Amount = $row['Amount'];

     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}
     			}
     //DBBL Bank ---------------------------------------------------------------------------------------- 

     //Janata Bank ----------------------------------------------------------------------------------------
       		    $query13 = "SELECT * FROM janata_bank WHERE NID = $NID;";
     			$result13 = mysqli_query($conn,$query13);
     			$resultCheck = mysqli_num_rows($result13);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result13);
     				$Account_Number = $row['Account_Number'];

     				$query14 = "SELECT * FROM transactions WHERE SenderAccountNUmber = '$Account_Number';";
     				$result14 = mysqli_query($conn,$query14);
     				$resultCheck = mysqli_num_rows($result14);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result14))
     					{
     						$Amount = $row['Amount'];
     						     					
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}

     					}
     				}


     				$query15 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result15 = mysqli_query($conn,$query15);
     				$resultCheck = mysqli_num_rows($result15);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result15))
     					{
     						$Amount = $row['Amount'];

     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}
     			}
     //Janata Bank ---------------------------------------------------------------------------------------- 

     //Sonali Bank ----------------------------------------------------------------------------------------
       		    $query16 = "SELECT * FROM sonali_bank WHERE NID = $NID;";
     			$result16 = mysqli_query($conn,$query16);
     			$resultCheck = mysqli_num_rows($result16);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result16);
     				$Account_Number = $row['Account_Number'];

     				$query17 = "SELECT * FROM transactions WHERE SenderAccountNUmber = '$Account_Number';";
     				$result17 = mysqli_query($conn,$query17);
     				$resultCheck = mysqli_num_rows($result17);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result17))
     					{
     						$Amount = $row['Amount'];
     						     					
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}

     					}
     				}


     				$query18 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result18 = mysqli_query($conn,$query18);
     				$resultCheck = mysqli_num_rows($result18);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result18))
     					{
     						$Amount = $row['Amount'];

     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}
     			}
     //Sonali Bank ---------------------------------------------------------------------------------------- 

     //CreditCard  ----------------------------------------------------------------------------------------
       		    $query19 = "SELECT * FROM creditcard WHERE NID = $NID;";
     			$result19 = mysqli_query($conn,$query19);
     			$resultCheck = mysqli_num_rows($result19);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result19);
     				$Account_Number = $row['CardNumber'];

     				$query20 = "SELECT * FROM cardtransactions WHERE CardNumber = '$Account_Number';";
     				$result20 = mysqli_query($conn,$query20);
     				$resultCheck = mysqli_num_rows($result20);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result20))
     					{
     						$Amount = $row['Amount'];
     						     					
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}

     					}
     				}
     			}
     //CreditCard ---------------------------------------------------------------------------------------- 

     //Mobile Bank ----------------------------------------------------------------------------------------
       		    $query21 = "SELECT * FROM mobieoperator WHERE NID = $NID;";
     			$result21 = mysqli_query($conn,$query21);
     			$resultCheck = mysqli_num_rows($result21);

     			if($resultCheck > 0 )
     			{
     				while($row = mysqli_fetch_array($result21))
     				{
     					$Account_Number = $row['MobilelNumber'];

     				$query22 = "SELECT * FROM mobilebankingtransactions WHERE SenderMobileNumber = '$Account_Number';";
     				$result22 = mysqli_query($conn,$query22);
     				$resultCheck = mysqli_num_rows($result22);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result22))
     					{
     						$Amount = $row['Amount'];
     						
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}

     					}
     				}


     				$query23 = "SELECT * FROM mobilebankingtransactions WHERE ReciverMobileNumber = '$Account_Number';";
     				$result23 = mysqli_query($conn,$query23);
     				$resultCheck = mysqli_num_rows($result23);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result23))
     					{
     						$Amount = $row['Amount'];

     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}

     				}	   				
     			}
     //Mobile Bank ---------------------------------------------------------------------------------------- 

     //Water Bill---------------------------------------------------------------------------------------- 
       		    $query24 = "SELECT * FROM waterbilll WHERE NID = $NID;";
     			$result24 = mysqli_query($conn,$query24);
     			$resultCheck = mysqli_num_rows($result24);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result24);
     				$Account_Number = $row['WaterBillingID'];

     				$query25 = "SELECT * FROM waterbilllhistory WHERE WaterBillingID = '$Account_Number';";
     				$result25 = mysqli_query($conn,$query25);
     				$resultCheck = mysqli_num_rows($result25);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result25))
     					{
     						$Amount = $row['Amount'];
     						
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}		   				
     			}

     //Water Bill---------------------------------------------------------------------------------------- 

     //Electricity Bill---------------------------------------------------------------------------------------- 
       		    $query26 = "SELECT * FROM electricitybilll WHERE NID = $NID;";
     			$result26 = mysqli_query($conn,$query26);
     			$resultCheck = mysqli_num_rows($result26);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result26);
     				$Account_Number = $row['ElectricityBillingID'];

     				$query27 = "SELECT * FROM electricitybilllhitory WHERE ElectricityBillingID = '$Account_Number';";
     				$result27 = mysqli_query($conn,$query27);
     				$resultCheck = mysqli_num_rows($result27);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result27))
     					{
     						$Amount = $row['Amount'];
     						
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}		   				
     			}
     //Electricity Bill---------------------------------------------------------------------------------------- 

     //Tax---------------------------------------------------------------------------------------- 
       		  
       		    $query28 = "SELECT * FROM tax WHERE NID = $NID;";
     			$result28 = mysqli_query($conn,$query28);
     			$resultCheck = mysqli_num_rows($result28);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result28);
     				$Account_Number = $row['TaxID'];

     				$query29 = "SELECT * FROM taxtransactionshistory WHERE TaxID = '$Account_Number';";
     				$result29 = mysqli_query($conn,$query29);
     				$resultCheck = mysqli_num_rows($result29);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result29))
     					{
     						$Amount = $row['Amount'];
     						
     						if($Amount > $maximumIncome)
     						{
     							$checkTransaction = 1;
     							$suspiciousAmount = $Amount;

     						}
     					}
     				}		   				
     			}
       		  

     //Tax---------------------------------------------------------------------------------------- 

 // Transaction Check---------------------------------------------------------------------

 // Listing-----------------------------------------------------------------------------------------         
       		  if($CheckBalance==1 || $checkTransaction ==1)
       		  {
       		  	$no++;
       		  	echo "<tr><td>".$no."</td><td>".$Name."</td><td>".$NID."</td></tr>";  		  	   
			 						   
       		  }
       		  
 // Listing-----------------------------------------------------------------------------------------
     	 }
     	 if($no==0)
     	{
     		echo "<tr><td>".''."</td><td>".'No Suspected Person Found!'."</td><td>".''."</td></tr>";
     	}
     	
     	 if(isset($_POST['search']))
     	 {
     	 	$NIDD = $_POST["search"];
     	 }
      	 ?>

      	</table> 
      	<?php
      	if($no>0)
      	{
      		?>
      		<div class="from">
	      	<form action="Profiling.php" method="POST">
	  		<input type="text" name="search" placeholder="Search..">           		
	      	</form>
	        </div>
	        <?php
      	}


      	 ?>
       <button id="notify" class="button button11"><span>Notify All</span></button>
      	
      <a href="home.php">
		<button class="button button2"><span>Back</span></button>
		</a>
<script type="text/javascript">
	let btnNotify = document.querySelector('#notify');
	btnNotify.addEventListener('click',()=>{
		btnNotify.style.backgroundColor='#008000';
		btnNotify.innerText='Notified all'
	});



</script>

</body>
</html>