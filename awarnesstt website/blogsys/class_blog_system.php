<?php
 
class blog_sys {

    private $mysqli;
    
    function __construct($conn)
    {
        $this->mysqli=$conn;
        $this->mysqli->set_charset("utf8");
    }

    function insertNewLine($title,$category,$image,$description){
        if($title != null && $category != null && $description != null)
        {
            $query="INSERT INTO `posts` ";
            $query.="(`title`,`category`, `image`, `description`) ";
            $query.=" VALUES ";
            $query.="('$title','$category','$image', '$description'); ";
        }
        else
        {
            echo "<script>alert('אחד מהשדות ריקים אנא מלא את כולם.')</script>";
        }
        mysqli_query($this->mysqli,$query);
    }

    function insertNewComment($id_post,$author_name,$email,$description_comment)
    {
        if($author_name != null && $description_comment != null)
        {
            $query="INSERT INTO `comments` ";
            $query.="(`id_post`,`author_name`,`email`, `description_comment`) ";
            $query.=" VALUES ";
            $query.="('$id_post','$author_name','$email', '$description_comment'); ";
        }
        else
        {
            echo "<script>alert('אחד מהשדות ריקים אנא מלא את כולם.')</script>";
        }
        mysqli_query($this->mysqli,$query);
    }
    
    function editFromTable($id,$title,$category,$image,$description2)
    {
        if($image != null)
        {
            mysqli_query($this->mysqli, "UPDATE posts SET title='$title', category='$category', image='$image', description='$description2' WHERE id = '$id' ");
        }
        else
        {
            mysqli_query($this->mysqli, "UPDATE posts SET title='$title', category='$category', description='$description2' WHERE id = '$id' ");
        }
    }

    function deleteFromTable($id){
        mysqli_query($this->mysqli, "DELETE FROM posts WHERE id= '$id'");
    }

    function deleteComment($idcomment){
        mysqli_query($this->mysqli, "DELETE FROM comments WHERE id= '$idcomment'");
    }

}