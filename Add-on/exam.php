<html>
    <body>
        <form action="exam.php" method="POST">
        <label for="q11">2+3=</label><br>
        a. 5<input type="radio" name="q11" value="11" ><br>
        b. 3<input type="radio" name="q11" value="12"><br>
        c. 6<input type="radio" name="q11" value="13"><br>
        d. 5<input type="radio" name="q11" value="14"><br><br>

        <label for="q11">Which tag is used for bolding text</label><br>
        a. &ltp&gt<input type="radio" name="q21" value="21"><br>
        b. &ltb&gt<input type="radio" name="q21" value="22"><br>
        c. &ltpre&gt<input type="radio" name="q21" value="23"><br>
        d. &ltu&gt<input type="radio" name="q21" value="24"><br>

        <input type="submit" name="Submit">
    </body>
    </form>
</html>

<?php

if(isset($_POST['Submit']))
{
   $a11=$_POST['q11'];
   $a22=$_POST['q21'];

   $a1=11;
   $a2=22;

   $score=0;
   if($a1==$a11)
   {
       $score+=1;
   }
   if($a2==$a22)
   {
    $score+=1;
   }

   echo "<script> alert('Your Score is:",$score,"') </script>";

}

?>
