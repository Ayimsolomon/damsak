<?php
include("userdata.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>UUID</th>
                                <th>Name</th>
                                <th>Email</th>
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
                                        <td><?php echo $data['email'] ?? ''; ?></td>
                                        <td><?php echo $data['skill_catalog'] ?? ''; ?></td>
                                        <td><?php echo '<img src="' . $data['image'] . '" width="100px" height="100px" ">' ?? '';  ?></td>
                                        <!-- '<img src="'.$row['Image'].'" alt="" />' -->
                                    </tr>
                                <?php
                                    $sn++;
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="7">
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
    </div>
</body>



<?php
$conn = mysqli_connect("localhost", "root", "", "damsak");
//$select = "SELECT COUNT(S.N) FROM registration";
$select = "SELECT CONCAT(first_name,'',surname) AS name,UUID,email,image FROM registration";
// $select = "SELECT skill_catalog, COUNT(skill_catalog) FROM registration GROUP BY skill_catalog";
$query = mysqli_query($conn, $select);
$rows = mysqli_num_rows($query);
$fetch = mysqli_fetch_assoc($query);
if ($rows > 0) {
    $query = mysqli_query($conn, $select);
    while ($fetch = mysqli_fetch_assoc($query)) {
?>
        <!-- <h3><?php echo $fetch['name'] ?? ''; ?><?php echo $fetch['skill_catalog'] ?? ''; ?></h3> -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>UUID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $fetch['UUID'] ?? ''; ?></td>
                    <td><?php echo $fetch['name'] ?? ''; ?></td>
                    <td><?php echo $fetch['email'] ?? ''; ?></td>
                    <td><?php echo '<img src="' . $fetch['image'] . '" width="100px" height="100px" ">' ?? '';  ?></td>
                    <!-- '<img src="'.$row['Image'].'" alt="" />' -->
                </tr>
                <tr>
                    <td colspan="5">
                    </td>
                <tr>
            </tbody>
        </table>

<?php  }
} ?>
<!-- <div class="container-fluid mt-4 mb-4 d-inline justify-content-center" style="background-color: ghostwhite;">
    <?php

    // $stmt = $conn->prepare('select * from registration');
    // $stmt->execute();
    // $imagelist = $stmt->fetchAll();

    // foreach ($imagelist as $image) {
    // 
    ?>

        <img src="<?= $image['image'] ?>" title="<?= $image['name'] ?>" width='200' height='200'> -->
<!-- <?php

        ?> 
    <button class="btn btn-success mb-4">
        <a style="font-size: larger; color:black;font-weight:bolder; text-decoration:none;" href="index.php" onclick=" alert('Application under review, you will be notify through the email address you provided, when accepted.')"> Completed </a>
    </button> -->

<!-- </div> -->

</html>