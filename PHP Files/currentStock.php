<?php
$con=mysqli_connect('core.bdwebsolutions.com','rongonshop_Reza','OQbj1xlgZqD$','rongonshop_Test_Project');
if(mysqli_connect_errno())
{
    echo "Failed to connect".mysqli_connect_error();
    exit();
}

$sql= "select ProductName,ProductCode,Choose,BuyingDate,SellerName,BuyingQuantity,BuyingUnitPrice,SellingUnitPrice from product";
    
$result=mysqli_query($con,$sql);
    
$trow=mysqli_num_rows($result);

while($trow--)
{
    $row=$result->fetch_assoc();
    echo "Product Name: ".$row["ProductName"]."<br>";
    echo "Product Code: ".$row["ProductCode"]."<br>";
    echo "Product Name: ".$row["Choose"]."<br>";
    echo "Product Name: ".$row["BuyingDate"]."<br>";
    echo "Product Name: ".$row["SellerName"]."<br>";
    echo "Product Name: ".$row["BuyingQuantity"]."<br>";
    echo "Product Name: ".$row["BuyingUnitPrice"]."<br>";
    echo "Product Name: ".$row["SellingUnitPrice"]."<br>";
    echo "--------------------------->>"."<br><br>";
}

mysqli_close($result);
mysqli_close($con);

?>