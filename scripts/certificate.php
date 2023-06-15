<?php
// include "connection.php";
require_once('connection.php');
if (isset($_POST['submit'])) {

    $get_id = $_REQUEST['UUID'];

    move_uploaded_file($_FILES["image"]["tmp_name"], $_FILES["image"]["name"]);
    $location1 = $_FILES["image"]["name"];


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `registration` SET `image`='$location1' WHERE UUID = '$get_id' ";

    $conn->exec($sql);
    echo "<p class='d-flex justify-content-center' style='background-color:green;'>Upload successful</p>";
    header('refresh:5;url=view.php');
    // echo 'You will be redirected in about 5 secs. If not, please click <a href="view.php">here</a>.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload Certificate</title>
</head>


<body>
    <h1>Upload Images</h1>

    <form method='post' action='' enctype='multipart/form-data'>
        <input type="text" name="UUID" id="" placeholder="UUID">
        <input type='file' name='image' multiple />
        <input type='submit' value='Submit' name='submit' />
    </form>

    <a href="view.php">|View Uploads|</a>
</body>

</html>