<?php
$con = mysqli_connect("localhost","root","","task");

$res = mysqli_query($con,"SELECT * FROM php_task");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container"><br>
        <h2 class="text-center">All Data</h2><br>
        <table class="table table-hover table-dark table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Language Know</th>
                    <th scope="col">City Name</th>
                </tr>
            </thead>
            <tbody>
                <?php

//print_r($res);
while($row = mysqli_fetch_array($res)) {
    
    //  echo $row["compcity"];
    //  echo $row["know_tech"];
   // echo $data =  stripos($row["know_tech"],'Php');
   // echo $data2 = stripos($row["compcity"],'chd');
   // echo "<br>";
    if ( stripos($row["know_tech"],'Php')!== false && stripos($row["compcity"],'chd')){ 
        // echo $row["username"];
        // echo "<br>";
        ?>
                <tr>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["qualification"]?></td>
                    <td><?=$row["know_tech"]?></td>
                    <td><?=$row["compcity"]?></td>
                </tr>
                <?php
    }  

}

?>
            </tbody>
        </table>
    </div>
    <php<?php

?> </body>

</html>