<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>
<?php
include 'config.php';
$id=$_GET['id'];

 $select="SELECT * FROM books WHERE bookID='$id'";
 $select_q=mysqli_query($con, $select);
 $fetch=mysqli_fetch_array($select_q);

?>
<center>

<div class="form">
<h2 style="color:red";>Edit Book</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <label for="BookTitle">Book Title </label><br>
        <input type="text" name="BookTitle" placeholder="Enter Book Title..."
        value="<?php echo $fetch['BookTitle'] ?>">
        <br>
        <label for="BookAuthor">Book Author </label><br>
        <input type="text" name="BookAuthor" placeholder="Enter Book Author... "
        value="<?php echo $fetch['BookAuthor'] ?>">
        <br> <br>
        <label for="BookPhoto">Book Photo </label>
        <input type="file" name="BookPhoto">
        <br>
        <img src="images/<?php echo $fetch['BookPhoto'] ?>" width="70px">
        <br><br>

        <input type="submit" name="update_btn" value="Update">
        <input type="reset">
        <a href="view.php">Cancel</a>


    </form>
</div>
</center>

    <?php 
    if(isset($_POST['update_btn'])){
        $title=$_POST['BookTitle'];
        $author=$_POST['BookAuthor'];
        $image=$_FILES['BookPhoto']['name'];
        $tmp_name=$_FILES['BookPhoto']['tmp_name'];
        $destination="images/".$image;
        if($image!="")
        {
            $update="UPDATE books SET BookTitle='$title', BookAuthor='$author', BookPhoto='$image' WHERE bookID='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view.php');
        }
        else
        {
            $update="UPDATE books SET BookTitle='$title', BookAuthor='$author' WHERE bookID='$id'";
            $update_q=mysqli_query($con,$update);
            header('location:view.php');        
        }
    }
    ?>

</body>
    </html>
