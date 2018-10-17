<?php

error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
// Declaring database constants
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "talking-space";

//Create the database connection
$conn = new mysqli($servername, $serveruser, $serverpass,$dbname );

$sql = "SELECT * FROM users WHERE email_address = '". $_POST['email']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    #mail

        #the message
        $msg = " Hello, {$row['name']}, your password is: {$row['password']} ";

        #use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        #send email
        mail($_POST['email'],"Talking Space: Password Recovery",$msg);

        $data="<a href='login.php' class='btn btn-primary'>Password Successfully Sent</a>";


    #mail   
    }
} else 
{
        $data="<a href='forgot-password.php' class='btn btn-danger'>Oops, something went wrong.</a>";
}




?>

<?php

include('header.php');
?>
<!-- login -->
<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
		<div class="login-grids">
			<!-- col -->
            <div class="col-md-10 text-center">

                <?php echo $data; ?>
                
            </div>
            <!-- col -->
		</div>
	</div>



<?php
#include('footer.php');
?>