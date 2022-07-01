<?php
// $full_name = array( );

// $full_name["David"] = "Gilmour";

// $full_name["Nick"] = "Mason";

// $full_name["Roger"] = "Waters";

// $full_name["Richard"] = "Wright";
// // print values of array
// foreach ($full_name as  $key_value){
   
//     echo(" Value = " .$key_value)."<br>" ;
    
// }
// // print keys of array
// foreach ($full_name as $key_name => $key_value) {

//     print "Key = " . $key_name . "<BR>";
    
//     }
// // print keys and values of array
// foreach ($full_name as $key_name => $key_value) {

// print "Key = " . $key_name ."&nbsp"."&nbsp" ." Value = " . $key_value . "<BR>";

// }
// // Get a Random Key from a PHP Array
// $numbers = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

// $random_key = array_rand($numbers, 1);

// print $random_key;

// // using count function in for loop (length)
// $seasons = array("Autumn", "Winter", "Spring", "Summer");

// $array_count = count($seasons);

// for ($key_Number = 0; $key_Number < $array_count; $key_Number++) {

// print  $seasons[$key_Number]."<br>";}

// // Splitting a line of text in PHP


// $text_line = "Poll ,number ,1, 1500, 250, 150, 100, 1000";

// $text_line = explode(",",$text_line);

// for ($start=0; $start < count($text_line); $start++) {

// print $text_line[$start] . "<BR>";
// }
// $my_name= "Tanu priya Pathak";
// $my_name_new= explode(" ",$my_name);
// echo($my_name)."<br>";
// foreach ($my_name_new as  $key_value){
   
//     echo( $key_value) ;
    
// }
// foreach ($my_name_new as  $key_value){
   
//     echo"<br>".( $key_value) ;
    
// }


// // Joining text in PHP
// $seasons = array("Autumn", "Winter", "Spring", "Summer");

// $new_textline = implode( ",", $seasons );

// print($new_textline);

// functions
// $error_text = "Error message";

// display_error_message($error_text);

// function display_error_message($error_text) {

// print $error_text;

// }

// // Getting values out of PHP functions
// $total_spent = 120;

// $order_total = calculate_total($total_spent);

// print $order_total;

// function calculate_total($total_spent) {

// $discount = 0.1;

// if ($total_spent > 100) {

// $discount_total = $total_spent - ($total_spent * $discount);

// $total_charged = $discount_total;

// }

// else {

// $total_charged = $total_spent;

// }

// return $total_charged;

// }

// By Ref, By Val
// $Variable_Value = 10;

// print "Before the function call = " . $Variable_Value . "<BR>";

// example($Variable_Value);

// print "After the function call = " . $Variable_Value;
// echo"<br>";
// example_new($Variable_Value);

// print "After the new function call = " . $Variable_Value;
// // by value
// function example($Variable_Value) {

// $Variable_Value = $Variable_Value + 10;

// print "Inside of the function = " . $Variable_Value . "<BR>";
// }

// // by ref
// function example_new(&$Variable_Value) {

//     $Variable_Value = $Variable_Value + 10;
    
//     print "Inside of the new function = " . $Variable_Value . "<BR>";
    
// }


// bubble sort in php
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr = array(1,3,2,8,5,7,4,0);

print("Before sorting");
print_r($arr);

$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
print_r($arr);
?>