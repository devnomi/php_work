<?php
$con = mysqli_connect('localhost','root','','ad-form');
$query= mysqli_query($con,"SELECT * FROM form");
//$fetch = mysqli_fetch_array($select);

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
  
  
  
   <table class="table table-striped table-hover table-bordered">
       <thead>
           <tr>
               <th>Name</th>
               <th>Father Name</th>
               <th>Email</th>
               <th>Password</th>
               <th>Update</th>
               <th>Delete</th>
           </tr>
       </thead>
       <tbody>
          
          <?php
           
           while($fetch = mysqli_fetch_array($query))
           {
           
           ?>
          
           <tr>
               <td>
               <?php echo $fetch['name'];?></td>
               <td>
               <?php echo $fetch['fname'];?></td>
               <td>
               <?php echo $fetch['email'];?></td>
               <td>
               <?php echo $fetch['password'];?></td>
               <td><a href="update.php?id=<?= $fetch['id'];?>" class="btn btn-info">Update</a></td>
               <td><a href="#" class="btn btn-danger">Delete</a></td>
               
           </tr>
           
           <?php
           }
           ?>
           
       </tbody>
   </table>
    
</body>
</html>