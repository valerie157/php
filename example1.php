<?php
// Declare and assign a variable named $deposit with a value of 5000

//float//
$deposit = 5000.00;
//integer//
$age =20;
//string//
$phone="123";
$msg = "John,1245373,20";
//boolean//
$statement= true;
if($statement){
    echo "Success";
}else{
    echo"Failed";
}

echo "<br>";
// Display information about the $deposit variable (its data type and value)
var_dump($deposit);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($phone);
echo "<br>";
var_dump($statement);
var_dump($msg);

$exploded_msg = explode(",", $msg);
var_dump($exploded_msg);

$name = $exploded_msg[0];
$id = $exploded_msg[1];
$age=$exploded_msg[2];

echo" Name :{$name}, ID: {$id}, AGE:{$age}";

//array//
//types of arays//
//indexed array//
$students = ["John","Mary","Isaac","Mitchelle"];
var_dump($students);
//associative array//
$user_input = array("username"=> "John", "email" =>"john@gmail.com","password"=>"John$$123");
var_dump($user_input);

//null//
$cart= null;
var_dump($cart);

//class//
class Student{
    public $age =20;
}
$student = new Student();//creating  an object//
var_dump($student);

//resource//
$file = fopen('example.txt' , 'r');
var_dump()
?>

