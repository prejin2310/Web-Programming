<?php
//code for pass value to database::::::

include_once('link.php');
if(isset($_POST['Submit']))
{
    extract($_POST);
    if(!empty($name) && !empty($mail))
    {
      //to fectch variable from text box
      //$name=$_POST('name');

      $query="insert into mailname (name,mail) values('$name' , '$mail');";
      $run= mysqli_query($link, $query) or die(mysqli_error());
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
     <input type="text" placeholder="Enter Name" name="name"><br>
     <input type="text" placeholder="Mail Id" name="mail"><br>
     <input type="submit" name="Submit">


    </form>
</body>
</html>
