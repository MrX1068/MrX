<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");
    fwrite($file,"--------------------------------------------------- \n");
    echo date_default_timezone_set("Asia/Kolkata");
    fwrite($file,"The Message sent " . "Date : " . date("**** d-M-Y ****") ." and Time : " .date("**** H:i:s ****") . "\n");
    fwrite($file,"Name : ");
    fwrite($file, $name ."\n");
    fwrite($file,"Email : ");
    fwrite($file, $email ."\n");
    fwrite($file,"Mobile Number : ");
    fwrite($file, $phone ."\n");
    fwrite($file,"comments : ");
    fwrite($file, $comments ."\n");
    fwrite($file,"--------------------------------------------------- \n");
    fclose($file);
    header("location: index.html");
 ?>
