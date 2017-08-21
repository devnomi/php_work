<?php
$con = mysqli_connect('localhost','root','','ad-form');
//if($con)
//{
//    echo "Connected";
//}else
//{
//    echo "Not Connected";
//}

if (isset($_GET['update']))
{
    $id = $_GET['update'];
    $query = mysqli_query($con, "SELECT * FROM form where id='$id' ");
}

if (isset($_POST["update"]))
{
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $update = mysqli_query($con,"UPDATE form SET
    name ='$name',
    fname ='$fname',
    email = '$email',
    password = '$password'
    WHERE id='$id'
    ");
    if ($update)
    {
//        echo "Record inserted Successfuly";
        header('location:table.php');
    }
}
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
        <style>
    body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
                   <?php 
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $query = mysqli_query($con, "SELECT * FROM form WHERE id='$id' ");
                        $fetch = mysqli_fetch_array($query);
                    }
                
                    ?>
                    
			    		<form role="form" action="update.php" method ="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name" id="name" value="<?= $fetch['name'];?>" class="form-control input-sm" placeholder="Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="fname" id="fname" value="<?= $fetch['fname'];?>" class="form-control input-sm" placeholder="Father Name">
			    					</div>
			    				</div>
			    			</div>

<!--
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>
-->

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="email" name="email" id="password" value="<?= $fetch['email'];?>" class="form-control input-sm" placeholder="Email">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" value="<?= $fetch['password'];?>" class="form-control input-sm" placeholder="Password">
			    						<input type="hidden" name="id" value="<?= $id;?>" >
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name="update" value="update" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>