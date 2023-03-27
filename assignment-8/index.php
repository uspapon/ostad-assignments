<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="bg-primary-subtle">

	<?php
		// define variables and set to empty values
		$fname = $lname = $email = $password = $confirmpassword = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirmpassword = $_POST["confirmpassword"];

			// validation
			if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirmpassword)) {
				echo "<p>All fields are required and must not be empty.</p>";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Invalid email format.</p>";
			} elseif ($password != $confirmpassword) {
				echo '<div class="p-3 w-75 text-white my-5 mx-auto text-center bg-danger border border-primary-subtle rounded-3">
                Password and confirm password fields must match.
              </div>';
               
			} else {
                // start session and set cookie
                session_start();
                setcookie( 'firstName', $fname );
                setcookie( 'email', $email );
                setcookie( 'password', $password );

				echo '<div class="p-3 w-75 text-white my-5 mx-auto bg-success text-center border border-primary-subtle rounded-3">
                You registration has been successful. Thanks for registering! Please<a href="login.php" class="text-white"> Login </a>here.
              </div>';
			}
		}


	?>
    <main>
        <div class="container my-5">
            <div class="row my-5">
                <div class="col col-lg-8 mx-auto">
                    <h2 class="h2 my-5">User Registration Form</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input name="fname" type="text" class="form-control" id="fname" required>
                        </div>
                        <!-- end of fname -->
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input name="lname" type="text" class="form-control" id="lname" required>
                        </div>
                        <!-- end of lname -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" required aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <!-- end of email -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password" required>
                        </div>
                        <!-- end of password -->
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" required>
                        </div>
                        <!-- end of confirmpassword -->

                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
