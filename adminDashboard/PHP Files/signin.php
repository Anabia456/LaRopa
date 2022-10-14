<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php
    include "Head.php";
?>
<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">
            
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="assets/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form action="" method="POST" class="row g-1 p-3 p-md-4">
                                    <div class="col-12 text-center mb-5">
                                        <h1>Sign in</h1>
                                        <span>Free access to our dashboard.</span>
                                    </div>
                                    <div class="col-12 text-center mb-4">
                                        <a class="btn btn-lg btn-light btn-block" href="#">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="avatar xs me-2" src="assets/images/google.svg" alt="Image Description">
                                                Sign in with Google
                                            </span>
                                        </a>
                                        <span class="dividers text-muted mt-4">OR</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control form-control-lg"
                                             placeholder="name@example.com" 
                                             pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'
                                             required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-secondary" href="auth-password-reset.html">Forgot Password?</a>
                                                </span>
                                            </div>
                                            <input type="password" name="password" id="myInput" class="form-control form-control-lg" 
                                            placeholder="***************" 
                                            pattern=".{8,}" 
                                            required    
                                            title="Eight or more characters">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password
                                                <script>
                                                    function myFunction() {
                                                    var x = document.getElementById("myInput");
                                                    if (x.type === "password") {
                                                        x.type = "text";
                                                    } else {
                                                        x.type = "password";
                                                    }
                                                    }
                                                </script>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <input type="submit" value="SIGN IN" name="logBtn" class="btn btn-lg btn-warning btn-block btn-light lift text-uppercase" atl="signin">
                                    <!-- <input type="submit" name="logBtn" value="Log in" id="submitbtn" class="lynessa-Button button"> -->
                                    </div>
                                    <!-- <div class="col-12 text-center mt-4">
                                        <span>Don't have an account yet? <a href="auth-signup.html" class="text-secondary">Sign up here</a></span>
                                    </div> -->
                                </form>
                                <!-- End Form -->
                                
                            </div>
                        </div>
                    </div> <!-- End Row -->
                    
                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <?php
        include "Script.php";
    ?>
</body>
</html>
<?php
    if (isset($_POST['logBtn'])) {
        include "connection.php";
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $decryptedPassword = md5($password);
        $query = "Select * from `admin_tbl` where `a_email` = '$email' AND `a_password` = '$password'";
        $row = mysqli_query($connect,$query);
        $assoc = mysqli_fetch_assoc($row);
        if ($assoc) {
            $_SESSION["aId"] = $assoc["a_id"];
            $_SESSION["aName"] = $assoc["a_name"];
            $_SESSION["aEmail"] = $assoc["a_email"];
            // header("index.php");
            echo "<script>window.location.assign('dashboard.php')</script>";
            // echo $_SESSION['aName'];
        }
        else{
            echo "Wrong Email OR Password!!";
        }
    }
   
?>