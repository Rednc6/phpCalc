<?php
session_start();

$operatorType = $_POST['option'];
$fnumber = $_POST['fnumber'];

$numberArray = explode(" ", $fnumber);
calc($numberArray, $operatorType);

function calc($numbers, $type){
    if ($type == 'add'){
        $_SESSION['sum'] = array_sum($numbers);
    }
    if ($type == 'substract'){
        $array = $numbers;
        $result = $array[0];
        for ($i = 1; $i < count($numbers); $i++){
            $result -= $numbers[$i];
        }
        $_SESSION['sum'] = $result;
    }

    header('location:index.php');
}
?>
