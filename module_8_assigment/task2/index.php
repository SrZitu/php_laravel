<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>

  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-5 p-5 shadow-sm border rounded-5 border-success bg-white">
        <h2 class="text-center mb-4 text-success">Login Form</h2>

        <form action="login.php" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control border border-success email" id="email" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control border border-success" required />
          </div>

          <div class="d-grid">
            <button class="btn btn-success" type="submit" name="submit">Login</button>
          </div>

          <?php if (isset($_GET['error_message'])) : ?>
            <p style="color: red;"><?php echo $_GET['error_message']; ?></p>
          <?php endif; ?>

        </form>
      </div>
    </div>
  </div>
</body>

</html>