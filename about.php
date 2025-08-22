<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>about</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="Style/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .header {

      color: #f5fafa;


      border-bottom: 5px solid #bf9b30;


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
              <a class="nav-link active" data-bs-custom-class="custom-tooltip" aria-current="page" href="about.php" data-bs-toggle="tooltip" data-bs-placement="right" title="About">
                <i class="fa fa-address-card" id="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="About"></i>
              </a>

            </li>
            <li class="nav-item mt-4">
              <a class="nav-link" data-bs-custom-class="custom-tooltip" aria-current="page" href="registration.php" data-bs-toggle="tooltip" data-bs-placement="right" title="registrationform">
                <i class="fa fa-user" id="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sign up"></i>
              </a>

            </li>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br><br><br>
  <div class="container mb-4">
    <h2 class="container" style="text-align:center;font-size: xx-large; font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: bold;">About Us</h2>
    <div class="About container">
      <p id="type" style="font-size:large;font-family: Georgia,'Times New Roman',Times, serif;"></p>
    </div>
    <div class="container-fluid">
      <div class="row mb-4 ">
        <div id="c1" class="card col mt-2 ms-2" style="width:18rem;border-bottom: 3px solid rgb(193, 184, 214);">
          <img src="asset/His_Royal_Highness_Emir_of_Gomb.jpg" class="card-img-top" alt="" style="border-bottom: 5px solid rgb(185, 105, 105);">
          <div class="card-body" style="text-align: center;font-size:large; font-family: Georgia, 'Times New Roman', Times, serif;
                    font-weight: bold;">
            <div class="card-title text-xx-large">His Royal Highness</div>
            <div class="card-text">Alhaji Abubakar Shehu-Abubakar</div>
          </div>
        </div>
        <div id="c1" class="card col mt-2 ms-2" style="width:18rem;border-bottom: 3px solid rgb(193, 184, 214);">
          <img src="asset/Hon-buhari-dalhat.jpg" class="card-img-top" alt="" style="border-bottom: 5px solid rgb(185, 105, 105);">
          <div class="card-body" style="text-align: center;font-size:large; font-family: Georgia, 'Times New Roman', Times, serif;
                    font-weight: bold;">
            <div class="card-title t-xx-large"> Honorable </div>
            <div class="card-text">Muhammad Buhari Dalhatu</div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

<script>
  function automatic() {
    var i = 0;
    var text = " Damsak is an organization that is established on 24/04/2023, under the government of Gombe state, and with the support of Hon Muhammad Buhari Dalhatu and His Royal Highness Alhaji Abubakar Shehu-Abubakar. Damsak is collaborating with 12 bodies in fostering growth in Gombe state. It's aim is to train youth with skills that will help them to be self employed.";
    var timer = 50;

    function typewriter() {
      if (i < text.length) {
        document.getElementById("type").innerHTML += text.charAt(i);
        i++;

      }
    }
    setInterval(typewriter, timer);
  }
  setTimeout(automatic, 100);
</script>

</html>