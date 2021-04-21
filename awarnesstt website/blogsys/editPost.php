<?php
// Include files
require_once "./db_params.php";
include_once './class_blog_system.php';

$mngr=new blog_sys($mysqli);

if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        $title = $_GET['title'];
        $category = $_GET["category"];
        $image = $_GET['image'];
        $description2 = $_GET['description2'];
        $mngr->editFromTable($id,$title,$category,$image,$description2);
        header('location: admin-blog.php');
    }
?>

<!DOCTYPE html>
<html>
        <title>Awarness Blog System - Editor</title>
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

    <section id="blog-editor">
        <div class="card container" id="edit-blog">
        <div class="header">
            <div class="card-body text-dark">
                <h5 class="card-title text-dark " id="header-blog"><b>עריכת כתבה</b></h5><hr>
            </div>
        </div>
            <?php
            // Include db file for the table
            require_once "./db_params.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM posts WHERE id = '$id'";
            if($result = $mysqli->query($sql)){
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_array())
                    {
            ?>
                        <form method='get'>
                            <div class='form-group text-right'>
                                <label class='h5'><b>:כותרת ראשית</b></label>
                                <input type='text' name='title' class='form-control' id='input-title' value='<?php echo $row['title'] ?>'>
                            </div>
                            <div class='form-group text-right'>
                                <label class='h5'><b>:קטגוריה</b></label>
                                <input type='text' name='category' class='form-control' id='input-title' value='<?php echo $row['category'] ?>'>
                            </div>
                            <div class='form-group text-right'>
                                <label class='h5'><b>:העלאת תמונה</b></label><br/>
                                <input type='file' name='image' value='<?php echo $row['image'] ?>'>
                            </div>
                            <div class='form-group text-right'>
                                <label class='h5'><b>:תוכן</b></label>
                                <textarea name='description2'><?php echo $row['description'] ?></textarea>
                            </div>
                            <button name='edit' value='<?php echo $row['id'] ?>' class='btn btn-primary mr-2 mt-2 mb-4'>אישור</button>
                            <a href='admin-blog.php' class='btn btn-outline-danger mt-2 mb-4'>ביטול</a>
                        </form>
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
    </section>
    <div class="push"></div>
    <footer class="footer text-center text-white bg-indigo mt-4">
            Ⓒ <a href='https://www.Awarnesstt.com'>Awarnesstt</a> - Blog System Ⓒ</br><span style="font-size: 0.8rem;">Created by Dorel & Maor</span>
    </footer>
    <script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description2' );
    </script>
    
</body>
</html>