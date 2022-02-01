<?php
    include_once 'dbh.inc.php'
 ?>
 <?php
 $NID = $_POST["search"];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profiling</title>
</head>
<style type="text/css">
          	h1 {

            font-family: 'Comic Sans MS', cursive;
            text-align: center;
            color: blue;
          }
          table {
			border-collapse: separate;
			width: 50%;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
               box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
		}
		         
          td{

               font-size: 18px;
          }
          th{
               background-color: blue;
               color: white;
               height: 30px;

          }
          tr:nth-child(odd)
          {
               background-color: lightblue;
          }
          tr:nth-child(odd):hover
          {
               background-color: dodgerblue;

          }
            tr:nth-child(even)
          {
               background-color: #ededed;
          }
          tr:nth-child(even):hover
          {
               background-color: lightgray;

          }
           caption{
                    font-family: 'Comic Sans MS', cursive;
                    padding-top: 20px;
                    font-size: 20px;
                    font-weight: bold;

               }


		.table1 {
				    
				    margin:auto;
				    font-size:17px;
				    border:1px solid #000;
				    border-collapse:separate;

			}
			.table2 {
				    
                        margin:auto;
                        font-size:17px;
                        border:1px solid #000;
                        border-collapse:separate;
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
             

</style>
<body>

     <h1>Suspected Person's Profile</h1>
	

	<table class = "table1">
				
		<tr>
			
			<th>Name</th>
			<th>NID</th>
			<th>Date of Birth</th>
			<th>Occupation</th>
			<th>Relationship</th>
               <th>Address</th>
			<th>Income</th>
		</tr>

		<?php
				
				$query= "SELECT * FROM nid WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".$row['Name']."</td><td>".$row['NID']."</td><td>".$row['Dob']."</td><td>".$row['Occupation']."</td><td>".$row['Relationship']."</td><td>".$row['Address']."</td><td>".$row['Income']."</td></tr";
     			}
		?>
	</table> 

	<table class = "table2">
		<caption class="caption">Bank Balance</caption>			
		<tr>
			
			<th>Account Holder</th>
			<th>Account Number</th>
			<th>Balance</th>
			
		</tr>

		<?php
				
				$query= "SELECT * FROM dutchbangla_bank WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'Dutch Bangla Bank'."</td><td>".$row['Account_Number']."</td><td>".$row['Current_Balance']."</td></tr>";	
     			
     			}

     			$query= "SELECT * FROM janata_bank WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'Janata Bank'."</td><td>".$row['Account_Number']."</td><td>".$row['Current_Balance']."</td></tr>"; 
     				  				
     			}

     			$query= "SELECT * FROM sonali_bank WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'Sonali Bank'."</td><td>".$row['Account_Number']."</td><td>".$row['Current_Balance']."</td></tr>";   
     				  				
     			}

     			$query= "SELECT * FROM bkash WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'bKash'."</td><td>".$row['MobilelNumber']."</td><td>".$row['Current_Balance']."</td></tr>";   
     							
     			}

     			$query= "SELECT * FROM nogod WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'bKash'."</td><td>".$row['MobilelNumber']."</td><td>".$row['Current_Balance']."</td></tr>";   
     				 				
     			}

     			$query= "SELECT * FROM creditcard WHERE NID = $NID;";
     			$result = mysqli_query($conn,$query);
     			$resultCheck = mysqli_num_rows($result);

     			if($resultCheck > 0 )
     			{
     				$row = mysqli_fetch_array($result);
     				echo "<tr><td>".'Credit Card'."</td><td>".$row['CardNumber']."</td><td>".$row['Current_Balance']."</td></tr>";   
     							
     			}


		?>
	</table> 

		<table class = "table2">
		<caption class="caption">Transaction</caption>				
		<tr>
               <th>Account Holder</th>
			<th>Transaction ID</th>
			<th>Amount</th>
					
		</tr>

		<?php

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
     						echo "<tr><td>".'Dutch Bangla Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     												
     					}
     				}


     				$query12 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result12 = mysqli_query($conn,$query12);
     				$resultCheck = mysqli_num_rows($result12);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result12))
     					{
     						echo "<tr><td>".'Dutch Bangla Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";  
     						
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
     						echo "<tr><td>".'Janata Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     						
     					}
     				}


     				$query15 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result15 = mysqli_query($conn,$query15);
     				$resultCheck = mysqli_num_rows($result15);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result15))
     					{
     						echo "<tr><td>".'Janata Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     						
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
     						echo "<tr><td>".'Sonali Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     						

     					}
     				}


     				$query18 = "SELECT * FROM transactions WHERE ReciverAccountNUmber = '$Account_Number';";
     				$result18 = mysqli_query($conn,$query18);
     				$resultCheck = mysqli_num_rows($result18);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result18))
     					{
     						echo "<tr><td>".'Sonali Bank'."</td><td>".$row['TransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     						 
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
                         $CardClient = $row['CardClient'];

     				$query20 = "SELECT * FROM cardtransactions WHERE CardNumber = '$Account_Number';";
     				$result20 = mysqli_query($conn,$query20);
     				$resultCheck = mysqli_num_rows($result20);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result20))
     					{
     						echo "<tr><td>".$CardClient."</td><td>".$row['ReceiptNumber']."</td><td>".$row['Amount']."</td></tr>";  
     						
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
     						echo "<tr><td>".$row['Client']."</td><td>".$row['MobileTransactionID']."</td><td>".$row['Amount']."</td></tr>";

     					}
     				}


     				$query23 = "SELECT * FROM mobilebankingtransactions WHERE ReciverMobileNumber = '$Account_Number';";
     				$result23 = mysqli_query($conn,$query23);
     				$resultCheck = mysqli_num_rows($result23);

     				if($resultCheck > 0)
     				{
     					while($row = mysqli_fetch_array($result23))
     					{
     						echo "<tr><td>".$row['Client']."</td><td>".$row['MobileTransactionID']."</td><td>".$row['Amount']."</td></tr>";   
     					}
     				}

     				}	   				
     			}
     //Mobile Bank ---------------------------------------------------------------------------------------- 



     			?>
	</table>



		<table class = "table2">
		<caption class="caption">Utility Bill</caption>		
		<tr>
               <th>Billing Client</th>			
			<th>Billing ID</th>
			<th>Amount</th>
		</tr>
			<?php

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
                                   echo "<tr><td>".'Water'."</td><td>".$row['WaterBillingID']."</td><td>".$row['Amount']."</td></tr>"; 
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
     						echo "<tr><td>".'Electricity'."</td><td>".$row['ElectricityBillingID']."</td><td>".$row['Amount']."</td></tr>"; 

     					}
     				}		   				
     			}
     //Electricity Bill----------------------------------------------------------------------------------------

     //Tax Hitory----------------------------------------------------------------------------------------------
			?>				
	</table>

	<table class = "table2">
		<caption class="caption">Tax History</caption>		
		<tr>
			
			<th>TaxID</th>
			<th>Amount</th>
		</tr>

			<?php

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
     						echo "<tr><td>".$row['TaxID']."</td><td>".$row['Amount']."</td></tr>";   
     					}
     				}		   				
     			}
     //Tax Hitory----------------------------------------------------------------------------------------------

     //Land Properties----------------------------------------------------------------------------------------------

			?>	
	</table>


	<table class = "table2">
		<caption class="caption">Land Properties</caption>		
		<tr>
			
			<th>Land Registration</th>
			<th>Registration Office</th>
			<th>Estimated Price</th>
		</tr>
		<?php


	
				$query28 = "SELECT * FROM landproperties WHERE NID = $NID;";
     			$result28 = mysqli_query($conn,$query28);
     			$resultCheck = mysqli_num_rows($result28);

     			if($resultCheck > 0 )
     			{  
     					while($row = mysqli_fetch_array($result28))
     					{
     						echo "<tr><td>".$row['LandRegistration']."</td><td>".$row['RegistrationOffice']."</td><td>".$row['EstimatedPrice']."</td></tr>";   
     					}  			
     				     						   				
     			}
     //Family Members----------------------------------------------------------------------------------------------

		?>
	</table>

     <table class = "table2">
          <caption class="caption">Family Members</caption>          
          <tr>
               
               <th>Relationship</th>
               <th>Name</th>
               <th>NID</th>
          </tr>
          <?php
                             
                    $query28 = "SELECT * FROM nid WHERE NID = $NID;";
                    $result28 = mysqli_query($conn,$query28);
                    $resultCheck = mysqli_num_rows($result28);

                    if($resultCheck > 0 )
                    {  
                              $row1 = mysqli_fetch_array($result28);
                              $Name = $row1['Name'];
                              $Father_Name = $row1['Father_Name'];
                              $Mother_Name = $row1['Mother_Name'];
                              $HusbandOrWife_Name = $row1['HusbandOrWife_Name'];


                              $query8 = "SELECT * FROM nid WHERE Father_Name = '$Father_Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0  )
                                   {
                                        while($row = mysqli_fetch_array($result8) )
                                        {
                                             if($row['NID']!= $NID)
                                             {
                                                 echo "<tr><td>".'Siblings'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>";   
                                             }
                                            
                                        }
                                        
                                   }



                              $query8 = "SELECT * FROM nid WHERE Name = '$Father_Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0 )
                                   {
                                        $row = mysqli_fetch_array($result8);
                                        echo "<tr><td>".'Father'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>";   
                                   }                          


                              $query8 = "SELECT * FROM nid WHERE Name = '$Mother_Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0 )
                                   {
                                        $row = mysqli_fetch_array($result8);
                                        echo "<tr><td>".'Mother'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>";   
                                   }                          


                              $query8 = "SELECT * FROM nid WHERE Name = '$HusbandOrWife_Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0 )
                                   {
                                        $row = mysqli_fetch_array($result8);
                                        echo "<tr><td>".'Husband/Wife'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>";   
                                   }

                              $query8 = "SELECT * FROM nid WHERE Father_Name = '$Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0 )
                                   {
                                        while ($row = mysqli_fetch_array($result8)) {
                                        
                                        echo "<tr><td>".'Children'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>";   
                                             
                                        }

                                   }

                              $query8 = "SELECT * FROM nid WHERE Mother_Name = '$Name';";
                              $result8 = mysqli_query($conn,$query8);
                              $resultCheck = mysqli_num_rows($result8);

                                   if($resultCheck > 0 )
                                   {
                                        while ( $row = mysqli_fetch_array($result8)) {
                                       
                                        echo "<tr><td>".'Children'."</td><td>".$row['Name']."</td><td>".$row['NID']."</td></tr>"; 
                                             
                                        }

                                   }
     
                                               
                    }
          //Family Members----------------------------------------------------------------------------------------------

          ?>
     </table>
     <?php
      if(isset($_POST['search']))
     	 {
     	 	$NIDD = $_POST["search"];
     	 }
       ?>
      		<div class="from">
	      	<form action="Profiling.php" method="POST">
	  		<input type="text" name="search" placeholder="Search..">           		
	      	</form>
	        </div>
	
      	

          <a href="analyze.php">
          <button class="button button2"><span>Back</span></button>
          </a>



</body>
</html>