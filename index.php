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
      <center>

      <h2 style="color:red";>Register</h2>
      <div class="form">
      <form action="" method="POST" enctype="multipart/form-data">
        <label for="BookTitle">Book Title </label><br>
        <input type="text" name="BookTitle" placeholder="Enter Book Title...">
        <br>
        <label for="BookAuthor">Book Author </label><br>
        <input type="text" name="BookAuthor" placeholder="Enter Book Author...">
        <br><br>
        <label for="BookPhoto">Book Photo </label>
        <input type="file" name="BookPhoto" >
        <br>
        <input type="submit" name="insert_btn" value="Insert">
        <input type="reset">
    </form>
      </div>
      </center>

<a href="view.php">View Books</a>
<?php include 'insert.php';
//header('location:view.php');        
?>
    </body>
    </html>
