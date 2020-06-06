<?php


$con=mysqli_connect('core.bdwebsolutions.com','rongonshop_Reza','OQbj1xlgZqD$','rongonshop_Test_Project');
if(mysqli_connect_errno())
{
    echo "Failed to connect".mysqli_connect_error();
    exit();
}


 
    $NewEmail=$_REQUEST["Email"];
	$NewPassword=$_REQUEST["Password"];
	
    $sql="SELECT email,password from registration";
    $result=mysqli_query($con,$sql);
 
   while($row = mysqli_fetch_array($result))
	{
		if($row["email"]== $NewEmail && $row["password"]==$NewPassword)
		{
		   echo "Login Successful";
		}
		else
		{
		   die("Invalid email or password.Try again with valid one."."<br>");
		}	
	}
 mysqli_close($result);
mysqli_close($con);

?>