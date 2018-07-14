<?php
//Task1
$strHelloWorld = 'HelloWorld!';
echo strtoupper($strHelloWorld) . '</br>';

//Task2
$date = '18-02-1993';
echo date("Y.m.d", strtotime($date)) . '</br>';

//Task3
$strWords = 'html css php';
echo substr($strWords, 0, 4) . '</br>';
echo substr($strWords, 5, 3) . '</br>';
echo substr($strWords, 9, 3) . '</br>';
//Alternative solution
$str = 'html css php';
$delimeter = ' ';
$data = explode($delimeter, $str);
print_r($data) . '</br>';

//Task4
$date = '18.02.1993';
echo str_replace('.', '-', $date) . '</br>';

//Task5
$strWithDot = 'слова слова слова.';
echo trim($strWithDot, "\t.") . '.' . '</br>';

//Task6
$arrayByRange = range(1, 100);
echo array_sum($arrayByRange) . '</br>';

//Task 7
echo array_search(3, $arrayByRange) . ' - это индекс элемента со значением 3' . '</br>';

//Task 8
$arrayWithNumber = array(1,2,3);
$arrayWithLetters = array('a', 'b', 'c');
print_r(array_merge($arrayWithNumber, $arrayWithLetters)) . '</br>';

//Task 9
$arrayWithKeys = array('a' => 1, 'b' => 2, 'c' => 3);
print_r(array_keys($arrayWithKeys));
print_r(array_values($arrayWithKeys));

//Task 10
$array = array('a', 'b', 'c', 'b', 'a');
print_r(array_unique($array));
?>