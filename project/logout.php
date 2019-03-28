
<?php
        SESSION_START();
        if(!$_SESSION["adhar"])
            {
                echo "please login first";
                 header('Location: renting.html');
                exit();
}
session_destroy();
header('Location: renting.html');
?>