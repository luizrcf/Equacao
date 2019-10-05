<?php

class Equacao {
    function equacao_segundo_grau($a, $b, $c){
    	$x1 = ((-$b) + sqrt( ($b * $b) - (4 * $a * $c) ) )/ (2 * $a);
   	$x2 = ((-$b) - sqrt( ($b * $b) - (4 * $a * $c) ) )/ (2 * $a);
   
 	return array('x1' => $x1, 'x2' => $x2);
    }
}
?>