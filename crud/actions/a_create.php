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

  

   $sql = "INSERT INTO media  (title, image, authorFirstName, authorLastName, ISBN, type, shortDescription, status, publishDate, publisherName,  publisherAddress, publisherSize ) VALUES ('$title','$img','$afn','$aln','$isbn', '$type', '$sd','$st','$pd','$pn','$pa', '$ps')";
   
   if($connect->query($sql) === TRUE) {
       
    echo "<div class='jumbotron jumbotron-fluid'>
    <div class='container'>
      <h1 class='display-4'>New Record Successfully Created</h1>
      <a href='../create.php'><button type='button'>Back</button></a>
  <a href='../index.php'><button type='button'>Home</button></a>
    </div>
  </div>";
   } else {
        echo "Error ". $sql , '' . $connect->connect_error;
   }

   $connect->close();

}

?>
</div>
</body>
</html>