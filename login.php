<?php
require_once 'auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('Location: dashboard.php');
        exit();
    } else {
        $error_message = "Credenziali non valide.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <title>Login</title>
</head>

<body>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <!-- <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form> -->

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3">
                            <span>Log In </span>
                            <span>Sign Up</span>
                        </h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">

                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <input type="text" class="form-style" placeholder="Username" name="username" />
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password" name="password" />
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <!-- <a href="/" class="btn mt-4">
                                                Login
                                            </a> -->
                                                <button class="btn mt-4" type="submit" name="register-btn" value="Login">
                                                    Login
                                                </button>
                                            </form>

                                            <p class="mb-0 mt-4 text-center">
                                                <a href="#" class="link">
                                                    Forgot your password?
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ------------------- SING IN ------------- -->
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form method="POST">
                                                <h4 class="mb-3 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-style" placeholder="Full Name" name="name" onchange="this.submit();" value="<?php echo htmlspecialchars($this->name); ?>" />
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" class="form-style" placeholder="Phone Number" name="phone" onchange="this.submit();" value="<?php echo htmlspecialchars($this->phone); ?>" />
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style" placeholder="Email" name="email" onchange="this.submit();" value="<?php echo htmlspecialchars($this->email); ?>" />
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password" name="password" onchange="this.submit();" value="<?php echo htmlspecialchars($this->password); ?>" />
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button class="btn mt-4" type="submit" name="register-btn">
                                                    Register

                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>