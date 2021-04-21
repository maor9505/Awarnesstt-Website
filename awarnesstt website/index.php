<?php
// Include files
require_once "./blogsys/db_params.php";
include_once './blogsys/class_blog_system.php';
$mngr=new blog_sys($mysqli);

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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                            <li><a href="#welcome">דף הבית</a></li>
                            <li><a href="#aboutme">מי אני</a></li>
                            <li><a href="#tipolim-plans">הטיפולים שלי</a></li>
                            <li><a href="#testimonials">ביקורות</a></li>
                            <li><a href="#blog">בלוג</a></li>
                            <li><a href="#contact-us">דברו איתי</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100000653375892" target="_blank" class="fa fa-facebook" style="font-size:18px"></a></li>
                            <li><a href="https://www.instagram.com/nisan137/" target="_blank" class="fa fa-instagram" style="font-size:18px;"></a></li>
                            <li><a href="https://www.waze.com/he/live-map/directions?to=ll.33.208902%2C35.602763" target="_blank"><img src="./assets/images/waze-brands2.svg" style="width: 20px; height: 20px; margin-bottom: 1px;"/></a></li>
                            <li></li>
                            <!-- <a href="#" class="languages-mobile"><i class="fa fa-globe"></i></a>  -->
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

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <div class="position-relative w-100 h-100" style="min-height: 400px; background-image: url(./assets/images/img6.jpg); background-position: center; background-size: cover;">
            <div class="position-absolute d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-12 offset-lg-2 col-lg-12 col-md-12 col-sm-12">
                        <h1>
                        “אני לא מרפא אנשים.
                        <br>
                        אני מאפשר להם למצוא את הריפוי שנשכח מהם,
                        <br>
                        והוא תמיד בתוכם.”
                        </h1>
                    </div>
                    <div class="offset-xl-3 col-xl-12 offset-lg-2 col-lg-12 col-md-12 col-sm-12 mt-5">
                        <a href="#aboutme" class="main-button-slider">רוצים לדעת עוד? לחצו כאן</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature" id="aboutme">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Features Small Item Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="features-small-item">
                        <div class="icon">
                            <i><img src="./assets/images/icon1.png" alt="" style="width: 50px; height: 50px;"></i>
                        </div>
                        <h3 class="features-title">מי אני?</h3>
                        <p class="text-about">
                            שמי ניסן ארז כבר 5 שנים שאני חוקר את התודעה, לומד איך לעבוד איתה וליצור הרמוניה עם מה שיש במציאות.
                            <br>
                            במהלך ריטריט של מודעות עצמית בחו"ל הבנתי שאני מחפש את המהות של החיים.
                            <br>
                            הדרך שבה אני תופס את המציאות השתנתה, ומאותו הרגע שסיימתי את הריטריט החלטתי שאני ממשיך לתרגל את החזרה לנוכחות ולמציאות- 
                            <br>
                            במילים אחרות לחזור לגוף, לחזור ל 5 החושים.
                            <br>
                            אם זה דרך תנועה, תזונה, מדיטציה, שאילת שאלות, חקירת מחשבות וכו'.
                            <br>
                            מצאתי דרך לשלב את המהות של התשוקה שלי שהיא חיבור לחיים, עם טכניקת מגע.
                            <br>
                            ההכשרות המוסמכות שלי-
                            <br>
                            ‏ מטפל ברפלקסולוגיה הוליסטית בשיטת גרינברג
                            ‏ מטפל בעיסוי משולב
                            ‏ מטפל בנרות הופי
                            <br>‏
                            "אני לא מרפא אנשים, אני מאפשר להם למצוא את הריפוי שנשכח מהם, והוא תמיד נמצא בתוכם"
                        </p>
                    </div>
                </div>
                <!-- ***** Features Small Item End ***** -->
            </div>
        </div>
    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
    <div style="background-image: url(./assets/images/img10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="count-item" data-scroll-reveal="enter top move 50px over 0.6s after 0.2s">
                             <strong>"המחשבות הן רק תנודות של התודעה, הסנטר נמצא בתוכך"</strong>
                        </div>                    
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   
    </section>
    <!-- ***** Features Small End ***** -->
    

    <!-- ***** Tipolim Section Start ***** -->
    <section class="section colored" id="tipolim-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">הטיפולים שלי</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-12">
                    <div class="center-text">
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Tipol item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="tipolim-item">
                        <div class="position-relative h-100" style="min-height: 400px; background-image: url(./assets/images/refImage.jpeg); background-position: center; background-size: cover;">
                            <div class="position-absolute p-3 d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
                              <h2 class="h6"><a href="./therapies/reflexology.html" class="text-white d-block text-center" style="font-size:1.5rem; line-height: 1.6;">רפלקסולוגיה</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Tipol Item End ***** -->

                    <!-- ***** Tipol Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="tipolim-item">
                        <div class="position-relative h-100" style="min-height: 400px; background-image: url(./assets/images/candlestipol2.jpeg); background-position: right; background-size: cover;">
                            <div class="position-absolute p-3 d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
                            <h2 class="h6"><a href="./therapies/hopi-candles.html" class="text-white d-block text-center" style="font-size:1.5rem; line-height: 1.6;">נרות הופי</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Tipol Item End ***** -->

                <!-- ***** Tipol Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="tipolim-item">
                        <div class="position-relative h-100" style="min-height: 400px; background-image: url(./assets/images/massagetipol.jpeg); background-position: center; background-size: cover;">
                            <div class="position-absolute p-3 d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
                            <h2 class="h6"><a href="./therapies/combined-massage.html" class="text-white d-block text-center" style="font-size:1.5rem; line-height: 1.6;">עיסוי משולב</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Tipol Item End ***** -->
            </div>
            <div class="main-button" style="direction: ltr;">
                <li class="nav-item dropdown">
                    <a href="#" href="../index.php#tipolim-plans" id="btn-tipolim" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">לעוד לחצו כאן</a>
                    <div class="dropdown-menu mr-5 text-center" aria-labelledby="btn-tipolim">
                        <a class="dropdown-item" href="./therapies/reflexology.html">רפלקסולוגיה</a>
                        <a class="dropdown-item" href="./therapies/hopi-candles.html">נרות הופי</a>
                        <a class="dropdown-item" href="./therapies/combined-massage.html">עיסוי משולב</a>
                        <a class="dropdown-item" href="#">אבנים חמות (בקרוב)</a>
                    </div>
                </li>
            </div>
        </div>
    </section>
    <!-- ***** Tipolim Section End ***** -->

       <!-- ***** Testimonials Start ***** -->
       <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">מה אומרים עליי</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-12">
                    <div class="center-text">
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="team-item" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>
                                "שהגעתי לטיפול אצל ניסן הייתי מאוד סקפטי. לא חשבתי שאתחבר לסוג טיפול שכזה. ניסן מהרגע הראשון עשה הכל על מנת לתת לי את ההרגשה הטובה והנוחה ביותר ואין ספק שלהגיע אליו היא הבחירה הנכונה!
                                הקליניקה מדהימה ומאובזרת היטב, האווירה פשוטה ונעימה שסוחפת אותך ישר לרוגע ושלווה..
                                ניסן קשוב לאורך כל הטיפול, חשוב לו שהכל ייעשה בהתאמה למטופל ורואים במובהקות שהכל יוצא מהלב מתוך נתינה ואהבה לאדם שיושב מולו.
                                אני כבר בסשן שני ומרוצה מכל רגע, באמת שאני חש שרכשתי חבר גם מעבר למטפל והכל בזכות הגישה המדהימה של ניסן.
                                כיף גדול שיש אנשים כמוך!"    
                            </p>
                            <div class="team-info">
                                <h3 class="user-name">מאיר אהרון</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="team-item" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>
                                "כשהגעתי לטיפול הראשון אצל ניסן גיליתי אדם צנוע בעל תדר נעים ומזמין,
                                 בעל יכולות הקשבה מדהימות וידיים שהם מתנה מאלוהים!
                                  העיסוי שלו בכפות הרגליים היה פשוט נקודת השיא שלי בשבוע, לאפשר לגוף שלי לנוח ולהירגע מכל הלחצים המופעלים עליו במשך השבוע.
                                  הוא עזר לי במשאלתי להתחבר לגוף שלי ולתחושותיו. בנוסף לעיסוי היה מדהים לשוחח איתו לפני ואחרי הטיפול,
                                  הוא עזר לי לדייק את עצמי ולהבין את עצמי בחמלה ושלווה רבה ועל כך אני מודה לו מעומק ליבי
                                  וממליץ לכל אדם ואישה להגיע אליו לטיפול גם אם רק להתוודע לאדם הנהדר שהוא."
                            </p>
                            <div class="team-info">
                                <h3 class="user-name">מאור אהרוני</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="team-item" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>
                                "ניסן ( ידי קסם) ארז
                                לניסן יש גישה טיפולית מיוחדת 
                                הוא יודע איך לגעת בעדינות, לרפא את המקום הכואב.
                                וגם בעוצמה, חוזקה שנדרש.
                                אני יודעת שאני מגיעה עם כאב, יוצאת בלי
                                רוב הטיפולים נרדמת.. ומתעוררת כחדשה
                                ממליצה !!" 
                            </p>
                            <div class="team-info">
                                <h3 class="user-name">מאיה בדוסה</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

            <!-- ***** Counter Parallax Start ***** -->
            <section class="counter">
            <div style="background-image: url(./assets/images/img7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
                <div class="content">
                    <!-- <div class="position-absolute" style="background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)); top:0; bottom:0; left:0; right:0;"></div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="count-item" data-scroll-reveal="enter top move 50px over 0.6s after 0.2s">
                                   <strong>Every day you pick something up- this is knowledge Every day you let go of something- this is wisdom</strong>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- ***** Counter Parallax End ***** -->   

            <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">הבלוג שלי</h2>
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
                require_once "./blogsys/db_params.php";
                $sql = "SELECT * FROM posts ORDER BY date_created DESC LIMIT 3";
                if($result = $mysqli->query($sql))
                {
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_array())
                        {
                            $dayname = date('d/m/Y', strtotime($row['date_created']));
                ?>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="blog-post-thumb" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="position-relative h-100" style="min-height: 400px; background-image: url(./assets/images/<?php echo $row['image'] ?>); background-position: center; background-size: cover;">
                                    <div class="position-absolute p-3 d-flex flex-column align-items-start justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,1)); top:0; bottom:0; left:0; right:0;">
                                    <h2 class="h6"><a href="./blog/article.php?mA33f4dItK=<?php echo $row['id']; ?>"  class="text-white d-block text-right" style="font-size:1.5rem; line-height: 1.6;"><?php echo $row['title'] ?></a></h2>
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
                <a href="./blog/list.php" id="btn-blog">לעוד לחצו כאן</a>
            </div>

        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">דברו איתי</h2>
                        <hr style="width: 15%;" />
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-12">
                    <div class="center-text" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <i class="fa fa-map-marker" style="font-size:20px"><span class="address mr-2">בית הלל, הצפון הזיתים 92</span></i>
                        <br>
                        <i class="fa fa-mobile-phone" style="font-size:20px"><span class="mobile-phone mr-2">פלאפון: 052-5499-651</span></i>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">

                <!-- ***** Contact Form Start ***** -->
                <div class="container col-lg-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="contact_form.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="שם מלא" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                  <input name="phone" type="text" class="form-control" id="phone" placeholder="מספר" required="">
                                </fieldset>
                              </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="אימייל" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="תוכן הפנייה" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="submit" id="form-submit" class="main-button">שליחה</button>
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
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.waze.com/he/live-map/directions?to=ll.33.208902%2C35.602763" target="_blank"><img src="./assets/images/waze-brands2.svg" style="width: 20px; height: 20px; margin-bottom: 0.8px;"/></a></li>
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
    <script src="./assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./assets/js/scrollreveal.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/imgfix.min.js"></script> 
    <!-- Global Init -->
    <script src="./assets/js/custom.js"></script>
    
  </body>
</html>