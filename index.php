<?php include("conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 rounded shadow-lg">
            <div class="col-8 p-5">
                <h1 class="text-center text-uppercase mb-1 ">Login</h1>
                <form action="operation.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Enter username" required class="form-control" />
                    <input type="text" name="password" id="password" placeholder="Enter password" required class="form-control mt-2" />
                    <button type="submit" class="btn btn-success mt-3 w-100 text-uppercase text-light fw-bold" name="submit">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>