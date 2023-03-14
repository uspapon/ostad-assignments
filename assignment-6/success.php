<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Success!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col col-lg-8 mx-auto">
                <h2 class="h2 my-5 text-success">User Registration Success</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
				// read users data from CSV file
				$file = fopen('users.csv', 'r');

				while (($data = fgetcsv($file)) !== false) {
					echo '<tr>';
					echo '<td>' . $data[0] . '</td>';
					echo '<td>' . $data[1] . '</td>';
					echo '<td><img src="uploads/' . $data[2] . '" class="img-thumbnail" style="width: 150px;"></td>';
					echo '</tr>';
				}

				fclose($file);
			?>
                    </tbody>
                </table>

            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>