<?php
echo "Question one";
echo "<br>";
$colour=array('red', 'white','green');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colour[0] carpet, the $colour[2] lawn, the $colour[1] house, 
the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<br> ";
echo "--------------";
/////////////////////////////////////////////

echo "<br>";
echo "Question two";

$colors = array('white', 'green', 'red') ;
echo " <ul> ";
foreach ($colors as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";

echo "<br> ";
echo "--------------";

/////////////////////////////////////////////
echo "<br>";
echo "Question three";
echo "<br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
  "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 


  foreach ($cities as $country =>$capital){
  echo "The capital of $country= > $capital";
  echo "<br>";


  }
  echo "<br> ";
  echo "--------------";
  
/////////////////////////////////////////////
echo "<br>";
echo "Question four";
echo "<br>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset ($color) ; // return first element of array
echo "<br> ";
echo "--------------";
  /////////////////////////////////////////////
echo "<br>";
echo "Question five";
echo "<br>"; 
//Original Array on which operations is to be perform 
  
$original_array = array( '1', '2', '3', '4', '5' ); 
  
echo 'Original array : '; 
foreach ($original_array as $x)  
{ 
echo "$x "; 
} 
  

  
//value of new item 
$inserted_value = '11'; 
  
  
$position = 4; 
  
//array_splice() function  
  
array_splice( $original_array, $position, 0, $inserted_value );  
  
echo "After inserting $inserted_value in position $position is  : ";  
foreach ($original_array as $x)  
{ 
echo "$x "; 

}

echo "<br> ";
echo "--------------";

/////////////////////////////////////////////
echo "<br>";
echo "Question six";
echo "<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $asc => $fru){
echo " $asc =   $fru ";
echo "<br>";
}
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }
echo "</br>";
echo "--------------";



/////////////////////////////////////////////
echo "<br>";
echo "Question eight";
echo "<br>";


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$array3 =array_merge ($array1 , $array2) ; //merge two array
print_r ($array3);
echo "<br>";
echo "--------------";
    

/////////////////////////////////////////////
echo "<br>";
echo "Question nine ";
echo "<br>";

$arr = array("red","blue", "white","yellow");
 
$j = 0;

foreach( $arr as $element ) {
    $arr[$j] = strtoupper($element);
     
    $j++;
    
}
 
print_r ($arr);
echo "<br>";

foreach( $arr as $element ) // to display the content of arr
    echo $element . "<br>";
    echo "--------------";
    

/////////////////////////////////////////////
echo "<br>";
echo "Question ten ";
echo "<br>";

$arr = array("red","blue", "white","yellow");
 
$j = 0;
 
foreach( $arr as $element ) {
    $arr[$j] = strtolower($element);
     
    $j++;
}
 
// Display the content of array
foreach( $arr as $element )
    echo $element . "<br>";
    echo "--------------";

/////////////////////////////////////////////
echo "<br>";
echo "Question eleven ";
echo "<br>";
$j=0;
$new=array();
$array=array(range(200,250));
foreach($array[$j] as $elem)
{
    if($elem %4==0)
        {
        array_push($new, $elem);}
        $j++;
}

print_r ($new) ;
//////////////////////////////////////////////////
echo  "<br>";
echo "--------------";
echo "<br>";
echo "Question eleven ,another solution ";
echo "<br>";
$new=array();
for ($i=200; $i<250 ; $i++){
if($i%4==0){

array_push($new,$i);
}

}
print_r($new);
echo "--------------";
echo "<br>";
/////////////////////////////////////////////
echo "<br>";
echo "Question twelve ";
echo "<br>";

// $words =  array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $words);
// echo "the shortest array length is ". min($new_array) . "<br>" ;
// echo "the longest array length is ". max($new_array) . "<br> ";
// echo "--------------";
// echo "<br>";
$x;
$words =  array("abcd","abc","de","hjjj","g","wer");
// $longest = 0;
// $shortest=0;

// for($i = 0; $i < strlen($words); $i++)
// {
//   if($i > 0)
//   {
//     if(strlen($words[$i]) > strlen($words[$longest]))
//     {
//       $longest == $i;
//       echo $longest;
//     }
//     else if (strlen($words[$i]) < strlen($words[$longest])){
//         $shortest == $i;
//         echo $shortest;
//     }

//   }
  
