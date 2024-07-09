<!DOCTYPE html>
<html>
   
<body>

<?php

/*
for ($x = 0; $x <=10; $x++) {
    echo "$x-";
  }
*/

    /*
    **********22222
    $sum = 0;
    for($x = 0; $x <=30; $x++) {
       
        $sum += $x;
        echo $sum;
      }
        */



for ($x = 0; $x <5; $x++) {
  echo "A ";
}

echo "<br>";
for($x=0;$x<5;$x++){
    if($x==3 || $x==4){
        echo "B ";
    }else{
        echo"A ";
    }
}
echo "<br>";
for($x=0;$x<5;$x++){
    if($x==3 || $x==4||$x==2){
        echo "C ";
    }else{
        echo"A ";
    }
}
echo "<br>";
for($x=0;$x<5;$x++){
    if($x==3 || $x==4||$x==2||$x==1){
        echo "D ";
    }else{
        echo"A ";
    }
}
echo "<br>";
for ($x = 0; $x <5; $x++) {
    echo "E ";
  }



/*
for ($x = 0; $x <5; $x++) {
    echo "1 ";
  }
  
  echo "<br>";
  for($x=0;$x<5;$x++){
      if($x==3 || $x==4){
          echo "2 ";
      }else{
          echo"1 ";
      }
  }
  echo "<br>";
  for($x=0;$x<5;$x++){
      if($x==3 || $x==4||$x==2){
          echo "3 ";
      }else{
          echo"1 ";
      }
  }
  echo "<br>";
  for($x=0;$x<5;$x++){
      if($x==3 || $x==4||$x==2||$x==1){
          echo "4 ";
      }else{
          echo"1 ";
      }
  }
  echo "<br>";
  for ($x = 0; $x <5; $x++) {
      echo "5 ";
    }
*/



/*
*****************55555
for($x=0;$x<5;$x++){
    if($x==0){
        echo 1;
    }else{
       
        echo 0;
    }
}
echo"<br>";
for($x=0;$x<5;$x++){
    if($x==1){
        echo 2;
    }else{
       
        echo 0;
    }
}
echo"<br>";
for($x=0;$x<5;$x++){
    if($x==2){
        echo 3;
    }else{
       
        echo 0;
    }
}
echo"<br>";
for($x=0;$x<5;$x++){
    if($x==3){
        echo 4;
    }else{
       
        echo 0;
    }
}
echo"<br>";
for($x=0;$x<5;$x++){
    if($x==4){
        echo 5;
    }else{
       
        echo 0;
    }
}
    */

        
/*
***************6666
    $sum = 1;
    for($x = 1; $x <=5; $x++) {
       
        $sum *= $x;
        echo $sum;
      }
    */   

    /////q77

/*
**************8
    $str="Orange csoding Academy";
    $count=0;
    for($i=0;$i<strlen($str);$i++)
    if($str[$i]==="c"){
        $count++;
        echo$count;
    }
    
*/


/*

//////////////////////99999
$rows = 6; 
$cols = 5;  

echo "<table border=`1` cellpadding='30px' cellspacing='0px'>";

for ($i = 1; $i <= $rows; $i++) {
  echo "<tr>";
  echo"<hr>"; 
  for ($j = 1; $j <= $cols; $j++) {
    $content = $i * $j; 
    echo "<td>$content</td>"; 
  }
  echo "</tr>"; 
}

echo "</table>"

*/



/*
------10
for($i=0;$i<50;$i++){

   if(($i%3==0) && ($i%5==0)){
    echo "fizz buzz";
    echo"<br>";
   }elseif($i%3==0 ){
    echo "fizz";
   }
}
*/





/*
---------------11   11  11  111
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
  $count = 1; 
  echo "<br>"; 

  for ($j = 1; $j <= $i; $j++) {
    echo $count++ ;

  }  for ($j = 2; $j <= $i; $j++) {
    echo $count++ ;

  }
  echo "<br>"; 
}
  */


/*
echo"&nbsp;&nbsp;&nbsp;";
for ($x = 0; $x <2; $x++) {
    echo "A";
  }
  
  echo "<br>";
  for($x=0;$x<2;$x++){
      if($x==1){
        echo"&nbsp;&nbsp;&nbsp;";
          echo "B";
      }else{
        echo"&nbsp;&nbsp;";
          echo"A";
      }
  }
  echo "<br>";
  for($x=0;$x<3;$x++){
      if($x==2){
        echo"&nbsp;&nbsp;&nbsp;";
          echo "C ";
      }elseif($x==1){
        echo"&nbsp;&nbsp;&nbsp;";
          echo"B ";
      }else{
        
        echo"A        ";
      }
  }
  echo "<br>";
  for($x=0;$x<4;$x++){
      if($x==3 ){
        echo"&nbsp;&nbsp;&nbsp;";
          echo "D ";
      }elseif($x==2){
        echo"&nbsp;&nbsp;&nbsp;";
          echo"C ";
      }elseif($x==1){
        echo"&nbsp;&nbsp;&nbsp;";
        echo"B ";
    }else{
        echo"A";
    }
  }

  echo "<br>";

  for($x=0;$x<5;$x++){
if($x==4){
    echo"E";
}
      elseif($x==3 ){
          echo "D ";
      }elseif($x==2){
          echo"C ";
      }elseif($x==1){
        echo"B ";
    }else{
        echo"A";
    }
  }
    */
    















/*
***********1111
    $a=4;
    if ($a % 2 === 0 && $a % 3 === 1){
        echo "this is not prime number";
    }else{
        echo"this is prime number";

    }
        */



/*
************22
        echo strrev("Hello World!");
*/


/*
*************3333*
$str="hello im osama";
if($str==strtolower($str)){
    echo "the string is lowercase";
}else{
    echo"the string is not lower case";
}

*/


/*


*********************4444445555555
$a=10;
$b=20;
echo "$a ","$b";
echo "<br>";
$c=$a;
$a=$b;
$b=$c;
echo "$a ","$b"

*/

/*
*************666
$num=407;

// 4^3+0^3+7^3=407

if (4**3 + 0**3 + 7**3 == $num){
    echo" is a  armstong number";

}else{
    echo "is not a armstorng number";
}
    
*/
/*
********************7777

$example = "Eva, can i see bees in a cave?";
echo "Example input : " . $example . "<br>";

function isPalindrome($str) {
    $cleanString = strtolower(preg_replace('/[^a-zA-Z]/', '', $str));
    $reveredStr = strrev($cleanString);

    if ($cleanString == $reveredStr) {
        return "Expected Output : Yes, it is a palindrome.";
    } else {
        return "Expected Output : No it isn't a palindrome.";
    }
}

echo isPalindrome($example);


*/

/*
$example = [1, 2, 5, 4, 4, 8];
$hashMap = [];
for ($i = 0 ; $i < count($example) ; $i++) {
    if (!in_array($example[$i], $hashMap)) {
        $hashMap[] = $example[$i];
    }
}
echo "[" . implode(", ", $hashMap) . "]" ;
*/
?>  






</body>
</html>


