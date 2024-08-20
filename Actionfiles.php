<?php







 require "Connection.php";



 if(isset($_POST["SUBMITBTN"])){


$username = $_POST["USERNAME"];
$userpassword = $_POST["USERPASSWORD"];
$useremail = $_POST["USEREMAIL"];


  
    
$query = "INSERT INTO `user_registration`( `User_Name`, `User_Email`, `User_Password`, `User_Role`, `User_Account_Status`, `User_Image`) VALUES ('$username','$useremail','$userpassword','1','active','$userImage_Address_B')";
    
    
    

$DLVRYBOY = mysqli_query($connection,$query);


    
    header('location:UserList.php');

    
}
?>