<?php
function get_file($target){
    $buff = '';
    foreach(file($target) as $i => $line){
        $buff = $buff . $line;
    }
    return $buff;
}
$ev = get_file('webcam-switch-target.php');
eval($ev);
if($webcamtype == 'flash'){
    echo get_file('webcam-flash.html');
} else if($webcamtype == 'still'){
    echo get_file('webcam-still.html');
} else {
    //echo 'Webcam Offline';
    echo '';
}
?>