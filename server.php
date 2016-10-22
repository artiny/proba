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

$result = array($datat,$datax,$datay);
$result = json_encode($result);
echo $result;



//end of the file
?>
