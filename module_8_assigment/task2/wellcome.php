<?php
// Retrieve first name from URL query string
$firstName = $_GET['firstName'];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Welcome <?php echo $firstName; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="row mt-4 text-center">
      <div class="col-6 md-6 sm-6">
        <h1>Welcome <?php echo $firstName; ?></h1>
        <p class="text-success">You have successfully <b>logged in.</b></p>
      </div>

    </div>
  </div>

</body>

</html>