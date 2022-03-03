<?php
//fectch database data and display as table without any argument base::::
include_once('link.php');
$fetch="select * from mailname;";
$res=mysqli_query($link,$fetch);
?>
<html>
    <body>
      <table align="center" border="1">
          <tr>
              <th colspan="3"><h2>Record Details</h2></th>
          </tr>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mail Id</th>
              </tr>
          <?php
             while($rows=mysqli_fetch_assoc($res)){
          ?>  
              <tr>
                  <th><?php echo $rows['id'] ?></th>
                  <th><?php echo $rows['name'] ?></th>
                  <th><?php echo $rows['mail'] ?></th>
              </tr> 
          <?php 
             }
             ?>
       </table>
    </body>
</html>
