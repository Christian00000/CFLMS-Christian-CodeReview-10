<!DOCTYPE html>
<html>
<head>
   <title>BIG Libary  |  Add Media</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body style="background-image: url('./img/bg.jpg');">
<div class="container">
<fieldset >
   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method= "post">
       <table class="bg-secondary"cellspacing= "10" cellpadding="10">
           <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="Title" /></td >
           </tr>    
           <tr>
               <th>Image</th>
               <td><input  type="text" name= "image" placeholder="URL Image" /></td>
           </tr>
           <tr>
               <th>First Name Author</th>
               <td><input type="text"  name="authorFirstName" placeholder ="Author´s first name"></td>
           </tr>
           <tr>
               <th>Last Name Author</th>
               <td><input type="text"  name="authorLastName" placeholder ="Author´s last name"></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN Nummer"></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><select type="dropdown"  name="type" >
               <option selected>Choose...</option>
               <option value="CD">CD</option>
               <option value="DVD">DVD</option>
               <option value="Book">Book</option>
               </select></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="shortDescription" placeholder ="What it is about"></td>
           </tr>
           <tr>
               <th>Status</th>
               <td><select type="dropdown"  name="status" >
               <option selected>Choose...</option>
               <option value="availible">Available</option>
               <option value="reserved">Reserved</option>
               <option value="requriet">Requriet</option>
               </select></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="date"  name="publishDate" ></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisherName" placeholder ="Name of Publisher"></td>
           </tr>
           <tr>
               <th>Address of Publisher</th>
               <td><input type="text"  name="publisherAddress" placeholder ="Address of Publisher"></td>
           </tr>
           <tr>
               <th>Size of Publisher</th>
               <td><select type="dropdown"  name="publisherSize" >
               <option selected>Choose...</option>
               <option value="big">Big</option>
               <option value="medium">Medium</option>
               <option value="small">Small</option>
               </select></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert media</button></td>
               <td ><a href= "index.php"><button style="" type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >
</div>
</body>
</html>