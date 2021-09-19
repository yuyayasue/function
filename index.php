<?php
    echo 'Hello' ;

    echo '<br>' ;

    // 宣言文

    function hello(){
        echo 'こんにちは';
    }

    // 関数は呼び出す操作が必要 (呼び出す)
    hello();

    function greeting ($word){
        echo $word;
    }

    greeting('おはよう');
    // hello();
    greeting('Hello');

    echo '<br>' ;




    function input_name($name){
        echo '私の名前は' . $name .'です' ;
    }

    input_name('安江');

    echo '<br>' ;

    function calc($num1 , $num2){
        echo $num1 * $num2 ;
    }

    calc( 100 , 200);

    echo '<br>' ;

    function calc1($num3){
        return $num3 . '円です' ;
    }
    
    echo calc1( 100 );

    echo '<br>' ;
    //  echo $word ;

    function tax ($num4){
       return $num4 * 1.1 ;
    }

    echo 'みかんは' . tax( 120 ) . '円です。';