<?php
    //Using the caret (^) position anchor
    $pattern = "/^j/i";
    $j = array("Jack Ma","Evelyn Presley","John Carter");
    $lists = preg_grep($pattern,$j);
    foreach($lists as $list){
        echo $list . "<br/>";
    }

    echo "...............<br/>";

    //Using the dollar sign ($) position anchor
    $pattern2 = "/m$/i";
    $m = array("liam","Derek",);
    $lists2 = preg_grep($pattern2,$m);
    foreach($lists2 as $list2){
        echo $list2 . "<br/>";
    }

    echo "...............<br/>";

    //using the word boundary \b
    $lists3 = preg_grep("/\binfo/",array("telegraph","information","millitary_info","infograph"));
    foreach($lists3 as $list3){
        echo $list3 . "<br/>";
    }

    echo "...............<br/>";
    
    //using quantifiers
    $lists4 = preg_grep("/p{2,3}/",array("peter piper","pp","ppp","aaron","pepper"));
    foreach($lists4 as $list4){
        echo $list4 . "<br/>";
    }

    echo "...............<br/>";

    $str = preg_replace("/\s/","_","Hello there");
    echo $str . "<br/>";

    $pattern3 = "/\n/";
    $rep = preg_replace($pattern3," ","Hello world");
    echo $rep;
?>