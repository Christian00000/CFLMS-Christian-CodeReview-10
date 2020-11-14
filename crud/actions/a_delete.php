<!DOCTYPE html>
<html>
<head>
   <title>BIG Libary  |  Add Media</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body style="background-image: url('./img/bg.jpg');">
<div class="container">

<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['mediaID'];

   $sql = "DELETE FROM media WHERE mediaID= {$id}";
    if($connect->query($sql) === TRUE) {
       

       echo "<div class='jumbotron jumbotron-fluid'>
       <div class='container'>
         <h1 class='display-4'>Successfully deleted!</h1>
         <a href='../index.php'><button type='button'>Back</button></a>
       </div>
     </div>";

   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
</div>
</body>
</html>