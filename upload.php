<?php

$conn = mysqli_connect("localhost", "root", "", "damsak");

if (isset($_POST["Sign_up"])) {
    $first_name = $_POST["first_name"];
    $charat = substr(strtoupper($first_name), 0, 1);
    $code = rand(1, 99999);
    $UUID = $charat . "-" . $code . "-DMK ";
    $surname = $_POST["surname"];
    $middle = $_POST["middle"];
    $nationality = $_POST["nationality"];
    $gender = $_POST["gender"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $DOB = $_POST["DOB"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $lga = $_POST["lga"];
    $ward = $_POST["ward"];
    $skill_catalog = $_POST["skill_catalog"];


    $insert = "INSERT INTO `registration`(`UUID`, `first_name`, `surname`, `middle`, `DOB`, `gender`, `email`, `phone_number`, `address`, `nationality`, `state`, `lga`, `ward`, `skill_catalog`)
     VALUES ('$UUID','$first_name','$surname','$middle','$DOB','$gender','$email','$phone_number','$address','$nationality','$state','$lga','$ward','$skill_catalog')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo " <script> alert(' registrations successful');
                </script>";

        session_start();
        $_SESSION['user_unique_id'] = $UUID;
        echo "<div style='background-color:gold;display:flex; justify-content:center; '>COPY THIS AS USER UNIQUE IDENTIFIER. (page redirecting in 1m) <a href='uploadcertificate.php'> Upload credentials.</a> </div>";
        echo " <br> ";
        echo "<div style='background-color:ghostwhite;font-size:100px; height:90vh;display:flex; justify-content:center; '>
         $UUID
        </div>";
        header('refresh:10;url=uploadcertificate.php');
    } else {

        echo " <script> alert('fail to insert') </script>";
    }
}
