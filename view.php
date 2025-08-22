<?php
include("connection.php");
include("userdata.php");
?>
<?php


$conn = mysqli_connect("localhost", "root", "", "damsak");
if (isset($_POST['submit'])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $insert = "INSERT INTO `post`(title,content) VALUES ('$title','$content')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo " <script>alert('Posted'); </script>";
        // header('refresh:2;url=view.php');
    } else {
        echo " <script>alert('error'); </script>";
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
    <title>admin c-panel</title>
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
                <span class="text-white" style="font-size: x-large;font-weight:bold; ">ADMIN C-PANEL</span>
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

        <div class="container-fluid row mt-4 ms-4 d-flex justify-content-center" style="text-align:center; font-size: large;">
            <div id="" class="card me-4 ms-2" style="width:18rem;border-bottom: 3px solid rgb(193, 184, 214);">
                <i class="fa fa-users mt-2" style="font-size: xx-large;"></i>
                <div class="card-body">
                    <div class="card-title">User data</div>
                    <div class="card-footer">
                        <button class="btn container-fluid btn-primary" onclick="vow();" id="view"> View </button>
                    </div>
                </div>
            </div>

            <div id="" class="card me-4 ms-2" style="width:18rem;border-bottom: 3px solid rgb(193, 184, 214);">
                <i class="fa fa-bell mt-2" style="font-size: xx-large;"></i>
                <div class="card-body">
                    <div class="card-title">Post notification</div>
                    <div class="card-footer">
                        <button class="btn container-fluid btn-primary" onclick="publish();" id="pose"> Post </button>
                    </div>
                </div>
            </div>

            <div id="" class="card me-4 ms-2" style="width:18rem;border-bottom: 3px solid rgb(193, 184, 214);">
                <i class="fa fa-message mt-2" style="font-size: xx-large;"></i>
                <div class="card-body">
                    <div class="card-title">Approved Post</div>
                    <div class="card-footer">
                        <button class="btn container-fluid btn-primary" onclick="commit();" id="commi"> Commit </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid d-flex justify-content-center mt-4 mb-4">
            <div class="row mt-4 mb-4" style="display:none;" id="userdata">
                <div class="col">
                    <?php echo $deleteMsg ?? ''; ?>
                    <div class="table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>UUID</th>
                                    <th>First_name</th>
                                    <th>Surname</th>
                                    <th>Middle</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone_number</th>
                                    <th>Address</th>
                                    <th>Nationality</th>
                                    <th>State</th>
                                    <th>Lga</th>
                                    <th>Ward</th>
                                    <th>Skill_catalog</th>
                                    <th>Certificate</th>
                            </thead>
                            <tbody>
                                <?php
                                if (is_array($fetchData)) {
                                    $sn = 1;
                                    foreach ($fetchData as $data) {
                                ?>
                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $data['UUID'] ?? ''; ?></td>
                                            <td><?php echo $data['first_name'] ?? ''; ?></td>
                                            <td><?php echo $data['surname'] ?? ''; ?></td>
                                            <td><?php echo $data['middle'] ?? ''; ?></td>
                                            <td><?php echo $data['DOB'] ?? ''; ?></td>
                                            <td><?php echo $data['gender'] ?? ''; ?></td>
                                            <td><?php echo $data['email'] ?? ''; ?></td>
                                            <td><?php echo $data['phone_number'] ?? ''; ?></td>
                                            <td><?php echo $data['address'] ?? ''; ?></td>
                                            <td><?php echo $data['nationality'] ?? ''; ?></td>
                                            <td><?php echo $data['state'] ?? ''; ?></td>
                                            <td><?php echo $data['lga'] ?? ''; ?></td>
                                            <td><?php echo $data['ward'] ?? ''; ?></td>
                                            <td><?php echo $data['skill_catalog'] ?? ''; ?></td>
                                            <td><?php echo '<img src="' . $data['image'] . '" width="100px" height="100px" ">' ?? '';  ?></td>
                                            <!-- '<img src="'.$row['Image'].'" alt="" />' -->
                                        </tr>
                                    <?php
                                        $sn++;
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="15">
                                            <?php echo $fetchData; ?>
                                        </td>
                                    <tr>
                                    <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- post update section begin -->

            <div class="container" id="post" style="display:none;">
                <div class="mt-4 mb-4" style="font-size: x-large; text-align:center;">Notification</div>
                <form action="" method="Post" class="pt-4" enctype='multipart/form-data'>
                    <input type="text" placeholder="Header" name="title" id="" class="form-control" required><br>
                    <input type="text" placeholder="Body" name="content" id="" class="form-control" required><br>
                    <input type="submit" class="form-control btn btn-secondary" name="submit" value="Post" id="">
                </form>
            </div>
            <div class=" justify-content-center" id="commit" style="display:none;">
                <div class="container-fluid">
                    <div class="mt-4 mb-4" style="font-size: x-large; text-align:center;">Notification</div>
                    <?php
                    $select = "SELECT title,content,date FROM post";
                    $query = mysqli_query($conn, $select);
                    $rows = mysqli_num_rows($query);
                    $fetch = mysqli_fetch_assoc($query);
                    if ($rows > 0) {
                        $query = mysqli_query($conn, $select);
                        while ($fetch = mysqli_fetch_assoc($query)) {
                    ?>
                            <h3 class="bg-warning p-2 d-flex justify-content-center"><?php echo $fetch['title'] ?? ''; ?></h3>
                            <p class="bg-secondary p-2"><?php echo $fetch['content'] ?? ''; ?></p>
                            <p class="bg-secondary p-2"><?php echo $fetch['date'] ?? ''; ?></p>

                    <?php  }
                    } ?>
                </div>
            </div>
        </div>

        <!-- post update section end -->

        <!-- notification section begin -->
        <section class="row p-2 container-fluid">
            <div class="container-fluid" style="background-color: #01040f;font-size:larger;color:#f5fafa;text-align:center;">EDIT POST</div>


            <div class="col p-2">
                <h3 style="text-align:center; background:grey; ">Update post</h3>
                <form action="" method="post" class="form">
                    <input type="text" name="id" class="form-control" placeholder="ID" id=""><br>
                    <input type="text" name="title" id="" class="form-control" placeholder="title"><br>
                    <input type="text" name="content" id="" class="form-control" placeholder="content"><br>
                    <input type="submit" value="update" name="update" class="btn form-control btn-warning">
                </form>
            </div>

            <div class="col p-2">
                <h3 style="text-align:center; background:grey; ">Delete post</h3>
                <form action="" method="post" class="form">
                    <input type="text" name="UUID" id="" class="form-control" placeholder="UUID"><br>
                    <input type="submit" value="delete" name="delete" class="btn form-control btn-danger">
                </form>
            </div>
        </section>
        <?Php
        $connect = mysqli_connect("localhost", "root", "", "damsak");

        // if (isset($_POST['select'])) {

        //     $UUID = $_POST["UUID"];

        //     //$update=" UPDATE `data` SET `full_name`='$_POST[full_name]',`email`=' $_POST[email]' WHERE `UUID`='$_POST[UUID]'";
        //     $select = "SELECT * FROM registration WHERE UUID='$_POST[UUID]'";
        //     $query = mysqli_query($connect, $select);
        //     $rows = mysqli_num_rows($query);
        //     $fetch = mysqli_fetch_assoc($query);
        //     if ($rows > 0) {
        //         $query = mysqli_query($connect, $select);
        //         echo "<table class='table table-striped'><tr><th>UUID</th><th>Full_name</th><th>Email</th><th>skill_catalog</th></tr> ";
        //         while ($fetch = mysqli_fetch_assoc($query)) {
        //             echo " <tr><td>" . $fetch["UUID"] . "</td><td>" . $fetch["CONCAT(first_name,'',surname) AS name"] . "</td><td>" . $fetch["email"] . "</td><td>" . $fetch["skill_catalog"] . "</td></tr>";
        //         }
        //         echo "</table>";
        //     } else {
        //         echo " <script> alert('0 record found') </script>";
        //     }
        // }


        if (isset($_POST['update'])) {
            $connect = mysqli_connect("localhost", "root", "", "damsak");


            $update = " UPDATE `post` SET `title`='$_POST[title]',`content`=' $_POST[content]' WHERE `id`='$_POST[id]'";

            $query = mysqli_query($connect, $update);
            if ($query) {
                echo " <script> alert(' updated success'); </script>";
            } else {

                echo " <script> alert('fail to update') </script>";
            }
        }


        if (isset($_POST['delete'])) {
            $connect = mysqli_connect("localhost", "root", "", "damsak");

            $delete = " DELETE FROM `post`  WHERE `id`='$_POST[id]'";

            $query = mysqli_query($connect, $delete);
            if ($query) {
                echo " <script> alert('deleted success'); </script>";
            } else {
                echo "<script> alert('deleted fail') </script> ";
            }
        }

        ?>

        <!-- notification section end -->
        <!-- user editing section -->
        <main class="row p-2 container_fluid">
            <div class="container-fluid" style="background-color: #01040f;font-size:larger;color:#f5fafa;text-align:center;">EDIT USER</div>
            <!-- select user section -->
            <div class="col p-2">
                <h5 style="text-align:center; background:grey; ">Select user</h5>
                <form action="" method="post" class="form">
                    <input type="text" name="UUID" id="" class="form-control" placeholder="UUID"><br>
                    <input type="submit" value="select" name="select" class=" btn form-control btn-primary">
                </form>
            </div>
            <!-- update user section -->
            <!-- <div class="col p-2">
                <h5 style="text-align:center; background:grey; ">Update user</h5>
                <form action="" method="post" class="form">
                    <input type="text" name="UUID" class="form-control" placeholder="UUID" id=""><br>
                    <input type="text" name="full_name" id="" class="form-control" placeholder="full_name"><br>
                    <input type="email" name="email" id="" class="form-control" placeholder="email"><br>
                    <input type="submit" value="update" name="update" class="btn form-control btn-warning">
                </form>
            </div> -->
            <!-- delete user section -->
            <div class="col p-2">
                <h5 style="text-align:center; background:grey; ">Delete user</h5>
                <form action="" method="post" class="form">
                    <input type="text" name="UUID" id="" class="form-control" placeholder="UUID"><br>
                    <input type="submit" value="delete" name="delete" class="btn form-control btn-danger">
                </form>
            </div>
            <!-- php codes for select/upadte/delete user -->
            <div>
                <?Php
                $connect = mysqli_connect("localhost", "root", "", "damsak");

                if (isset($_POST['select'])) {

                    $UUID = $_POST["UUID"];

                    //$update=" UPDATE `data` SET `full_name`='$_POST[full_name]',`email`=' $_POST[email]' WHERE `UUID`='$_POST[UUID]'";
                    $select = "SELECT * FROM registration WHERE skill_catalog='$_POST[UUID]'";
                    $query = mysqli_query($connect, $select);
                    $rows = mysqli_num_rows($query);
                    $fetch = mysqli_fetch_assoc($query);
                    if ($rows > 0) {
                        $query = mysqli_query($connect, $select);
                        echo "<table class='table table-striped'><tr><th>UUID</th><th>Full_name</th><th>Email</th><th>skill_catalog</th></tr> ";
                        while ($fetch = mysqli_fetch_assoc($query)) {
                            echo " <tr><td>" . $fetch["UUID"] . "</td><td>" . $fetch["CONCAT(first_name,'',surname) AS name"] . "</td><td>" . $fetch["email"] . "</td><td>" . $fetch["skill_catalog"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo " <script> alert('0 record found') </script>";
                    }
                }


                // if (isset($_POST['update'])) {

                //     $UUID = $_POST["UUID"];
                //     $update = " UPDATE `registration` SET `full_name`='$_POST[full_name]',`email`=' $_POST[email]' WHERE `UUID`='$_POST[UUID]'";

                //     $query = mysqli_query($connect, $update);
                //     if ($query) {
                //         echo " <script> alert(' updated success') </script>";
                //     } else {

                //         echo " <script> alert('fail to update') </script>";
                //     }
                // }


                if (isset($_POST['delete'])) {

                    $delete = " DELETE FROM `registration`  WHERE `UUID`='$_POST[UUID]'";

                    $query = mysqli_query($connect, $delete);
                    if ($query) {
                        echo " <script> alert(' deleted success') </script>";
                    } else {
                        echo "<script> alert(' deleted fail') </script> ";
                    }
                }

                ?>




            </div>

        </main>

        <script>
            function vow() {
                var user = document.querySelector("#userdata");
                var view = document.querySelector("#view");
                if (user.style.display == "none") {
                    user.style.display = "flex ";
                    view.innerHTML = "Collapse";
                    view.className = "btn container-fluid btn-danger";

                } else {
                    user.style.display = "none";
                    view.innerHTML = "View"
                    view.className = "btn container-fluid btn-primary";

                }
            }


            function publish() {
                var pos = document.querySelector("#post");
                var pose = document.querySelector("#pose");
                if (pos.style.display == "none") {

                    pos.style.display = "inline-block";
                    pose.innerHTML = "Collapse";
                    pose.className = "btn container-fluid btn-danger";

                } else {
                    pos.style.display = "none";
                    pose.innerHTML = "Post";
                    pose.className = "btn container-fluid btn-primary";
                }
            }

            function commit() {
                var commit = document.querySelector("#commit");
                var commi = document.querySelector("#commi");
                if (commit.style.display == "none") {
                    commi.innerHTML = "Collapse";
                    commi.className = "btn container-fluid btn-danger";
                    commit.style.display = "block";
                } else {
                    commit.style.display = "none";
                    commi.innerHTML = "Commit";
                    commi.className = "btn container-fluid btn-primary";
                }
            }
        </script>
</body>

</html>