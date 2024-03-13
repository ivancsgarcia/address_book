<?php 

include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Read</title>
</head>
<body>

<div class="container">
<a href="create.php" class="text-light"><button class="btn btn-primary my-5">Create new contact</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  
  $select_sql = "SELECT * FROM addresses";
  $result = mysqli_query($conn, $select_sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <th scope='row'>".$row["id"]."</th>
            <td>".$row["lastName"]."</td>
            <td>".$row["firstName"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["barangay"].", ".$row["city"].", ".$row["province"]."</td>
            <td>
            <button class='btn btn-primary'><a href='update.php?updateId=".$row["id"]."' class='text-light'>Update</a></button>
            <button class='btn btn-danger'><a href='delete.php?deleteId=".$row["id"]."' class='text-light'>Delete</a></button>
            </td> 
            </tr>";
    }
  } else {
    echo "<tr>
    <td colspan='7' class='text-center'>No records found</td>
    </tr>";
  }

  ?>
    
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>