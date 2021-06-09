<?php
function test($a,$b) 
{	
		$n=array(10,20,30,40,50,60,70,80,90,100);
		
		
		if(  array_search($a,$n))
		{
			echo "a is  found in array\r\n" ;
		}
		else 
		{
			return 0;
		}
		echo "<br>";
		echo "<br>";
		
		
		if (  array_search($b,$n))
		{
			echo "b is found  in array\r\n" ;
		}
		else 
		{
			return 0;
		}
		echo "<br>";
		echo "<br>";
		
		
		if($a>0 && $b>0)
		{
			echo" both  a & b numbers are positive\r\n";
		}
		else
		{
			return -1;
		}
		echo "<br>";
		echo "<br>";

		
		if($a<$b)
		{
			echo"b is bigger than a \r\n";
		}
		else
		{
			return 0;
		}
		echo "<br>";	
		echo "<br>";

}
test(20,50);

?>