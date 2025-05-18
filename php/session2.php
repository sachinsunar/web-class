<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
          //echo session variables that were set on previous page
          echo "favicon color is" .$_SESSION["favcolor"]. ".<br>";
          echo "favorite animal is" .$_SESSION["favanimal"]. '.';
        ?>
    </body>
</html>
