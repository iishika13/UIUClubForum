<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="pages/general_user/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="assets/img/logo1.png">
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
                    <img src="assets/img/logo1.png" alt=""style="width: 70px; height: 70px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="singin.php"><i class="fa-solid fa-house-user"></i> Sign In</a>
                        </li>
                       
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="post.php"><i class="fa-solid fa-file"></i> Post </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="club_forum.php"><i class="fa-solid fa-people-group"></i> Club/Forum</a>
                        </li> -->
                       
                        
                    </ul>

                </div>
            </div>
    </nav>
</div>
    
<div class="container-fluid main-body">

    <div class="container-fluid " style="padding: 0;">

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-one">
                <h2 class="t1">UIU Club Forum</h2>
                <!-- <h5 class="t2">Some Important Service Provide By a Single Platform </h5> -->
                <p class="onep">In the dynamic and diverse environment of a university, student clubs and organizations play a pivotal role in enhancing the 
                overall educational experience. These clubs serve as platforms for students to pursue their interests, develop leadership skills, and connect
                 with like-minded peers. The "UIU Club Forum" is an innovative project designed to streamline and enhance the management of university clubs, 
                 offering a comprehensive suite of features including chat, joining fees, organizing events, and post creation . </p>
                <!-- <button onclick="location.href='#next';" class="btn btn-warning cus-b3">Get Started</button> -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-two">
                <img class="img-3 d-none d-lg-block " src="img/3.png" alt="img">
            </div>
        </div>
 
    </div>
</div>


    <?php include 'pages/general_user/footer.php'?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="assets/js/app.js"></script> -->
</body>

</html>