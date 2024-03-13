<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];

        $insert_sql = "INSERT INTO addresses (firstName, lastName, email, phone, barangay, city, province)
        VALUES ('$firstName', '$lastName', '$email', '$phone', '$barangay', '$city', '$province')";
        $result = mysqli_query($conn, $insert_sql);

        if ($result) {
        // echo "New data created successfully";
        header("location:read.php");
        } else {
        echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>

    <div class="container my-5">

        <form method="post">
            <div class="mb-3"> 
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Phone Number:</label>
                <input type="text" class="form-control" name="phone" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Barangay:</label>
                <input type="text" class="form-control" name="barangay" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">City:</label>
                <input type="text" class="form-control" name="city" autocomplete="off">
            </div>
            <div class="mb-3"> 
                <label class="form-label">Province:</label>
                <input type="text" class="form-control" name="province" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>