// }
/////////////
$length = 0;
$longest = [];
$shortest=[];
$words =  array("ali","nancy","de","mazen","g","wer");
$lengthShort=strlen($words[0]);

foreach ($words as $element) {
    $newlength = strlen($element);
    
    if ($newlength > $length) {
        $longest = [$element];
        $length = $newlength;
    } else if ($newlength == $length) {
        $longest[] = $element;
   
}
if($newlength < $lengthShort){
$lengthShort=$newlength;
$shortest=[$element];
}
}
print_r($longest);
echo "<br>";
print_r($shortest);

echo "<br>";




/////////////////////////////////////////////
echo "<br>";
echo "Question 13 ";
echo "<br>";
$num=range(11,20);
shuffle($num); //inbuilt in method of random module 
for ($x=0; $x< 10; $x++)
{
echo $num[$x].' ';
}
echo "<br>";
echo "--------------";
echo "<br>";
/////////////////////////////////////////////
echo "<br>";
echo "Question 14 ";
echo "<br>";


function lowest_not_zero(Array $values) 
{
return min(array_map('intval', $values));//intval return integer value of variable\\map('',$arr)
}
print_r(lowest_not_zero(array(-1,0,-500,12,-100,1))."<br>");
echo "--------------";
echo "<br>";
////////////////////////////////////////////////////////loop///////////////////////////////////////////////////////////////////////////////////////////
echo "<br>";
echo "Question 1 loop ";
echo "<br>";

for ($x=1; $x<=10 ;$x++){
if ($x < 10){
    echo "$x-";

}else if ($x==10){
    echo "$x". "<br>" ;
    
}

}
echo "--------------";
echo "<br>";
//////////////////////////////////
echo "<br>";
echo "Question 2 loop ";
echo "<br>";

$sum=0;
for ($i=0 ; $i <=30 ;$i++){

$sum=$sum+$i;
}
echo $sum ;
echo "<br>";
echo "--------------";
echo "<br>";
//////////////////////////////////
echo "<br>";
echo "Question 3 loop ";
echo "<br>";
echo '<br>';
echo '<br>';

$str = 'A';
for ($i = 1; $i <= 5; $i++) {
    for ($x = 5 - $i; $x > 0; $x--)
        echo "A ";
    for ($y = 1; $y <= $i; $y++)
        echo "$str ";
    echo "<br>";
    $str++;
}
echo "<br>" . "<br>" . "<br>";


















echo "<br>";
echo "Question 3 another solution loop ";
echo "<br>";
echo '<br>';
echo '<br>';


for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo "A";
  }
  echo "<br>";
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      break;
    }
    echo "A";
  }
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      continue;
    }
    echo "B";
  }
  echo "<br>";
  for ($x = 0; $x <= 2; $x++) {
    if ($x == 2) {
      break;
    }
    echo "A";
  }
  for ($x = 0; $x <= 3; $x++) {
    if ($x == 3) {
      continue;
    }
    echo "C";
  }
  echo "<br>";

  for ($x = 0; $x <= 1; $x++) {
    if ($x == 1) {
      break;
    }
    echo "A";
  }
  for ($x = 0; $x <= 4; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "D";
  }
  echo "<br>";
  for ($x = 0; $x <= 5; $x++) {
    if ($x == 5) {
      break;
    }
    echo "E ";
  }

echo '<br>';
echo '<br>';


echo "--------------";
echo "<br>";
echo "<br>";

/////////////////////////////////////////////

echo "<br>";
//  Q number 5
echo '<br>';
echo 'Question 5 loop'.'<br>';

for ($i = 1; $i <= 5; $i++) {
    for ($x = 1; $x<= 5; $x++) {
        if ($i == $x) {
            echo " " . $i . " ";
        } else {
            echo " 0 ";
        }
    }
    echo "<br>";
}





echo "--------------";
echo "<br>";
echo "<br>";

/////////////////////////////////////////////






echo "<br>";
//  Q number 6
echo '<br>';
echo 'Question 6 loop'.'<br>';
$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo $factorial;

echo "<br>";
echo "--------------";

/////////////////////////////////////////////
echo "<br>";
echo "Question 7  loop ";
echo "<br>";
$number1=0;
$number2=1;
$count=10;
echo $number1 . "," . $number2 ."," ;
for($t=0; $t <=$count ;$t++)
{
$number3=$number1+$number2;
$number1=$number2;//112
$number2=$number3;//123
echo $number3 , "," ;


}

