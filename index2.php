<?php
          $conn = mysqli_connect("localhost", "root", "", "anti_corruption");
          if($conn-> connect_error){
               die("Connection Failed: ".$conn-> connect_error);
          }

          
  ?>

<!DOCTYPE html>
<html>
<head>
     <title>View Page</title>
</head>
<body>
          

          <?php
          
          $query = "SELECT * FROM nid ";
          $result = $conn->query($query);

          while($rows =$result-> fetch_assoc())
           {
               $Name = $rows['Name'];
               $NID = $rows['NID'];
               $Income = $rows['Income'];
               $SumOfIncome = 0;


               $AccountNumberDBBL = '';
               $balanceDbbl = 0;
               $AccountNumberJanata = '';
               $balanceJanata = 0;
               $AccountNumberSonali = '';
               $balanceSonali = 0;
               $SumOfBalance = 0;

               $Amout = 0;
               $AccountNumber = '';
               $TransNumber = '';
               $NIDD = '';
               

                    $query1 = "SELECT  nid.NID, dutchbangla_bank.Current_Balance, dutchbangla_bank.Account_Number FROM nid JOIN dutchbangla_bank WHERE $NID = dutchbangla_bank.NID";
                    $result1 = $conn->query($query1);
                    while($rows1 =$result1-> fetch_assoc())
                    {
                         $balanceDbbl = $rows1['Current_Balance'];   
                         $AccountNumberDBBL = $rows1['Account_Number'];
                    }


                    $query2 = "SELECT  nid.NID, janata_bank.Current_Balance,janata_bank.Account_Number FROM nid JOIN janata_bank WHERE $NID = janata_bank.NID";
                    $result2 = $conn->query($query2);
                    while($rows2 =$result2-> fetch_assoc())
                    {
                         $balanceJanata = $rows2['Current_Balance'];
                         $AccountNumberJanata = $rows2['Account_Number'];
                    }

                    $query3 = "SELECT  nid.NID, sonali_bank.Current_Balance, sonali_bank.Account_Number FROM nid JOIN sonali_bank WHERE $NID = sonali_bank.NID";
                    $result3 = $conn->query($query3);
                    while($rows3 =$result3-> fetch_assoc())
                    {
                         $balanceSonali = $rows3['Current_Balance'];
                         $AccountNumberSonali = $rows3['Account_Number'];
                    }

                    $SumOfBalance = $balanceDbbl + $balanceJanata + $balanceSonali;
                    
                    if ($AccountNumberDBBL == '') {
                         
                    }
                    else 
                    {
                         $query6 = "INSERT INTO `bankaccountlist` (`NID`, `AccountNumber`) VALUES ('$NID', '$AccountNumberDBBL');";
                         $result6 = $conn->query($query6); 
                    }

                    if ($AccountNumberJanata == '') {
                         
                    }
                    else 
                    {
                         $query7 = "INSERT INTO `bankaccountlist` (`NID`, `AccountNumber`) VALUES ('$NID', '$AccountNumberJanata');";
                         $result7 = $conn->query($query7); 
                    }

                    if ($AccountNumberSonali == '') {
                         
                    }
                    else 
                    {
                         $query8 = "INSERT INTO `bankaccountlist` (`NID`, `AccountNumber`) VALUES ('$NID', '$AccountNumberSonali');";
                         $result8 = $conn->query($query8); 
                    }

                    
                    
                    $query5 = "INSERT INTO `bankbalancerecordfinal` (`Name`, `NID`, `DBBLAccountNumber`, `DBBL_Balance`, `JanataBankAccountNumber`, `JanataBank_Balance`, `SonaliBankAccountNumber`, `SonaliBank_balance`, `SumBalance`) VALUES ('$Name', '$NID', '$AccountNumberDBBL', '$balanceDbbl', '$AccountNumberJanata', '$balanceJanata', '$AccountNumberSonali', '$balanceSonali', '$SumOfBalance');";
               $result5 = $conn->query($query5);  


               $query9 = "SELECT  bankaccountlist.NID , bankaccountlist.AccountNumber,transactions.TransactionID,transactions.Amount FROM bankaccountlist,transactions WHERE $NID = bankaccountlist.NID";
                    $result9 = $conn->query($query9);


                    $counter = 0;

                    while($rows9 =$result9-> fetch_assoc())
                    {
                         $Amount = $rows9['Amount'];
                         $NID =  $rows9['NID'];
                         $AccountNumber = $rows9['AccountNumber'];
                         $TransNumber = $rows9['TransactionID'];
                         
                         if($counter == 0)
                         {
                              echo $NID ;
                              echo "    ";
                              
                         }
                         if($counter == 1)
                         {
                              echo " __________ ";
                              echo $AccountNumber;
                              echo "    ";
                              echo $TransNumber ;
                              echo "    ";
                         
                         echo $Amount;
                         echo "<br>";
                         }
                         else
                         {

                              echo $AccountNumber;
                              echo "    ";
                              echo $TransNumber ;
                              echo "    ";
                         
                         echo $Amount;
                         echo "<br>";
                         }
                         $counter = 1;
                         
                    }    
           }




          ?>
   
</body>
</html>