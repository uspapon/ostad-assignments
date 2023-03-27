<?php
    $errorMsg = "";
    if(isset($_GET['loginErr'])){
        $errorMsg = '<div class="p-3 w-75 text-white my-5 mx-auto text-center bg-danger border border-primary-subtle rounded-3">
        Invalid login! Please try again.
      </div>';;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-primary-subtle">
    <main>
        <div class="container my-5">
            <div class="row my-5">
                <div class="col col-lg-8 mx-auto">
                <?php 
                        if($errorMsg) {
                            echo $errorMsg;
                        }
                    ?>
                   
                    <h2 class="h2 my-5">User Login</h2>
                    <form action="process.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input name="inputEmail" type="email" class="form-control" id="inputEmail" required aria-describedby="emailHelp">
                            
                        </div>
                        <!-- end of inputEmail -->
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input name="inputPassword" type="password" class="form-control" id="inputPassword" required>
                        </div>
                        <!-- end of inputPassword -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <p class="mt-5">Don't have an account? <a href="index.php">Sign up</a></p>
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