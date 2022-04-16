<?php
    $file = fopen('subscribers.txt', 'a');
    fwrite($file, $_POST["name"]." : ".$_POST['email']."\n");
    fclose($file);
    header( 'Location: index.php' );
?>