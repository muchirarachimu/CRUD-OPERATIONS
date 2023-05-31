<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drivers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

  </head>
    <body>

<?php
include 'config.php';
$select="SELECT*FROM books";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);
?>

<div class="table">
<h2 style="color:red";>List of Books</h2>
<a href="insert.php">Register New Book </a> <br><br>


<table>
    <tr>
        <th>Book Title </th>
        <th>Book Author </th>
        <th>Book Photo </th>
        <th colspan="2"> Actions</th>

    </tr>

<?php
if($data){
    while ($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
            <td><?php echo $row['BookTitle'] ?></td>
            <td><?php echo $row['BookAuthor'] ?></td>
            <td><img src="images/<?php echo $row['BookPhoto'] ?>" width="80px"></td>
            <td><a href="edit.php?id=<?php echo $row['bookID'] ?>" style="background-color:blue">Edit</td>
            <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['bookID'] ?>">Delete</td>
        </tr>
        <?php
    }
}
else
{
    echo "No record found";
}
?>
</table>

</div>
</body>
    </html>
