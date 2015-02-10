<?php
     echo "<br>*********************<br>";
    $a = array(1,2,3);
    foreach( $a as $x )
    {
        echo $x .'*='. 2;echo "<br>";
    }

     echo "<br>*********************<br>";
    
    $a = array(
        "1" => "A",1 => "B", "C" , 2 => "D"               
    );
    print_r($a);
    echo count($a);
    echo "<br>*********************<br>";
    
    function add_values()
    {
        for ($i = 1; $i <= func_num_args(); $i++) {
            $param += func_get_arg($i);            
        }
    return $param; 
    }
    
    echo add_values(1,2,3);
  
	function test()
	{
			print"Hello Ji New Git Branch.";			
	return $str;			
	}
  
  
?>

 <?php
    function some_func() {
        for ($i = 1; $i <= func_num_args(); $i++) {
            $param += func_get_arg($i);            
        }
    return $param;        
    }

    echo some_func(1,2,3);
    echo "<br>*********************<br>";
    
    function myFunc( &$a )
    {
        $a++;
        
        echo $a;
    }
    
    $b = 1;
    myFunc( $b );
    echo "<br>*********************<br>";
    
    $v1 = 1;
    $v2 = 2;
    $v3 = 3;
    
    function myFunction()
    {
        $GLOBALS['v1'] *= 2;
        global $v2; $v2 *= 2;
        global $v3; $v3 *= 2;
    }
    myFunction();
    echo "{$GLOBALS['v1']} , $v2 , $v3";
    
    echo "<br>*********************<br>";
    function inc_($val)
    {
        return ++$val;
    }
    
    echo inc_(5);
?> 
