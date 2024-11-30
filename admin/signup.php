<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

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

        .signup-container {
            background-color: #000000;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: #8400ff;
            margin-bottom: 1.5rem;
            font-weight: bold;
            text-align: center;
        }

        .form-group label {
            color: #d1d1e9;
            margin: 8px 0px;
        }

        .form-control {
            background-color: #d3d3d3;
            border: none;
            color: #ffffff;
        }



        .btn-primary {
            background-color: #2f00ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e75a6e;
        }

        a {
            color: #e43f5a;
        }

        a:hover {
            color: #e75a6e;
        }

        .error {
            color: green !important;
        }
    </style>

</head>

<body>
    <div class="signup-container">
        <h2>SIGNUP</h2>


        <form id="signupForm" method="POST" action="../admin/logics/auth.php">
        <?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'yes') {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Signup Successful.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    } elseif ($_GET['error'] == 'no') {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Signup Failed.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}

if (isset($_GET['emaildupe'])) {
    if ($_GET['emaildupe'] == 'yes') {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Email already exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}
?>


            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="user" placeholder="Enter username"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"
                    required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                    placeholder="Confirm password" required>
            </div>
            <button name="signupbtn" type="submit" class="btn btn-primary btn-block my-3 col-12">Signup</button>
            <p class="text-center mt-3">
                Already have an account? <a href="index.php"><span class="text-info">Login</span></a>
            </p>
        </form>
    </div>

    <script src="../assests/bootsrap/bootstrap.bundle.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/validator.js"></script>
    <script>
        $(document).ready(function() {
            $("#signupForm").validate({
                rules: {
                    password: "required",
                    "confirm-password": {
                        equalTo: "#password"
                    }
                },
                messages: {
                    username: "Please enter your username",
                    email: "Please enter a valid email address",
                    password: "Please provide a password",
                    "confirm-password": {
                        equalTo: "Passwords do not match"
                    }
                }
            });
        });
    </script>
</body>

</html>