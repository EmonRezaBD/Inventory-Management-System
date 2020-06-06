<?php

$con=mysqli_connect('core.bdwebsolutions.com','rongonshop_Reza','OQbj1xlgZqD$','rongonshop_Test_Project');
if(mysqli_connect_errno())
{
    echo "Failed to connect".mysqli_connect_error();
    exit();
}

$query= "insert into OrderEntry(OrderDate,ProductCode,ReceiverName,ReceiverNumber,OptionalNumber,PayableAmount,ReceiverAddress,PackageDescription,Instruction,Comments) values(?,?,?,?,?,?,?,?,?,?)";

if($stmt=mysqli_prepare($con,$query))
{
    mysqli_stmt_bind_param($stmt,"sssiiissss",$OrderDate,$OrderProductCode,$ReceiverName,$ReceiverNumber,$OptionalNumber,$PayableAmount,$ReceiverAddress,$PackageDescription,$Instruction,$Comments);
 
 
    $OrderDate=$_REQUEST["OrderDate"];
    $OrderProductCode=$_REQUEST["OrderProductCode"];
     
    $ReceiverName=$_REQUEST["ReceiverName"];
    $ReceiverNumber=$_REQUEST["ReceiverNumber"];
    $OptionalNumber=$_REQUEST["OptionalNumber"];
    $PayableAmount=$_REQUEST["PayableAmount"];
    $ReceiverAddress=$_REQUEST["ReceiverAddress"];
    $PackageDescription=$_REQUEST["PackageDescription"];
    $Instruction=$_REQUEST["Instruction"];
    $Comments=$_REQUEST["Comments"];
    
    $sql= "select ProductCode,ProductName from product";
    
    $result=mysqli_query($con,$sql);
    
    $trow=mysqli_num_rows($result);
    
    //echo "row: ".$trow."<br>";
    $check=false;
    
    while($trow--)
    {
        
         $row=$result->fetch_assoc();
         
        // echo $row['password']."<br>";
         
          if($OrderProductCode==$row["ProductCode"])
          {
                $check=true;
               // echo "if"."<br>";
                break;
             
          }
          
    }
    
    if($check==true)
    {
        
                		 echo"Record inserted successfully.Here are the values: "."<br><br>";
                		 echo $OrderDate."<br>"; 
                		 echo $row["ProductName"]."<br>";
                		 echo $row["ProductCode"]."<br>"; 
                
                		 echo $ReceiverName."<br>"; 
                		 echo $ReceiverNumber."<br>";	 
                		 echo $OptionalNumber."<br>"; 
                		 echo $PayableAmount."<br>"; 
                		 echo $ReceiverAddress."<br>"; 
                		 echo $PackageDescription."<br>"; 
                		 echo $Instruction."<br>"; 
                		 echo $Comments."<br>";
                		 echo "<----------------------------------------------------------->"."<br><br>"; 
    }
    
    else
    {
        echo  "Invalid Product Code. Try Again."."<br>";
    }
    
    
     if(mysqli_stmt_execute($stmt))
     {
        echo " ";
     }
 
    else
    {
         echo "ERROR: Could not execute query: $sql. " . mysqli_error($con);
    }
}

else
{
    echo "ERROR: Could not prepare query: $query. " . mysqli_error($con);
}

mysqli_close($stmt);
mysqli_close($result);
mysqli_close($con);

?>


