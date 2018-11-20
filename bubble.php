<h1>Bubble Sorting</h1>
<?php

$sort= array(10,0,8,7,0,3,5);
echo "before Sorting array";
print_r($sort);

$temp=0;
for ($i=0; $i <count($sort); $i++) 
{ 

	for ($j=0; $j <count($sort)-1 ; $j++) 
	{ 
		if ($sort[$j]>$sort[$j+1])
		 {
			$temp=$sort[$j];
			$sort[$j]=$sort[$j+1];
			$sort[$j+1]=$temp;
		
		}
	}
}
echo "after sorting";
var_dump($sort);
?>