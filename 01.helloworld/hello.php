<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //hello world
    $a = "hello world";
    echo "hello" . $a;

    //array
    $arr = array("a","b","c");
    echo $arr[0];

    //addition
    $b = 60;
    $c = 70;
    echo $d = $b + $c;

    //echo is used to display on screen
    echo "<br>";

    var_dump($b); //tells data type

    echo "<br>";

    echo str_word_count($a); //wordcount

    echo "<br>";

    echo strtoupper($a); //upper case

    echo "<br>";

    //associated array
    $arrr = array( "a" => "1","b" => "2");
    echo $arrr["a"];
    echo $arrr["b"];
    print_r ($arrr);
    echo "<br>";

    //array on screen
    foreach($arrr as $a=>$b){
        echo $a . "is equal" .$b . "<br>";
    }


    //if else condition
    $var = 18;
    if($var == 3){
        echo ("hi");
    }
    else{
        echo("y");
    }

    for($i=0; $i<4;$i++){
        echo ("HI".$i);
    }


    ?>
</body>
</html>