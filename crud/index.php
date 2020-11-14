<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>My Libary</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body style="background-image: url('./img/bg.jpg');">

<div class ="container-fluid ">
<div class="px-5 py-5">
<H1 class="text-center text-light display-5">The Big Libary</H1>
   <a href= "create.php"><button type="button" >Add Media</button></a>
   <table class="table table-hover table-primary">
  <thead >
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>     
      <th scope="col">First Name Author</th>
      <th scope="col">Last Name Author</th>
      <th scope="col">ISBN</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Date of publish</th>
      <th scope="col">Name of publisher</th>
      <th scope="col">Publisher</th>
      <th scope="col">Size of publisher</th>
      <th></th>
    </tr>
  </thead>
  
       <?php
            
    $sql = "SELECT * FROM media";
    $result = $connect->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "         
            
            
            
              <tbody>
                  <tr style='margin-top:5rem;'>
                      <td scope='col'><img style='width:8rem;' src=" .$row['image']."></td>
                      <td scope='col'>" .$row['title']. "</td>                   
                      <td scope='col'>" .$row['authorFirstName']."</td>
                      <td scope='col'>" .$row['authorLastName']."</td>
                      <td scope='col'>" .$row['ISBN']."</td>
                      <td scope='col'>" .$row['type']."</td>
                      <td scope='col'>" .$row['shortDescription']."</td>
                      <td scope='col'>" .$row['status']."</td>
                      <td scope='col'>" .$row['publishDate']."</td>
                      <td scope='col'>" .$row['publisherName']."</td>
                      <td scope='col'>" .$row['publisherAddress']."</td>
                      <td scope='col'>" .$row['publisherSize']."</td>

                     <td> <a href='update.php?id=" .$row['mediaID']."'><button style='width:5rem'type='button'>Edit</button></a>
                      <a href='delete.php?id=" .$row['mediaID']."'><button style='width:5rem' type='button'>Delete</button></a></td>
                  </tr>
              </tbody>
                          
                   
                    ";
            
            }
    } else  {
        echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
    }
    ?>

           
       
   </table>
   </div>
</div>

</body>
</html>