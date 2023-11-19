<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sex = $_POST["sex"];
    $fullname = $_POST["fullName"];
    $dob = $_POST["dob"];

    $jsonData = file_get_contents('info.json');
    echo 'Before writing to file';
    if ($jsonData === false) {
        die('Error reading JSON file');
    }

    $users = json_decode($jsonData, true);

    if ($users === null) {
        die('Error decoding JSON');
    }

    if (isset($users[$username])) {

        header("Location: error.php");
        exit();
    }


    $users[$username] = [
        "password" => $password,
        "sex" => $sex,
        "fullName" => $fullname,
        "dob" => $dob

    ];
    
    $updatedJsonData = json_encode($users, JSON_PRETTY_PRINT);

    file_put_contents('info.json', $updatedJsonData);

    header("Location: ../index.html");
    exit();
}
?>
