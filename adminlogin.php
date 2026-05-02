<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    // $text = "Batch 2025";

    // echo $text;
    // echo $number;
    // echo "<br>";
    // echo $password;
    // echo "<br>";


    // $fullname = "Azaan Ajmal Roghani";
    // $email = "roghani@gmail.com";
    // $number = "123456789";
    // $password = "Roghani@123";


    // echo $fullname;
    // echo "<br>";
    // echo $email;
    // echo "<br>";

    // $value1 = 150;
    // $value2 = 50;

    // echo $value1 + $value2;
    // echo "<br>";
    // echo $value1 - $value2;
    // echo "<br>";
    // echo $value1 * $value2;
    // echo "<br>";
    // echo $value1 / $value2;
    // echo "<br>";
    // echo $value1 % $value2;
    // echo "<br>";


    // $marks = 70;

    // if($marks >= 70){
    //     echo "Grade A";
    // } else{
    //     echo "Grade B";
    // };


    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "select * from admin where email = '$email' and PASSWORD = '$password'";


        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>
    
            alert('Login Successfully');
            window.location.href = './dashboard.php'
    
            </script>";
        } else {
            echo "Invalid Details" . mysqli_error($connection);
        }
    }


    ?>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="register-card">
                    <h3 class="text-center mb-4">Admin Login</h3>

                    <form id="registerForm" method="post">

                        
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div id="passwordStrength" class="password-strength mt-1"></div>
                            <div class="invalid-feedback">
                                Password must be at least 6 characters.
                            </div>
                        </div>

                  

                        <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="login.js"></script>

</body>

</html>