<?php include "conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registeration Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-light text-uppercase m-2 fw-bolder text-center bg-info">
            Portal for Student Registeration
        </h1>
        <table class="table table-striped">
            <thead>
                <tr class="text-uppercase">
                    <th>student id</th>
                    <th>student name</th>
                    <th>student class</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sqlQuery = "SELECT * FROM student";
                $result = $connection->query($sqlQuery);
                $htmlTable = "";
                if ($result) {

                    while ($row = $result->fetch_assoc()) {

                        $htmlTable .= "<tr>";
                        $htmlTable .= "<td>" .  $row['stdid'] . "</td>";
                        $htmlTable .= "<td>" . $row['stdname'] . "</td>";
                        $htmlTable .= "<td>" . $row['stdclass'] . "</td>";

                        $updateLink = "form.php?" . "id=" . $row["stdid"] . "&name=" . $row['stdname'] . "&class=" . $row['stdclass'];

                        $deleteLink = "operation.php" . "?id=" . $row["stdid"];

                        $htmlTable .= "<td>" . '<a href="' . $updateLink . '" class="btn btn-info mx-2 ">Update</a>' . '<a href="' . $deleteLink . '" class="btn btn-danger">Delete</a>' . "</td>";

                        $htmlTable .= "</tr>";
                    }
                    echo $htmlTable;
                } else {
                    echo "Error" . $connection->error;
                }




                ?>
            </tbody>
        </table>
        <a href="form.php" class="btn btn-secondary text-uppercase float-end w-100">
            Add new Student
        </a>
    </div>
</body>

</html>