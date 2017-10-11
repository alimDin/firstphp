<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	

    $date1 =  date('Y/m/d', time());
    echo "The value of \$date: ".$date."<br>";

    if
           (strtotime($date) < strtotime($dtar))
    	 {
            echo "The Past!";
         }
    elseif (strtotime($date) == strtotime($dtar)) 
         {
            echo "Same Day";
         }
    else
         {
            echo "The Future!";
         }
   
  
       
       $i= strpos($date1, '/');
       $j= strrpos($date1, '/');

       echo "The / appears on position".$i." & ".$j;
       
       

?>