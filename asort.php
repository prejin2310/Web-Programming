<?php 

$students = array("Prejin", "Renjith", "Aromal", "Akshay", "Akash", "Arjun", "Aswin","Athul");
echo "<b>Normal Array : </b><br>";
print_r($students);
echo "<br><br> <b>Ascending Sort : </b><br>";
asort($students);
print_r($students);
echo "<br><br> <b>Descending Sort : </b><br>";
arsort($students);
print_r($students);

?>
