<!-- <?php
        if (isset($_POST['update'])) {

            $UUID = $_POST["UUID"];
            $update = " UPDATE `data` SET  WHERE `UUID`='$_POST[UUID]'";

            $query = mysqli_query($connect, $update);
            if ($query) {
                echo " <script> alert(' updated success') </script>";
            } else {

                echo " <script> alert('fail to update') </script>";
            }
        }

        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>upload certificate</title>
</head>

<body>
    <div class="col p-2">
        <form action="" method="post" class="form">
            <input type="text" name="UUID" id="">
            <input type="text" name="full_name" id="" class="form-control" placeholder="full_name"><br>
            <input type="email" name="email" id="" class="form-control" placeholder="email"><br>
            <input type="submit" value="update" name="update" class="form-control btn-warning">
        </form>
    </div>
</body>

</html>