<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>login_admin</title>
    <style>
        .container {
            background-color: ghostwhite;

            width: 40vw;
            box-shadow: 2px 3px 1px 3px gainsboro;
            margin-top: 15%;
        }

        .container-fluid {
            background-color: navy;
            width: 100%;
            background: #17224d;
            color: #f5fafa;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            border-bottom: 5px solid #ed6767;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <div class="container pb-2 ">
        <div class="container-fluid mt-2" style="background-color:#01040f;">Admin C-panel</div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "damsak");
        if (isset($_POST['login'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                echo "<p class='d-flex justify-content-center' style='background-color:gold;'> fill in the fields</p>";
            } else {
                $select = "SELECT * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'";
                $query = mysqli_query($conn, $select);
                $rows = mysqli_num_rows($query);
                if ($rows == 1) {
                    session_start();
                    $_SESSION['admin_name'] = $_POST['username'];
                    header('location:c_panel.php');
                    echo "<script> logged in successfully</script>";
                } else {
                    echo "<p class='d-flex justify-content-center' style='background-color:red;'> incorrect password or email</p>";
                    header("refresh:2;admin.php");
                }
            }
        }

        ?>
        <form action="" method="post" class="pt-4">
            <input placeholder="Username" class="form-control" type="text" name="username" id=""><br>
            <input placeholder="Password" class="form-control" type="password" name="password" id=""><br>
            <input class="form-control btn btn-primary" type="submit" value="Login" name="login">
        </form>

    </div>

</body>

</html>