<?php
$con = mysqli_connect('localhost','root','','bloodbridge');
if($con){
    print 'connect';
}else{
    print 'no connect';
}
?>