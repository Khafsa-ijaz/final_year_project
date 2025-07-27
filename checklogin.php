<?php
//check_teacher_login.php
include('admin/database_connection.php');
session_start();
$teacher_emailid = '';
$teacher_password = '';
$error_teacher_emailid = '';
$error_teacher_password = '';
$error = 0;
 
if(empty($_POST["teacher_emailid"]))
{
	$error_teacher_emailid = 'Name is required';
	$error++;
}
else
{
	$teacher_emailid = $_POST["teacher_emailid"];
}

if(empty($_POST["teacher_password"]))
{	
	$error_teacher_password = 'Password is required';
	$error++;
}
else
{
	$teacher_password = $_POST["teacher_password"];
}

if($error == 0)
{
	$query = "
	SELECT * FROM users 
	WHERE username = '".$teacher_emailid."'
	";

	$statement = $conn->prepare($query);
	if($statement->execute())
	{
		$total_row = $statement->rowCount();
		if($total_row > 0)
  {
     
	$result = $statement->fetchAll();
			foreach($result as $row)
			{
				

				if(password_verify($teacher_password, $row["password"]))
				{
					$_SESSION["id"] = $row["id"];
				}
				else
				{
					 $error_teacher_password = "Please type VALID PASSWORD";
        $error++;
				}
			}
		
		
	}
	else
  {
   $error_teacher_emailid = 'Please type VALID Name';
   $error++;
  }
 }
}


if($error > 0)
{
	$output = array(
		'error'			=>	true,
		'error_teacher_emailid'	=>	$error_teacher_emailid,
		'error_teacher_password'	=>	$error_teacher_password
	);
}
else
{
	$output = array(
		'success'		=>	true
	);
}
echo json_encode($output);

?>