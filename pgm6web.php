<?php
    $fp=fopen("count.txt", "r");
    $count=fread($fp,10);
    fclose($fp);

    $count=$count+1;
    echo"<p>Page Views : ".$count;"</p>";
    
    $fp=fopen("count.txt", "w");
    fwrite($fp,$count);
    fclose($fp);
?>
