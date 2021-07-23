<?php
echo "Calculate the length of an array:" . "<br>";
 $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
 echo "array long: " . count($arr) . "<br>";

echo "Move the first 4 elements of the array to the end of the array:" . "<br>";
for ($i = 0; $i < 4; $i++) {
    $res = $arr[$i];
    $arr[] +=$res;
}
array_splice($arr, 0, 4);
echo '<pre>';
var_dump($arr);
echo '<pre>';

echo "sum array 4.5.6 =". "<br>";
var_dump($arr [4] + $arr[5]  + $arr[6]);

//след часть

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];



$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];
echo "найти все элементы которые отсутствуют в первом массиве и присутствуют во втором :" . "<br>";
var_dump(array_diff_key($secondArr , $firstArr));

echo "найти все элементы которые присутствую в первом и отсутствуют во втором :". "<br>";
var_dump(array_diff_key($firstArr , $secondArr));


echo "найти все элементы значения которых совпадают :". "<br>";
$result_array = array_intersect_assoc($firstArr, $secondArr);
print_r($result_array);

echo "найти все элементы значения которых отличается ". "<br>";
$result1 = array_diff_assoc($firstArr, $secondArr);
print_r($result1);


$arrinarr = ['one' => 1, 'two' => ['one' => 1, 'seven' => 22, 'three' => 32,], 'three' => ['one' => 1, 'two' => 2,], 'foure' => 5, 'five' => ['three' => 32, 'foure' => 5, 'five' => 12,],];
echo "получить все вторые элементы вложенных массивов". "<br>";
//function for($arr) {
//    $i = 0;
//    foreach($arr as $k => $v) {
//        if(is_array) {
//            for($k);
//        } else {
//            if($i == 1) { // второй элемент массива
//                // solution
//            }
//        }
//        $i++;
//    }
//}
function arrSecond($arr) {
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)){
            $result[] = array_values($value)[1];
        }
    }
    return $result;
}
var_dump(arrSecond($arrinarr));
echo "получить общее количество элементов в массиве = ";
print_r(count($arrinarr, COUNT_RECURSIVE));
echo " ". "<br>";
echo "Получить сумму всех значений в массиве:" ;
$sum = 0;
array_walk_recursive($arrinarr, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum;