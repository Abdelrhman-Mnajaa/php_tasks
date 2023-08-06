<!-- 1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number 
 -->



 <?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }

$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>
