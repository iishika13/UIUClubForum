<?php
session_start();
include '../sqlCommands/connectDb.php';
include 'main.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UserHome</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="../../assets/img/logo1.png">
    <style>
        body {
            font-family: "Dosis";
        }
    </style>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>



</head>

<body>

<div>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-sm bg-white" style="padding-top: 0; padding-bottom: 0;">
            <div class="container-fluid">

                <a class="navbar-brand logo" href="#" style="padding-top: 0; padding-bottom: 0;">
                    <img src="../../assets/img/logo1.png" alt=""style="width: 70px; height: 70px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="mainPage.php"><i class="fa-solid fa-house-user"></i> Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="post.php"><i class="fa-solid fa-file"></i> Post </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="club_forum.php"><i class="fa-solid fa-people-group"></i> Club/Forum</a>
                        </li>
                       
                        <li class="nav-item">
                            <div class="dropdown">
                                <?php if ($gender == "Female") {?>
                                    <img class="dropdown-toggle pro" src="../../img/Female.png" alt="img" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php } ?>
                                <?php if ($gender == "Male") { ?>
                                    <img class="dropdown-toggle pro" src="../../img/man.png" alt="img" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php } ?>
                                <?php if ($gender != "Male" && $gender != "Female") { ?>
                                    <img class="dropdown-toggle pro" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>" alt="img" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php } ?>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="profile.php"><i class="fa-solid fa-user"></i> My Profile</a></li>
                                    <li><a class="dropdown-item" onclick="cpass('<?php echo $_SESSION['email']?>', '<?php echo $pass; ?>')"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                    <li><a class="dropdown-item" href="../login/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
    </nav>
</div>
    
<div class="container-fluid main-body">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-one">
                <h2 class="t1">UIU Club Fourm</h2>
                <!-- <h5 class="t2">Some Important Service Provide By a Single Platform </h5> -->
                <p class="onep">In the dynamic and diverse environment of a university, student clubs and organizations play a pivotal role in enhancing the overall educational experience. These clubs serve as platforms for students to pursue their interests, develop leadership skills, and connect with like-minded peers. The "UIU Forum" is an innovative project designed to streamline and enhance the management of university clubs, offering a comprehensive suite of features including chat, joining fees, organizing events, and post creation .</p>
                <!-- <button onclick="location.href='#next';" class="btn btn-warning cus-b3">Get Started</button> -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-two">
                <img class="img-3 d-none d-lg-block " src="../../img/3.png" alt="img">
            </div>
        </div>
 
    </div>
</div>

<?php include 'footer.php'?>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="assets/js/app.js"></script> -->
</body>

</html>