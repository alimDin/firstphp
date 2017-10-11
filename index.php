<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";
	echo "<br>";
	echo "<br>";

    $date1 =  date('Y/m/d', time());
    echo "The value of \$date: ".$date1."<br>";

    if
           (strtotime($date) < strtotime($dtar))
    	 {
            echo "The Past! <br>";
         }
    elseif (strtotime($date) == strtotime($dtar)) 
         {
            echo "Same Day <br>";
         }
    else
         {
            echo "The Future! <br>";
         }
   
  
       
       $i= strpos($date1, '/');
       $j= strrpos($date1, '/');

       echo "The / appears on positions ".$i." & ".$j;
       echo "<br>";
       
       
       $pieces = explode("/", $date1);
       echo "Number of words in \$Date "count($pieces);

       echo "String length in \$Date " strlen($date1)

?>