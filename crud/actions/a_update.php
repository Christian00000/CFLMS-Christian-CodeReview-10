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

if ($_POST){
   $title = $_POST['title'];
   $img = $_POST['image'];
   $afn = $_POST['authorFirstName'];
   $aln = $_POST['authorLastName'];
   $isbn = $_POST['ISBN'];
   $type = $_POST['type'];
   $sd = $_POST['shortDescription'];
   $st = $_POST['status'];
   $pd = $_POST['publishDate'];
   $pn = $_POST['publisherName'];
   $pa = $_POST['publisherAddress'];
   $ps = $_POST['publisherSize'];
   $id = $_POST['mediaID'];

   $sql = "UPDATE media SET mediaID = '$id', title = '$title', image = '$img', authorFirstName = '$afn', authorLastName = '$aln', ISBN = '$isbn', type = '$type', shortDescription = '$sd', status = '$st', publishDate = '$pd', publisherName = '$pn', publisherAddress = '$pa', publisherSize = '$ps' WHERE mediaID = {$id}";

   if($connect->query($sql) === TRUE) {
      

       echo "<div class='jumbotron jumbotron-fluid'>
       <div class='container'>
         <h1 class='display-4'>Successfully Updated</h1>
         <a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>
       <a href='../index.php'><button type='button'>Home</button></a>
       </div>
     </div>";

   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
</div>
</body>
</html>