<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1</title>
</head>
<body>
    <!-- <?php 
        echo "<br/> ------- Q2 ----------- <br/>";
        $x = "PostgerSQL";
        $y = "MySql";
        $z = & $x;
        $x = "PHP 5";
        $y = &$x;

       /* echo "X = ". $x ." Y =  ". $y ." Z = ". $z; 
        echo "<br/> ------------------------ <br/>";*/

        echo "X = ". $GLOBALS['x'] ." Y =  ". $GLOBALS['y'] ." Z = ". $GLOBALS['z'];
        echo "<br/> ------- Q4 ----------- <br/>";
        $nbr = 21;
        if($nbr % 3 == 0 && $nbr % 7 == 0 )
            echo $nbr . 'est un multiple de 3 et 7 !!';

        echo "<br/> ------- Q4 ----------- <br/>";
        $pair = $count = 0;
        $rep = false;
        $result = ' ';
        do {
            $rand = rand(0,10);
            if( $rand % 2 == 0 & $pair < 2 & $rand != 0 ) {
                $pair ++;
                $result .= ' '.$rand;
            }
            elseif( $rand % 2 != 0  & $pair == 2 & $rand != 0 ) {
                $result .= '  '.$rand ;
                $rep = true;
            }
            $count++;
        } while($rep == false);

        echo 'Les nombres est: ' .$result .'<br> Le nomber de tirage est : ' .$count;

        echo "<br/> ------- Q5 ----------- <br/>";

        $nbr2 = $nbr2 = 3;

        if( $nbr2 == $nbr2 ) {
            $result = pow(($nbr2 * 2),2);

            echo    '<ul>
                        <li> <b>Résultat : </b></li>
                        <li>'. $nbr2 .'</li> 
                        <li> + </li> 
                        <li>'.$nbr2.'</li>
                        <li> * </li> 
                        <li> 3  </li>
                        <li> = </li>
                        <li>'. $result .'</li>
                    </ul>';
        }

        echo "<br/> ------- Q6 ----------- <br/>";
        //init
        $array = [];
        for( $i = 11; $i < 37; $i++ ) {
            $array +=  [$i => chr($i + 54) ];
        }
        //affiche 
        foreach( $array as $item => $val) {
            echo 'Index de ' . $val .' est : ' . $item .' <br/>';
        }
        // echo ' ----------------------- <br/>';
        // for( $j = 11; $j < 37; $j++ ) {
        //     echo 'Index de ' . $j .' est : ' . $array[$j] .' <br/>';
        // }
        echo "<br/> ------- Q7 ----------- <br/>";
        $color = array('white','green','blue','red');
        foreach( $color as $item) 
            echo $item . ' - ';
        echo "<h3 style='color:red;'> Les couleurs par order alphabétique: </h3> <ul>";
        sort($color);
        foreach( $color as $item) 
            echo '<li>'. $item .'</li>';
    ?> -->

    <?php
        echo 'PHP_SELF : '. $_SERVER['PHP_SELF'];
        echo "<br>";
        echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME'];
        echo "<br>";
        echo 'HTTP_HOST : '. $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo 'HTTP_REFERER : '. $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo 'HTTP_USER_AGENT : '. $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo 'SCRIPT_NAME : '. $_SERVER['SCRIPT_NAME'];
    ?>

</body>
</html>