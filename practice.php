<?php
    function nexseed( $greeting ,$name){
        return $greeting. $name .'さん' ;
    }

    // nexseed ();

    echo '<br>' ;

    echo nexseed('おはよう' , 'seed') ;

    echo '<br>' ;

    function multiplication ($num1 , $num2){
        echo $num1 * $num2 ;
    }

    multiplication ( 1,2 ) ;

    echo '<br>' ;

    function average ($num3 , $num4 ){
        if( ($num3 + $num4) /2 >= 10 ){
            echo ($num3 + $num4) / 2 ;
        }elseif( ($num3 + $num4) / 2 < 10){
            echo '0' ;
        }
    }
    
    average ( 20, 30) ;

    echo '<br>' ;

    function shoppping ( $num5 , $num6){
        return $num5 - $num6 ;
    }

    

    echo shoppping (1000 , 500);

    echo '<br>' ;

    function smart ( $num7 , $num8){
        if($num7 >= $num8){
            echo $num7 ;
        }elseif($num7 < $num8){
            echo $num8 ;
        }
    }

    smart (9, 8) ;


