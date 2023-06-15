<?php
$conn = mysqli_connect("localhost", "root", "", "damsak");
if (isset($_POST['submit'])) {
    $get_id = $_POST['UUID'];
    move_uploaded_file($_FILES["image"]["tmp_name"], $_FILES["image"]["name"]);
    $location1 = $_FILES["image"]["name"];

    $sql = "UPDATE `registration` SET `image`='$location1' WHERE UUID = '$get_id' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script> 
                 alert('Upload successful')</script>";
        header('refresh:5;url=index.php');
    } else {
        echo " <script>alert('error');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Style/Css/style.css">
    <script src="Script/script.js"></script>
    <title>upload</title>
    <style>
        .container {
            background-color: ghostwhite;

            width: 40vw;
            box-shadow: 2px 3px 1px 3px gainsboro;
            margin-top: 5%;
        }

        #container-fluid {

            width: 100%;
            background: #01040f;
            color: #f5fafa;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            border-bottom: 5px solid #ed6767;
            font-size: x-large;
        }

        #logo {
            position: relative;
            top: -40px;
        }

        #blob {

            font-size: xx-large;
            color: #bf9b30;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        #tooltip {
            font-size: xx-large;
            color: #bf9b30;
        }

        #tooltip:hover {
            font-size: 40px;
            color: rgb(231, 169, 218);
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <nav class="navbar navbar-dark fixed-top" style="background-color:#01040f;border-bottom: #bf9b30 5px solid;">
            <div class="container-fluid">
                <span id="blob"><img src="asset/logo.jpg" width="70px" alt="" class="me-2" style="border-radius: 100px;">amsak</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon " style="color:#bf9b30;border-bottom:#bf9b30 5px solid;"></span>
                </button>
                <div class="offcanvas offcanvas-end " style="width: 14%;background-color:#01040f;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            <img src="asset/logo.jpg" width="50px" alt="" class="mb-2" data-bs-dismiss="offcanvas" aria-label="Close" style="border-radius: 100px;">
                        </h5>
                    </div>
                    <hr>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item mt-4">
                                <a class="nav-link" data-bs-custom-class="custom-tooltip" aria-current="page" href="index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                                    <i class="fa fa-home xx-large" id="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Home"></i>
                                </a>

                            </li>
                            <li class="nav-item mt-4">
                                <a class="nav-link" data-bs-custom-class="custom-tooltip" aria-current="page" href="about.php" data-bs-toggle="tooltip" data-bs-placement="right" title="About">
                                    <i class="fa fa-address-card" id="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="About"></i>
                                </a>

                            </li>
                            <li class="nav-item mt-4">
                                <a class="nav-link active" data-bs-custom-class="custom-tooltip" aria-current="page" href="registration.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Signup">
                                    <i class="fa fa-user" id="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sign up"></i>
                                </a>

                            </li>
                    </div>
                </div>
            </div>
        </nav>
        <br><br><br><br>

        <div class="container pb-2">
            <div class="container-fluid" id="container-fluid">
                <img src="asset/logo.jpg" width="100px" alt="" class="mt-2" style="border-radius: 100px;" id="logo"><br>
                <span class="mb-4s">Upload Credentials</span>
            </div>

            <form action="" method="post" class="pt-4" enctype='multipart/form-data'>

                <input placeholder="UUID" class="form-control" type="text" required name="UUID" id=""><br>
                <label for="name">Secondary certificate/Diploma/Nce/Degree</label>
                <input class="form-control" type="file" name='image' required multiple id=""><br>
                <input class="form-control btn btn-primary" type="submit" value="submit" name="submit">
            </form>
        </div>


</body>

</html>