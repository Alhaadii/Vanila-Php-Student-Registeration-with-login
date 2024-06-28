<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registeration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $name = $_GET["name"];
        $class = $_GET["class"];
    } else {
        $id = "";
        $name = "";
        $class = "";
    }



    ?>


    <div class="container p-4">
        <h1 class="text-primary mt-2 text-center text-uppercase">
            Student Registeration
        </h1>
        <div class="row justify-content-center">
            <div class="col-8 shadow-lg p-4 rounded-3">
                <form action="operation.php" method="POST">
                    <input type="text" name="id" id="id" class="form-control mb-2" placeholder="Enter the Id" value="<?php echo $id ?>" />
                    <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Enter the Name" value="<?php echo $name ?>" />
                    <input type="text" name="class" id="class" class="form-control mb-2" placeholder="Enter The Class" value="<?php echo $class ?>" />
                    <button type="submit" class="btn btn-lg btn-success w-100 mb-2" name="insert">Save Data</button>
                    <button type="submit" class="btn btn-lg btn-info w-100" name="update">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>