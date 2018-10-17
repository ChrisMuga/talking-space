<?php
include('header.php');
?>
<!-- login -->
<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
		<div class="login-grids">
			<!-- col -->
            <div class="col-md-10">
                <form action="recover.php" method="POST">
                    <h1>Password Recovery</h1>
                    <input type="text"      class="form-control my-2"                    name="email" placeholder="Email Address"/>
                    <input type="submit"    class="form-control btn btn-primary my-2"    value="Send Password"/>
                </form>
            </div>
            <!-- col -->
		</div>
	</div>



<?php
#include('footer.php');
?>