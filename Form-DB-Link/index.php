<?php
include_once('link.php');
if(isset($_POST['Submit']))
{
    extract($_POST);
    if(!empty($name) && !empty($mail))
    {
      //to fectch variable from text box
      //$name=$_POST('name');

      $query="insert into mailname (name,mail) values('$name' , '$mail');";
      $retrive="select from * from mailname;";
      $run= mysqli_query($link, $query) or die(mysqli_error());
      $run1=mysqli_query()
      if($run)
          echo "form submitted sucessfully";
      else
          echo "Form not submitted";
    }
else
     echo "all fields required";
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database connection</title>
</head>
<body>
    <form action="index.php" method="post">
     <span>First Name : </span><br>
     <input type="text" name="name"><br>
     <span>Mail Id : </span><br>
     <input type="text" placeholder="Mail Id" name="mail"><br>
     <br>
     <input type="submit" name="Submit">


    </form>
</body>
</html>