<?php
// php code
session_start();
?>

<!-- html code -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINEARICONS -->
    <link rel="stylesheet" href="dashboard_asset/colorlib-regform-26/fonts/linearicons/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="dashboard_asset/colorlib-regform-26/css/style.css">
    <style>
        .fa-solid {
            font-weight: 900;
            margin-top: -36px;
            position: relative;
            top: -24px;
            left: 288px
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <img src="dashboard_asset/colorlib-regform-26/images/image-1.png" alt="" class="image-1">

            <form action="register_data_post.php" method="POST">
                <h3>Create Account</h3>

                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input name="name" type="text" class="form-control" placeholder="Student Full Name">
                </div>
                
                <?php if(isset($_SESSION['nameError'])){?>
                    <p><?= $_SESSION['nameError']?></p>
                <?php } unset($_SESSION['nameError']) ?>

                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input name="department" type="text" class="form-control" placeholder="Department">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-phone-handset"></span>
                    <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-envelope"></span>
                    <input name="email" type="text" class="form-control" placeholder="Mail">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input name="password" type="password" class="form-control" placeholder="Password"><i class="fa-solid fa-eye"></i>

                </div>
                <button type="submit">
                    <span>CREATE NEW ACCOUNT</span>
                </button>
            </form>


            <img src="dashboard_asset/colorlib-regform-26/images/image-2.png" alt="" class="image-2">
        </div>

    </div>

    <script src="dashboard_asset/colorlib-regform-26/js/jquery-3.3.1.min.js"></script>
    <script src="dashboard_asset/colorlib-regform-26/js/main.js"></script>

</body>

</html>



<?php
// session code 
?>