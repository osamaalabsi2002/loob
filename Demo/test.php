<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php



/*
---------------1111
$x = "Hello World!";
echo strtoupper($x);
echo"<br>";


$y = "HELLO!";
echo strtolower($y);
echo"<br>";


$z="osama";
echo ucfirst($z);
echo "<br>";

$a="hello my name is osama";
echo ucwords($a);
*/




/*
-----------------22222
$sting="12345678";
$y=substr($sting,0,2);
$m=substr($sting,2,2);
$s=substr($sting,4,6);

echo "$y:", "$m:","$s";

*/




/*
-------------3333
$str = "hello i am full syack developer at orange academy";
$str2 = "hellooo";

if (strpos($str2, $str) == false) {
  echo "word is not found";
} else {
  echo "word is  found";
}



*/





/*
----------------44444
$url = "www.orange.com/index.php";


$path = parse_url($url, PHP_URL_PATH);


$filename = basename($path);

echo $filename;


*/

/*
----------55555
$email = "osamaalabsi@gmail.com";

$username = strstr($email, '@', true);

if ($username) {
  echo "Username: " . $username;
} else {
  echo "Invalid email address";
}
*/

/*
----------------66666
$string="hello i am full syack developer at orange academy";
$len=strlen($string);
echo $len;
echo $string[48];
echo $string[47];
echo $string[46];
*/


/*
----------7777

 $givenString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            
function generateRandomPassword($string, $length) {
$password = '';
$stringLength = strlen($string);
                
$randomBytes = openssl_random_pseudo_bytes($length);
                
 for ($i = 0; $i < $length; $i++) {
 $index = ord($randomBytes[$i]) % $stringLength;
 $password .= $string[$index];
} return $password;
 } 
 $passwordLength = 10;
$randomPassword = generateRandomPassword($givenString, $passwordLength);
echo "The random password is: $randomPassword";
*/




/*
-------------8888
$x = "Hello World!";
echo str_replace("World", "c++", $x);
*/


/*
----------9999999
$str1 = 'dragonbol';
$str2 = 'dragonbal';

for ($i = 0; $i < strlen($str1) && $i < strlen($str2); $i++) {
  if ($str1[$i] != $str2[$i]) {
    echo "First difference at position $i: $str1[$i] vs $str2[$i]";
  
  }
}

*/

/*
----------10
$d = array("red", "green", "blue");
echo var_dump($d)

*/

/*
-------------11
$inputLetter = 'a';

$asciiValue = ord($inputLetter);

if (($inputLetter >= 'a' && $inputLetter <= 'y') || ($inputLetter >= 'A' && $inputLetter <= 'Y')) {
    $nextAsciiValue = $asciiValue + 1;
} elseif ($inputLetter == 'z') {
    $nextAsciiValue = ord('a');
} elseif ($inputLetter == 'Z') {
    $nextAsciiValue = ord('A');
} else {
    echo "Invalid input letter.";
    exit;
}

$nextLetter = chr($nextAsciiValue);

echo "The next letter after '$inputLetter' is '$nextLetter'.";
*/



/*
---------12
$originalString = "The brown fox";
$insertString = "   quick";
$position = 3;

if ($position > strlen($originalString)){
    $position = strlen($originalString);
}

$part1 = substr($originalString, 0, $position);
$part2 = substr($originalString, $position);

$newstring = $part1 . $insertString . $part2;

echo $newstring;

*/





/*

----------13


$number = '000065722.24';


$trimmedNumber = ltrim($number, '0');

echo $trimmedNumber;
*/



/*
---------14
$string = "This is a test string.";
$remove = "test";
$new_string = str_replace($remove, "", $string);

echo $new_string;
*/


/*
--------15
$originalString = "The quick brown fox jumps over the laze fox - - - ";

$newstring = str_replace('-', '', $originalString);
echo $newstring;
                    

                    
*/             


    /*                
           --------16       
$originalString = "Hello @123 world!@#$%^&&*()";
                    
                   
$newstring = preg_replace('/[^a-zA-Z0-9]/', '', $originalString);
                    
                   
echo $newstring;
                    
                  
*/
                    
                    
/*
----------17
                    
$originalString = "The quick brown fox jumps over the lazy dog";

$wordArray = explode(' ', $originalString);
                    
$fivewords = array_slice($wordArray, 0, 5);
$result = implode(' ', $fivewords);
echo $result;
                    
*/
                    

       /* 
       ------18            
$originalNumber = "2,543.32";
$cleanNumber = str_replace(',', '', $originalNumber);
echo $cleanNumber;

   */
  
   
   /*
--------------19
                                        
$start = ord('a');
$end = ord('z');
                    
for($i = $start; $i <= $end; $i++){
$letters = chr($i);
echo $letters ." ";

}

*/

