<?php
// Include files
require_once "../blogsys/db_params.php";
include_once '../blogsys/class_blog_system.php';
$mngr=new blog_sys($mysqli);

if(isset($_POST["sendbtn"]))
{
    $id = $_GET['mA33f4dItK'];
    if(isset($_POST["name"]) && isset($_POST["message"]))
    {
        $author_name = $_POST["name"];
        $email = $_POST["email"];
        $description_comment = $_POST["message"];
        $mngr->insertNewComment($id,$author_name,$email,$description_comment);
        header('location: article.php?mA33f4dItK='.$id.'#comments');
    }
}   

?>


<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Awarness. Travel. Therapy</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
    
    <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <span class="navbar-brand ml-2" href="#">att</span><span class="slogan"><b>a</b>warness<br><b>t</b>ravel<br><b>t</b>herapy</span>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="../index.php">דף הבית</a></li>
                            <li><a href="../index.php#aboutme">מי אני</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="../index.php#tipolim-plans" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    הטיפולים שלי
                                </a>
                                <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="../therapies/reflexology.html">רפלקסולוגיה</a>
                                  <a class="dropdown-item" href="../therapies/hopi-candles.html">נרות הופי</a>
                                  <a class="dropdown-item" href="../therapies/combined-massage.html">עיסוי משולב</a>
                                </div>
                            </li>
                            <li><a href="../index.php#testimonials">ביקורות</a></li>
                            <li><a href="./list.php">בלוג</a></li>
                            <li><a href="../index.php#contact-us">דברו איתי</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100000653375892" target="_blank" class="fa fa-facebook" style="font-size:18px"></a></li>
                            <li><a href="https://www.instagram.com/nisan137/" target="_blank" class="fa fa-instagram" style="font-size:18px;"></a></li>
                            <li><a href="https://www.waze.com/he/live-map/directions?to=ll.33.208902%2C35.602763" target="_blank"><img src="../assets/images/waze-brands2.svg" style="width: 20px; height: 20px; margin-bottom: 1px;"/></a></li>
                            <li></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Tipol main header Start ***** -->
    <div class="tipol-area" id="welcome">
    <?php
        // Include db file for the table
        require_once "../blogsys/db_params.php";
        $id = $_GET['mA33f4dItK'];
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        if($result = $mysqli->query($sql))
        {
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_array())
                {
            
    ?>
        <div class="position-relative w-100 h-100" style="min-height: 400px; background-image: url(../assets/images/<?php echo $row['image'] ?>); background-position: center; background-size: cover;">
            <div class="position-absolute d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-12 offset-lg-2 col-lg-12 col-md-12 col-sm-12">
                        <h1>
                        <?php echo $row['title'] ?>
                        </h1>
                        <li><a href="#post-section" class="fa fa-angle-double-down mt-2" style="font-size: 30px; color: #fff;"></a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Tipol main header End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section post-feature" id="post-section">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="post-small-item">
                        <p class="my-2" style="position: absolute;">
                            <div class="container text-right">
                                <?php echo $row['description'] ?>
                            </div>
                        </p>
                    </div>
                </div>
                <!-- ***** Features Small Item End ***** -->
        <?php
                    }
                    $result->free();
                }
            } 
            else
            {
                echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
            }
        ?>  
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

            <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container ">
            <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">תגובות</h2>
                    <hr style="width: 15%;" />
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s" style="margin: 0 auto;">

            <?php
            // Include db file for the table
            require_once "../blogsys/db_params.php";
            $id = $_GET['mA33f4dItK'];
            $sql = "SELECT * FROM comments WHERE id_post = '$id' ORDER BY date_created DESC";
            if($result = $mysqli->query($sql))
            {
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_array())
                    {
                      $dayname = date('d/m/Y', strtotime($row['date_created']));
            ?>
                        <div class="card p-3 mb-4 shadow-sm blogBox2 moreBox2" id="card-comments" style="display:none;">
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='user d-flex flex-row align-items-center'><span><i><a href="#contact-us" class="fa fa-comment-o ml-2" style="font-size:20px;"></a></i><small class='h6 font-weight-bold text-primary'><?php echo $row['author_name'] ?></small></span> </div> <small ><?php echo $dayname ?></small>
                            </div>
                            <div class='d-flex justify-content-between align-items-center text-right' style="word-wrap:break-word; overflow:auto;">
                                <span><small class='font-weight-bold'><?php echo $row['description_comment'] ?></small></span>
                            </div>
                        </div>
            <?php
                    }
                    $result->free();
                }
            } 
            else
            {
                echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
            }
            // $mysqli->close();
            ?>
            <div id="loadMore2">
                <button class="btn-loadmore2">לעוד תגובות לחצו כאן</button>
            </div>
    </div>
    <!-- ***** Section Title End ***** -->
    <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="center-heading">
                    <h2 class="section-title">קראתם? נהנתם? ספרו לנו...</h2>
                    <hr style="width: 15%;" />
                </div>
            </div>
        </div>
            <div class="row">
                <!-- ***** Contact Form Start ***** -->
                <div class="container col-lg-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="#" method="post" role="form">
                          <div class="row">
                            <div class="col-lg-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="שם מלא" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="אימייל" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="תוכן התגובה" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="sendbtn" id="form-submit" class="main-button">שליחה</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->


                <!-- ***** Blog Start ***** -->
                <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">בלוגים נוספים</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-12">
                    <div class="center-text">
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <?php
                // Include db file for the table
                require_once "../blogsys/db_params.php";
                $sql = "SELECT * FROM posts ORDER BY RAND() LIMIT 3";
                if($result = $mysqli->query($sql))
                {
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_array())
                        {
                            $dayname = date('d/m/Y', strtotime($row['date_created']));
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post-thumb" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="position-relative h-100" style="min-height: 200px; background-image: url(../assets/images/<?php echo $row['image'] ?>); background-position: center; background-size: cover;">
                                    <div class="position-absolute p-3 d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
                                    <h2 class="h6"><a href="../blog/article.php?mA33f4dItK=<?php echo $row['id'] ?>" class="text-white d-block text-right" style="font-size:1.5rem; line-height: 1.6;"><?php echo $row['title'] ?></a></h2>
                                    </div>
                                    <a href='#' class="float-left text-white p-2" style="background-color: #18131d;">
                                        <small><?php echo $dayname ?></small>
                                    </a>
                                    <a href="#" class="float-right text-white p-2" style="background-color: #18131d;">
                                        <small><?php echo $row['category'] ?></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                        $result->free();
                    }
                } 
                else
                {
                    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                }
                $mysqli->close();
                ?>               

            </div>
            <div class="main-button">
                <a href="../blog/list.php" id="btn-blog">לעוד לחצו כאן</a>
            </div>

        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.waze.com/he/live-map/directions?to=ll.33.208902%2C35.602763" target="_blank"><img src="../assets/images/waze-brands2.svg" style="width: 20px; height: 20px; margin-bottom: 0.8px;"/></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100000653375892" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/nisan137/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2021 Awarnesstt.com</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script> 
    
    <script>
        // Article page load more button ** START **
        $(function(){
            
            var loadingbtn2 = document.querySelector('.btn-loadmore2');
            
            loadingbtn2.addEventListener("click", function() {
            loadingbtn2.innerHTML = "לעוד לחצו כאן";
                
                setTimeout( 
                    function  (){  
                        loadingbtn2.innerHTML = "לעוד לחצו כאן";
                        
                    }, 6000);
            }, 	false);
            
        });

        $( document ).ready(function () {
            $(".moreBox2").slice(0, 5).show();
            if ($(".blogBox2:hidden").length != 0) {
                $("#loadMore2").show();
            }   
            $("#loadMore2").on('click', function (e) {
                e.preventDefault();
                $(".moreBox2:hidden").slice(0, 3).slideDown();
                if ($(".moreBox2:hidden").length == 0) {
                $("#loadMore2").fadeOut('slow');
                }
            });
        });
        // Article page load more button ** END **
    </script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
  </body>
</html>