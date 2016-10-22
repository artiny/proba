<?php
$initVelocity = $_POST['Velocity'];
$initAngle = $_POST['Angle'];


$x = 0;
$y = 0;
$t = 0;
$dt = 0.1;
$g = 9.81;

$int = 0;
$inx = 0;
$iny = 0;
//$datat[];
//$datax[];
//$datay[];


$vx = $initVelocity * cos( $initAngle * M_PI / 180 );
$vy = $initVelocity * sin( $initAngle * M_PI / 180 );


while($y >= 0):
if($y >= 0) {

    $x =  $x  + $vx * $dt;
    $vy = $vy - $g  * $dt;
    $y =  $y  + $vy * $dt;
    $t = $t + $dt;

    $data[] = $t;
    $data[] = $x;
    $data[] = $y;
}
endwhile;


// *** create dataT,X,Y vector
$ii=0;
while($ii<count($data)){
  $datat[] =  $data[$ii];
  ++$ii;
  $datax[] =  $data[$ii];
  ++$ii;
  $datay[] =  $data[$ii];
  ++$ii;
}



//--------------------------------------------------
//echo 'Thank you '. $_POST['Velocity'] . ' ' . $_POST['Angle'] . ', says the PHP file';
//echo print_r($datat);
//echo '<pre>'; print_r($datat); echo '</pre>';
//echo '<pre>'; print_r($datax); echo '</pre>';
//echo '<pre>'; print_r($datay); echo '</pre>';

/*
//$php_array = array('abc','def','ghi');
$js_arrayt = json_encode($datat);
//echo "var javascript_array = ". $js_array . ";\n";
echo $js_arrayt;

$js_arrayx = json_encode($datax);
//echo "var javascript_array = ". $js_array . ";\n";
echo $js_arrayx;

$js_arrayy = json_encode($datay);
//echo "var javascript_array = ". $js_array . ";\n";
echo $js_arrayy;
*/

$result = array($datat,$datax,$datay);
$result = json_encode($result);
echo $result;



//end of the file
?>
