<?php

$conn =  mysqli_connect('core.bdwebsolutions.com','rongonshop_Reza','OQbj1xlgZqD$','rongonshop_Test_Project');
$query = "SELECT * FROM product ";
$result =mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
    echo " ".$row["ProductName"]." ".$row["ProductCode"]." ".$row["Choose"]." ".$row["BuyingDate"]." ".$row["SellerName"]." ".$row["BuyingQuantity"]." ".$row["BuyingUnitPrice"]." ".$row["SellingUnitPrice"]." <br>";
 
}


?>