<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(1);
session_set_cookie_params(86400,"/");
session_start();
$_SESSION["id"];
	 /*if(isset($_SESSION['id'])) 
   {
        
   }
   else
   {
       header("Location: https://focusschool.pk/");
		exit();
   }*/
    if (!isset($_SESSION["id"])) {
         header("location:destroyer.php");
        exit;
    }
   if (isset($_SESSION["id"])) {
  // only if user is logged in perform this check
  if ((time() - $_SESSION['last_login_timestamp']) > 150000000 ) {
   header("location:destroyer.php");
    exit;
  } else {
      
     $_SESSION['last_login_timestamp'] = time();
    
  }
}

    $name = null; 
include('connection.php');
$session="SELECT username,dashboard FROM users where id='$_SESSION[id]'";

$resultsession = $conn->query($session);

	/*if ($resultsession->num_rows > 0) {*/
    // output data of each row
    $rowsession = $resultsession->fetch_assoc();
    $_SESSION["controls"]=$rowsession['username'];
        $dashboard=$rowsession['dashboard'];
  
            
	/*}*/

?>