<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the School Register</title>
</head>
<body>
    This is the school register for all student

<br>
    <?php
    $connect = mysqli_connect ('localhost', 'root', '', 'test_db_sidehustle');
    $insert_data = mysqli_query($connect, "INSERT INTO students_jss1(name,age,gender) VALUES ('David','19','M')");
    if ($insert_data) {
        echo "Data saved successfully";
    }
?>


</body>
</html>

