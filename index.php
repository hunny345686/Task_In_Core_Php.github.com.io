<?php 
 
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Data</title>
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
    <div class="container">
        <h1 class="text-center">Form Data</h1><br>
        <form method="post" action="db.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Your Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" name="userName">
                </div>
                <div class="form-group col-md-6">
                    <label>Your Qualification</label>
                    <select name="qualification" class="form-control">
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="M.Tech">M.Tech</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Technologies You Know</label> <br>
                <label>Php <input type="checkbox" name="tech[]" value="Php"></label>
                <label>Java Script <input type="checkbox" name="tech[]" value="Java Script"></label>
                <label>Java <input type="checkbox" name="tech[]" value="Java"></label>
                <label>Python <input type="checkbox" name="tech[]" value="Python"></label>
                <label>Dot Net <input type="checkbox" name="tech[]" value="Dot Net"></label>
            </div>
            <p class="text-center">Your Experience</p>
            <div id="appendDiv">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="compName[]">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Job Start Date</label>
                        <input type="date" name="joining_date[]" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Company City</label>
                        <input type="text" class="form-control" name="compCity[]">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary appendbtn">Add Next Company</button>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>

    <script>
    $(".appendbtn").click(function() {
        $("#appendDiv").append(
            '<div id="appendDiv"> <div class = "form-row" ><div class = "form-group col-md-4" ><label > Company Name </label> <input type = "text"class = "form-control"name = "compName[]" ></div> <div class = "form-group col-md-3" ><label > Job Start Date </label> <input type = "date"name = "joining_date[]"class = "form-control" ></div> <div class = "form-group col-md-5" ><label > Company City </label> <input type = "text"class = "form-control"name = "compCity[]" ></div> </div > </div >'
        );
    });
    </script>


</body>

</html>