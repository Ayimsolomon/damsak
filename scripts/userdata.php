<?php
$conn = mysqli_connect("localhost", "root", "", "damsak");
$db = $conn;
$tableName = "registration";
$columns = [`UUID`, `first_name`, `surname`, `middle`, `DOB`, `gender`, `email`, `phone_number`, `image`, `name`, `address`, `nationality`, `state`, `lga`, `ward`, `skill_catalog`];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns)
{
    $conn = mysqli_connect("localhost", "root", "", "damsak");
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {

        $columnName = implode($columns);
        $query = "SELECT * FROM `$tableName` ORDER BY UUID DESC";
        $result = mysqli_query($conn, $query);
        if ($result == true) {
            if ($result->num_rows > 0) {

                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
