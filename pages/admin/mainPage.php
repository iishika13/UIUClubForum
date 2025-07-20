<?php
session_start();
include "nav.php";
include '../sqlCommands/connectDb.php';
include '../general_user/main.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <div class="container">
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->

                <div class="user"  style="margin: 0 0 0 96%;">
                  <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->

            <?php

                $r = "SELECT COUNT(*) AS total_posts FROM posts";
                $result = $sql->query($r);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $totalPosts = $row["total_posts"];
                } else {
                    $totalPosts = "No posts found.";
                }

            ?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo "$totalPosts"?></div>
                        <div class="cardName">Total post</div>
                    </div>

                    <div class="iconBx">
                      <ion-icon name="albums-outline"></ion-icon>
                    </div>
                </div>


                

                <?php

                    $r2 = "SELECT COUNT(*) AS post FROM `post_comment`";
                    $result2 = $sql->query($r2);

                    if ($result2->num_rows > 0) {
                        $row2 = $result2->fetch_assoc();
                        $comment = $row2["post"];
                    } else {
                        $comment = "No Req found.";
                    }

                ?>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo "$comment"?></div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                
            </div>

            


            

            
        </div>
    </div>
    </div>

    <!-- =========== Scripts =========  -->.
    <script src="assets/js/main.js"></script>

   

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>