<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Lois Floro | Web Developer Internship Initial Assessment</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css" />
</head>

<?php
if (isset($_POST['first-name'])) {
    $fname = $_POST['first-name'];
} else {
    $fname = '-';
}
if (isset($_POST['last-name'])) {
    $lname = $_POST['last-name'];
} else {
    $lname = '-';
}
if (isset($_POST['dob'])) {
    $dob = $_POST['dob'];
} else {
    $dob = '-';
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = '-';
}

?>

<body>
    <main>
        <div class="form__card">
            <p class="form__result">You are <?php echo $fname, $lname ?> born in <?php echo $dob ?>, a <?php echo $gender ?></p>
        </div>
    </main>
</body>

</html>