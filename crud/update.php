<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE mediaID = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background-image: url('./img/bg.jpg');">
<div class="container">
<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table class="bg-secondary" cellspacing="10" cellpadding= "10">
       <tr>
               <th></th >
               <td><input  type="hidden" name="mediaID"  placeholder="Title" value="<?php echo $data['mediaID']?>"></td >
           </tr>    
       <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="Title" value="<?php echo $data['title']?>"></td >
           </tr>    
           <tr>
               <th>Image</th>
               <td><input  type="text" name= "image" placeholder="URL Image" value="<?php echo $data['image']?>" ></td>
           </tr>
           <tr>
               <th>First Name Author</th>
               <td><input type="text"  name="authorFirstName" placeholder ="Author´s first name" value="<?php echo $data['authorFirstName']?>"></td>
           </tr>
           <tr>
               <th>Last Name Author</th>
               <td><input type="text"  name="authorLastName" placeholder ="Author´s last name" value="<?php echo $data['authorLastName']?>"></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN Nummer" value="<?php echo $data['ISBN']?>"></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><select type="dropdown"  name="type" value="<?php echo $data['type']?>" >
               <option selected>Choose...</option>
               <option value="CD">CD</option>
               <option value="DVD">DVD</option>
               <option value="Book">Book</option>
               </select></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="shortDescription" placeholder ="What it is about" value="<?php echo $data['shortDescription']?>"></td>
           </tr>
           <tr>
               <th>Status</th>
               <td><select type="dropdown"  name="status" value="<?php echo $data['status']?>" >
               <option selected>Choose...</option>
               <option value="available">Available</option>
               <option value="reserved">Reserved</option>
               <option value="requiret">Requriet</option>
               </select></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="date"  name="publishDate" placeholder ="Publish Date" value="<?php echo $data['publishDate']?>"></td>
           </tr>
           <tr>
               <th>NAME of publisher</th>
               <td><input type="text"  name="publisherName" placeholder ="Name of Publisher" value="<?php echo $data['publisherName']?>"></td>
           </tr>
           <tr>
               <th>Address of Publisher</th>
               <td><input type="text"  name="publisherAddress" placeholder ="Address of Publisher" value="<?php echo $data['publisherAddress']?>"></td>
           </tr>
           <tr>
               <th>Size of Publisher</th>
               <td><select type="dropdown"  name="publisherSize" value="<?php echo $data['publisherSize']?>" >
               <option selected>Choose...</option>
               <option value="big">Big</option>
               <option value="medium">Medium</option>
               <option value="small">Small</option>
               </select></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert media</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form >

</fieldset >
</div>
</body >
</html >

<?php
}
?>