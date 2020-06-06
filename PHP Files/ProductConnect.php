<?php
	$ProductName = $_POST['ProductName'];
	$PrductCode = $_POST['ProductCode'];
	$Choose = $_POST['Choose'];
	$BuyingDate= $_POST['BuyingDate'];
	$SellerName = $_POST['SellerName'];
	$BuyingQuantity = $_POST['BuyingQuantity'];
	$BuyingUnitPrice = $_POST['BuyingUnitPrice'];
	$SellingUnitPrice = $_POST['SellingUnitPrice'];

	// Database connection
	$conn = new mysqli('core.bdwebsolutions.com','rongonshop_Reza','OQbj1xlgZqD$','rongonshop_Test_Project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into product(ProductName, ProductCode, Choose, BuyingDate, SellerName,BuyingQuantity,BuyingUnitPrice,SellingUnitPrice) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiii", $ProductName, $PrductCode, $Choose, $BuyingDate, $SellerName, $BuyingQuantity,$BuyingUnitPrice,$SellingUnitPrice);
		$execval = $stmt->execute();
		echo $execval;
		echo "Updated successfully...";
		$stmt->close();
		$conn->close();
	}
?>