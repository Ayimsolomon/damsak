<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Style/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>registration</title>
    <style>
        .container {
            background-color: ghostwhite;
            margin-top: 5%;
            width: 40vw;
            box-shadow: 2px 3px 1px 3px gainsboro;
        }

        #container-fluid {

            width: 100%;
            background: #01040f;
            color: #f5fafa;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            border-bottom: 5px solid #bf9b30;
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
        <div class="container pb-2 mb-2">
            <div class="container-fluid" id="container-fluid"><img src="asset/logo.jpg" width="100px" alt="" class="" style="border-radius: 100px;" id="logo"> <br> Registration Form</div>

            <form action="upload.php" method="post" class="pt-4" enctype='multipart/form-data'>
                <label for="name">First name</label>
                <input type="text" placeholder="First Name" required name="first_name" class="form-control" id=""><br>
                <label for="name">Surname</label>
                <input type="text" placeholder="surname" required name="surname" class="form-control" id=""><br>
                <label for="name">Middle name</label>
                <input type="text" placeholder="middle name" name="middle" class="form-control" id=""><br>
                <label for="dateofbirth">Date of birth </label>
                <input type="date" name="DOB" placeholder="Date of birth" required class="form-control" id=""><br>
                <label for="gender">Gender</label><br>
                <select required name="gender" id="">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br><br>
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" required placeholder="example@gmail.com" id=""><br>
                <label for="name">Phone number</label>
                <input type="tel" name="phone_number" required class="form-control" placeholder="Phone number" id=""><br>
                <!-- <label for="Certificate">Upload Secondary certificate/Diploma/Nce/Degree</label>
                <input type="file" name='files[]' multiple aria-required="true" class="form-control" placeholder="Youremailaddress@gmail.com" id=""><br> -->
                <label for="name">Address</label>
                <input type="text" name="address" placeholder="Address" required class="form-control" id=""> <br>
                <label for="name">Nationality</label>
                <input type="text" name="nationality" placeholder="nationality" required class="form-control" id=""> <br>
                <label for="name">State</label>
                <input type="text" name="state" placeholder="State" required class="form-control" id=""> <br>
                <label for="name">LGA</label> <br>
                <select name="lga" id="">
                    <option value=""></option>
                    <option value="Akko">Akko</option>
                    <option value="Balanga">Balanga</option>
                    <option value="Billiri">Billiri</option>
                    <option value="Dukku">Dukku</option>
                    <option value="Funakaye">Funakaye</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Kaltungo">Kaltungo</option>
                    <option value="Kwami">Kwami</option>
                    <option value="Nafada">Nafada</option>
                    <option value="Shongom">Shongom</option>
                    <option value="Yamaltu Deba">Yamaltu Deba</option>
                </select> <br><br>
                <label for="name">Ward</label> <br>
                <input type="text" name="ward" placeholder="Ward" required class="form-control" id=""> <br>
                <label for="name">Skill Catalog</label> <br>
                <select name="skill_catalog" required id="">
                    <option value=""></option>
                    <option value="Catering">Catering</option>
                    <option value="Cosmetology">Cosmetology</option>
                    <option value="Skin therapy">Skin therapy</option>
                    <option value="Barbing">Barbing</option>
                    <option value="MakeUp">MakeUp</option>
                    <option value="Shoe and bag making">Shoe and bag making</option>
                    <option value="Tailoring">Tailoring</option>
                </select> <br><br>
                <input type="submit" value="Submit" name="Sign_up" class="form-control btn btn-primary">
            </form>
            <div class="panel pt-2">
                <p>Already registered and upload credential? <a href="uploadcertificate.php">Upload</a></p>
            </div>
        </div>

</body>

</html>