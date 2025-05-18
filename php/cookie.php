<?php
$_COOKIE_NAME ="username"
$_COOKIE_VALUE ='gita'

setcookie($cookie_name,$cookie_value);
?>

<html>
    <body>
        <?php
        if(isset($_COOKIE[$cookie_name]))
        {
            echo $_COOKIE[$_COOKIE_NAME];
        }
        else{
            echo "Cookie is not set";
        }
        ?>
    </body>
</html>