<?php 
/* NOTE: to see your output in the console, 
   follow your output with a new line "\n" 

   2nd NOTE: This is only for Repl. 
   Do not make a habit of adding the new line character 
   in your PHP projects.

   Put your code below each question comment as shown with  
   the example.
*/

/* EXAMPLE: 
   01: output Hello World! as string data 
*/
echo "Hello World!";
echo "\n";

/* 02: create a variable called name and set it equal to "Dave\n" 
   Output the variable 
*/
$name = "Dave\n";
echo $name;

/* 03: create a variable called num and set it equal to 1984 
   Output the variable 
*/
$num = 1984;
echo "$num \n";

/* 04: create a variable called dbl and set it equal to 99.956 
   Output the variable 
*/
$dbl = 99.956;
echo "$dbl \n";

/* 05: create a variable called bool and set it equal to true 
   Output the variable - might not be what you expect!
*/
$bool = true;
echo "$bool \n";

/* 06: create a variable called band and set it equal to "Van Halen"
   Concatenate band and the num variable you created above to  
   output the phrase: 
   "1984 is my fave Van Halen album."
*/
$band = "Van Halen";
echo $num." is my fave ".$band." album.\n";

/* 07: create an array called names.
  Put the names "Jane", "John", and "Jody" in the array 
  Output "John" from the array 
*/
$names = array("Jane", "John", "Jody");
echo "$names[1] \n";

/* 08: define a constant variable called COURSE. 
   Assign COURSE the value of "INF653"
   Output the constant variable 
*/
$COURSE = "INF653";
echo "$COURSE \n";

/* 09: Use a compound operator to add 16 to the 
   variable num and output the new value 
*/
$num += 16;
echo $num."\n";

/* 10: Use the decrement operator to subtract 1 from 
   the variable num and output the new value
*/
echo --$num."\n";