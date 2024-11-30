<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../assests/bootsrap/bootstrap.min.css">
  <style>
    body {
      background: url(./assets/images/bg/henning-witzel-ukvgqriuOgo-unsplash.jpg);
      background-size: cover;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
  background-color: rgba(0, 0, 0, 0.9); /* Adjust the alpha value for transparency */
  padding: 2rem;
  border-radius: 8px;
  
  width: 100%;
  max-width: 400px;
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
}


    h2 {
      color: #2600ff;
      margin-bottom: 1.5rem;
      text-align: center;
      font-weight: bold;
    }

    .form-group label {
      color: #d1d1e9;
      margin: 8px 0px;
    }

    .form-control {
      background-color: #dbdbdb;
      border: none;
      color: #ffffff;
    }

 
    .btn-primary {
      background-color: #4502ff;
      border: none;
    }

    a {
      color: #e43f5a;
    }

    a:hover {
      color: #e75a6e;
    }

    .error {
      color: green !important;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>LOGIN</h2>
    <form id="loginForm" method="POST"  action="../admin/logics/auth.php">
     <?php if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'error') {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Account not exist
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}?>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <button name="loginbtn" type="submit" class="btn btn-primary btn-block my-3 col-12">Login</button>
      <p class="text-center mt-3 ">
        <a href="signup.php">Don't have an Account? <span class="text-info">Click here</span></a>
      </p>
    </form>
  </div>

  <script src="../assests/bootsrap/bootstrap.bundle.js"></script>
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/validator.js"></script>
  <script>
    $(document).ready(function () {
      $("#loginForm").validate({
        messages: {
          email: "Please enter a valid email address",
          password: "Please provide your password"
        },
        errorPlacement: function (error, element) {
          error.addClass("error");
          error.insertAfter(element);
        }
      });
    });
  </script>
</body>

</html>