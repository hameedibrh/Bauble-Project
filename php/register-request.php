<?php
SESSION_START
require('db_connect.php');
	$firstname = $_POST['firstname']
	$lastname = $_POST['lastname']
	$dob = $_POST['dob']
	$email = $_POST['email']
	$phone = $_POST['phone']
	$password = $_POST['password']
	$referral = $_POST['referral']

    $query = " select * from usertable where email = '$email'";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);

	if($num==1)
	{
		echo "User Already Reagistered."
	}
	else{
		$reg= " insert into usertable(firstname, lastname, dob, email, phone, password, referral) values ('$firstname', '$lastname', '$dob', '$email', '$phone', '$password', '$referral'";
		mysqli_quer($conn, $reg);
		echo "Registration Successful! You can login with your credentials now."
	}
    
?>
