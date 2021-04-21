<?php
// Include files
require_once "./db_params.php";
include_once './class_blog_system.php';

$mngr=new blog_sys($mysqli);

    if(isset($_GET["id"]))
    {
        $id = ($_GET["id"]);
        $mngr->deleteFromTable($id);
    }

?>

<!DOCTYPE html>
<html>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
        <title>Awarness Blog System</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./style-blog-system.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="wrapper">
    <div class="container" id="c-blog">
        <div class="card" id="card-list">
            <div class="card-body text-dark">
                <h5 class="card-title text-dark " id="header-blog"><b>רשימת כתבות</b></h5><hr>
                <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        // Include db file for the table
                        require_once "./db_params.php";
                        
                        $sql = "SELECT * FROM `posts` ORDER BY `date_created`";
                        if($result = $mysqli->query($sql)){
                            if($result->num_rows > 0){
                                echo "<button title='Create new blog post' class='postModal mb-3 btn btn-primary' href='#postModal'>יצירת כתבה חדשה</button>";
                                echo "<table class='card-table text-right table-responsive table-bordered table-striped table-hover'>";
                                    echo "<thead >";
                                        echo "<tr>";
                                            echo "<th style='width: 5rem; padding: 5px; margin-right: 3px;'>#</th>";
                                            echo "<th style='width: 50rem; padding: 5px;'>כותרת</th>";
                                            echo "<th style='width: 50rem; padding: 5px;'>קטגוריה</th>";
                                            echo "<th style='width: 25rem; padding: 5px;'>תאריך יצירה</th>";
                                            echo "<th style='width: 25rem; padding: 5px;'>פעולות</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while($row = $result->fetch_array()){
                                        echo "<tr>";
                                            echo "<td style='padding: 5px; margin-right: 3px;'>" . $row['id'] . "</td>";
                                            echo "<td style='padding: 5px; margin-right: 3px;'>" . $row['title'] . "</td>";
                                            echo "<td style='padding: 5px; margin-right: 3px;'>" . $row['category'] . "</td>";
                                            echo "<td style='padding: 5px; margin-right: 3px;'>" . $row['date_created'] . "</td>";
                                            echo "<td>";
                                                echo "<a href='comments.php?idpost=". $row['id'] ."' title='עריכת תגובות' class='btn btn-primary p-1 mr-1'>תגובות</a>";
                                                echo "<a href='editPost.php?id=". $row['id'] ."' title='עריכת כתבה' class='btn btn-success p-1 mr-1'>עריכה</a>";
                                                echo "<a class='btn btn-danger p-1 mr-1' title='מחיקת כתבה' href='admin-blog.php?id=". $row['id'] ."'>מחיקה</a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                $result->free();
                            } else{
                                echo "<p class='lead text-center'>אין כתבות בבלוג<br/><a class='postModal btn btn-outline-primary m-0 mt-2' id='btn-nblog' type='button' href='#postModal'>יצירת כתבה חדשה</a></p>";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                        }

                        ?>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    </div>
</div>
<!--<div class="container">-->
<!--                    <form action="upload.php" method="post" enctype="multipart/form-data">-->
<!--                        בחר תמונה:-->
<!--                        <input type="file" name="file">-->
<!--                        <input type="hidden" name="submit" value="Upload">-->
<!--                </form>-->
<!--</div>-->
<div class="push"></div>
    <footer class="footer text-center text-white bg-indigo mt-4 fixed-bottom">
            Ⓒ <a href='https://www.Awarnesstt.com'>Awarnesstt</a> - Blog System Ⓒ</br><span style="font-size: 0.8rem;">Created by Dorel & Maor</span>
    </footer>

    <!-- Modal -->
    <div id="postModal" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog" id="modal-post">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header text-right">            
            <button type="button" class="close ml-0" data-dismiss="modal">&times;</button>
            <h4 class="h3 modal-title" style="font-family: 'Assistant';"><b>יצירת כתבה חדשה</b></h4>
        </div>
            <div class="modal-body">
                <form action="upload.php" method="post" class="c2-blog" enctype="multipart/form-data">
                    <div class="form-group text-right" style="font-family: 'Assistant';">
                        <label class="h5"><b>:כותרת ראשית</b></label>
                        <input type="text" name="title" class="form-control" id="input-title" >
                    </div>
                    <div class="form-group text-right" style="font-family: 'Assistant';">
                        <label class="h5"><b>:קטגוריה</b></label>
                        <input type="text" name="category" class="form-control" id="input-title" >
                    </div>
                    <div class="form-group text-right" style="font-family: 'Assistant';">
                        בחר תמונה:
                        <input type="file" name="file">
                    </div>
                    <div class="form-group text-right" style="font-family: 'Assistant';">
                        <label class="h5"><b>:תוכן</b></label>
                        <textarea name="description"></textarea>
                    </div>
                    <input type="hidden" name="newpost" id="postid" value="<?php echo $id; ?>"/>
                    <input type="submit" class="btn btn-primary" value="אישור">
                    <a class="btn btn-outline-danger" data-dismiss="modal">ביטול</a>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).on("click", ".postModal", function (e) {
        e.preventDefault();
        var _self = $(this);
        var rowid = _self.data('id');
        $("#postid").val(rowid);
        $(_self.attr('href')).modal('show');
        });
        
        CKEDITOR.replace( 'description' );    
    </script>

</body>
</html>