echo "<br>";
echo "<br>";



echo "--------------";

/////////////////////////////////////////////
echo "<br>";
echo "Question 8  loop ";
echo "<br>";
$string = "Orange Coding Academy";
$count = 0 ;

$array = str_split($string, 1);
// print_r ($array);
// $array = explode('', $string);
for($b = 0 ; $b < count($array) ; $b++){
    if ($array[$b] =='c'  or $array[$b] == 'C' ){
        $count+=1 ;
    }
}echo $count ;
echo '<br>';



echo "--------------";

//////////////////////////////////
echo "<br>";
echo "Question 9 loop ";
echo "<br>";
echo "<br>";

echo "<table border =\"3\" style =' border-collapse: collapse'>";

for ($i=1 ; $i<=6 ; $i++){
echo "<tr>";
for($j=1 ; $j<=5 ; $j++){

    echo "<td>   $i*$j = "  .$i*$j. "</td>";
}
echo "</tr>";
}

echo '<br>';
echo '<br>';

echo"</table>";

//////////////////////////////////


echo "--------------";
echo "<br>";
echo "Question 10 loop ";
echo "<br>";
echo "<br>";

for ($i=1 ; $i <= 50 ; $i++){
if ($i%3==0 & $i%5==0){
    echo " FizzBuzz"."  " ;
}

elseif($i %3==0){

    echo "Fizz"."  " ;
}
elseif($i%5==0){
    echo "Buzz" ."  " ;
} 
else {
    echo $i."  " ;
}


}
echo "<br>";
echo "--------------";
echo "<br>";
/////////////////////////////////////////////
echo "<br>";
echo "Question 11 loop ";
echo "<br>";

$numberr = 1; 
for ($o= 1; $o <=5 ;$o++){


    for($l = 0 ; $l <$o ; $l++){
        echo '&nbsp;'.$numberr;
        $numberr +=1 ;
    }
    echo "<br>";
}

echo "<br>";
echo "--------------";
echo "<br>";
/////////////////////////////////////////////
echo "<br>";



for ($v=1 ; $v <=5 ;$v++){


    for($x = 1 ; $x <=(5-$v) ; $x++){
        echo '&nbsp; &nbsp;';
    }
   
    for($y =1 ; $y <=(2*$v-1); $y++){
        $char ="A";
        // $char+=$y
        // echo ++$char;
        echo chr(65 + $y - 1)." ";
        
        //  $str = 'a';
        // echo ++$str;
     }

    echo "<br>";
}

for ($v=4 ; $v >=0 ;$v--){


    for($x = 1 ; $x <=(5-$v) ; $x++){
        echo '&nbsp; &nbsp;';
    }
    for($y =1 ; $y <=(2*$v-1); $y++){

        // $str = 'a';
        // echo ++$str;
        // echo ++$char;
        //  $char ="A";
        // $char+=$y
        // echo ++$char;
         echo chr(65 + $y- 1)." ";
        
    }

    echo "<br>";
 

}

/////////////////////////////////
echo "------------------------------";
echo "<br>";
echo " <h2>indexed array</h2>";
echo "<br>";
echo "The index can be assigned automatically ";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

echo "<br>";
echo "<br>";
echo "The index can be assigned manually ";

$cars[0] = "Mercedes"; 
echo "<br>";
var_dump($cars);
echo "<br>";
echo "<br>";
/////////////////////////////////
echo "------------------------------";
echo "<br>";
echo " <h2>Associative array</h2>";
echo "<br>";
$ages = array("Ali"=>22, "Ahmed"=>32, "Noor"=>28);
echo var_dump ($ages);
echo "<br>";
echo "<br>";
/////////////////////////////////
echo "------------------------------";
echo "<br>";
echo " <h2>Multidimensional Arrays</h2>";
echo "<br>";
$contacts = array(
    array(
        "name" => "Ali noor",
        "email" => "alinoor@mail.com",
    ),
    array(
        "name" => "emran odeh",
        "email" => "emran.odeh@mail.com",
    ),
    array(
        "name" => "Hala amjad",
        "email" => "halla.amjad@mail.com",
    )
);
echo "halla amjad Email is: " . $contacts[2]["email"];
echo "<br>";
echo "<br>";
echo "<br>";

?>