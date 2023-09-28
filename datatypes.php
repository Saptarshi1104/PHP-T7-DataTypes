<?php
$name = "Saptarshi";
$income = 200;

/*
Data Types:
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

//String: Sequence of Characters
$name = "Saptarshi";
$friend = 'Mew';
echo "The friend of $name is $friend";

//Integer: Non decimal numbers
$income = 455;
$debts = -655;
echo "<br> $income";
echo "<br> $debts";

//Float: Decimal Number
$income = 344.5;
$debts = -45.5;
echo "<br> $income";
echo "<br> $debts";

//Boolean: Can be either true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x); //Var Dump Function is used to print the value of the variable with type like: type(value)
echo "<br>";
echo var_dump($is_friend);

//Object: Instances of Classes
//Employee is an class, I can be an object

//Array: Used to store multiple values in a single variable
$friends = array("a", "b", "c", "d");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
//echo $friends[4] will throw an error as the size of the array is 3

//Null
$name = NULL;
echo "<br>";
echo var_dump($name);
?>