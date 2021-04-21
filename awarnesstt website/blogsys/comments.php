<?php
// Include files
require_once "./db_params.php";
include_once './class_blog_system.php';

$mngr=new blog_sys($mysqli);

    if(isset($_GET["idco"]))
    {
        $id = ($_GET["idco"]);
        $mngr->deleteComment($id);
        header('location: admin-blog.php');
    }

?>

<!DOCTYPE html>
<html>
        <title>Awarness Blog System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./style-blog-system.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="wrapper">
    <hr/>
    <div class="container" id="c-blog">
        <div class="card" id="card-list">
            <div class="card-body text-dark">
        
                <h5 class="card-title text-dark " id="header-blog"><b>תגובות</b></h5><hr>
                <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php

                        require_once "./db_params.php";
                        $id = $_GET['idpost'];
                        $sql = "SELECT * FROM comments WHERE id_post = '$id' ORDER BY date_created DESC";
                        if($result = $mysqli->query($sql))
                        {
                            if($result->num_rows > 0)
                            {

                        ?>
                            <a title='Create new blog post' class='postModal mb-3 ml-2 btn btn-primary' href='admin-blog.php'>חזרה לניהול הבלוגים</a>
                            <a title='id of article' class='postModal mb-3 ml-2 btn btn-primary'>מזהה פוסט: <?php echo $id ?></a>
                            <a title='Create new blog post' class='postModal mb-3 btn btn-primary' href='../blog/article.php?mA33f4dItK=<?php echo $id ?>'>כניסה לפוסט</a>
                            <table class='card-table text-right table-responsive table-bordered table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th style='width: 5rem; padding: 5px; margin-right: 3px;'>#</th>
                                        <th style='width: 40rem; padding: 5px;'>שם כותב</th>
                                        <th style='width: 40rem; padding: 5px;'>אימייל</th>
                                        <th style='width: 50rem; padding: 5px;'>תוכן</th>
                                        <th style='width: 25rem; padding: 5px;'>תאריך יצירה</th>
                                        <th style='width: 25rem; padding: 5px;'>פעולות</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                            while($row = $result->fetch_array())
                            {
                        ?>

                            <tr>
                                <td style='padding: 5px; margin-right: 3px;'><?php echo $row['id'] ?></td>
                                <td style='padding: 5px; margin-right: 3px;'><?php echo $row['author_name'] ?></td>
                                <td style='padding: 5px; margin-right: 3px;'><?php echo $row['email'] ?></td>
                                <td style='padding: 5px; margin-right: 3px;'><?php echo $row['description_comment'] ?></td>
                                <td style='padding: 5px; margin-right: 3px;'><?php echo $row['date_created'] ?></td>
                                <td>
                                <a class='btn btn-danger p-1 mr-1' title='מחיקת כתבה' href='comments.php?idco=<?php echo $row['id'] ?>'>מחיקה</a>
                                </td>
                            </tr>

                        <?php
                        }
                        $result->free();
                            }
                            else{
                                echo "<p class='lead text-center'>אין תגובות בפוסט זה<br/><a class='postModal btn btn-outline-primary m-0 mt-2' id='btn-nblog' type='button' href='admin-blog.php'>חזרה לניהול הבלוג</a></p>";
                            }
                        }
                        else
                        {
                            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                        }
                        $mysqli->close();
                        ?>
                                </tbody>                            
                            </table>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    </div>
</div>

<div class="push"></div>
    <footer class="footer text-center text-white bg-indigo mt-4 fixed-bottom">
            Ⓒ <a href='https://www.Awarnesstt.com'>Awarnesstt</a> - Blog System Ⓒ</br><span style="font-size: 0.8rem;">Created by Dorel & Maor</span>
    </footer>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</body>
</html>