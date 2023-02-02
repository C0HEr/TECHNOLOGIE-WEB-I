<?php 
    $fopen = fopen('Ex4.txt','a+');

    //echo readfile('Ex4.txt');
    //echo fread($fopen,"7");
    //echo nl2br(fread($fopen,filesize('Ex4.txt')));
    //echo fgets($fopen)." <br/>";
    file_put_contents('Ex4.txt',"Add content last \n",FILE_APPEND);
    //echo feof($fopen) ? "\n été atteinte" : "\n Non atteinte";

    /*while(!feof($fopen)) {
        echo fgets($fopen)." <br/>";
    }*/

    //echo feof($fopen) ? "\n été atteinte" : "\n Non atteinte";
   // fclose($fopen);
?>