/*
---------11111
$year = 2021;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
    echo "this year $year is leep";
}else{
    echo "$year is not leep year";
}

*/


/*
-------2222
$temperature = 5 ;

function checkSeason($temp){
if ($temp<20){
    return "winter";

}else{
    return "summer";
}
}
$season = checkSeason($temperature);
echo "the season is :$season";

*/

/*

--------------33333
$number1 = 2;
$number2 = 1;

function calculateSmOrtriple($num1, $num2){
    $sum = $num1+$num2;

    if($num1==$num2){
        return 3*$sum;
    }else{
        return $sum;
    }
}

$result =calculateSmOrtriple($number1, $number2);


echo "the result is : $result";

*/






/*
------44444
$number1 = 1;
$number2 = 15;
                    
function checkSum($num1, $num2){
$sum = $num1+$num2;
if ($sum ==30){
return $sum;
}else{
return false ;
}
}
                    
$result = checkSum($number1, $number2);
                    
if($result !== false){
echo "the sum of the numbers is : $result";
}else{
echo "False ";
}
                    
*/
                    
/*
---5555555
                    
$number = 20;
$divisor = 2;

function isMultiple($num, $divisor){
if($num % $divisor ==0){
return true;
}else{
return false;
}
}
$result = isMultiple($number, $divisor);
                    
if($result==true){
echo "$number is a multiple of $divisor";
                    
}else{
echo "$number is not multiple of $divisor";
                    
}
*/



/*
------------------------66666

$int=22;
if($int>=20 && $int<=25){
    echo "num is true";
}else{
    echo "num is fulse";
}
*/

/*
-------------------777777
$num1 = 10;
$num2 = 20;
$num3 = 25;

$largest = max($num1, $num2, $num3);

echo "Largest number: $largest";

*/



/*
----888


$units = 100;

function calculateBilll($units){
    $bill = 0;

    if ($units <= 50){
        $bill *2.5;
    }elseif($bill <= 150){
        $bill = (50*2.5)+ (($units-50)*5);
    }elseif($bill <= 250){
        $bill = (50*2.5)+(100*5)+(($units-150)*6.2);
    }else{
        $bill = (50*2.5)+(100*5)+(100*6.2)+ (($units-250)*7.5);
    }
    return $bill;
}

$result = calculateBilll($units);

echo "your bill is : $result";
echo "<br>";
echo "The total electricity bill for $units units is: " . number_format($result, 2) . " JOD";

echo '<br>';
echo '<br>';


*/

/*
-------9999

 if (isset($_POST['calculate'])) {
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];
$result = '';
                
if ($operation == 'add') {
$result = $number1 + $number2;
} elseif ($operation == 'subtract') {
$result = $number1 - $number2;
} elseif ($operation == 'multiply') {
$result = $number1 * $number2;
} elseif ($operation == 'divide') {
if ($number2 != 0) {
$result = $number1 / $number2;
} else {
$result = 'Error! Division by zero.';
}
}
echo "<h3>Result: $result</h3>";
}
*/



/*

-----------------------10
$age=40;
if($age >= 18){
    echo "your age:" ,"$int","you can vote";
}else
{
    echo"you cannot vote";
}

*/


/*

-------------------11
$num1=0;
if($num1>0){
    echo "the number is postive:","$num1";
}elseif ($num1<0){
    echo "the number isnegtive:","$num1";
}else{
    echo "the number is zero:","$num1";
}
    */


-----------12

    $score = [50, 80, 90, 66, 75];

function calculateScore($score){
    $total = array_sum($score);
    $count = count($score);
    $average = $total / $count;
    return $average;
}
function determineGrade($average) {
    if($average >= 90){
    return "A";
}elseif($average >=80){
    return "B";
}elseif ($average >=70){
    return "C";
}elseif($average >=60){
    return "D";
}else{
    return "F";
}
}


$average = calculateScore($score);

$grade = determineGrade($average);
echo "The grade is: $grade";



l;klj





//echo "hello php";
//print "hello c++";

//print 'hello c#';
//echo "<br>"; 
//print"i am porgramer";


/*
$name = "Bob";

print "hello ${name}";
*/


/*
$x = "ahmad";
echo 'Hello $x';
*/


//echo strlen("osama !");



//echo str_word_count("Hello ali!");


//$osa="Hello osama world!";
//echo strpos($osa, "world");


/*
$x = 5;
echo 'The price is $x';
*/


/*



*/
/*
$x = "Hello World!";
echo str_replace("World", "c++", $x);
*/



?>


</body>
</html>