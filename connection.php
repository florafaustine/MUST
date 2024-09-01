<?php
$con=new mysqli('localhost', 'root','','greenguardiansdb');

if($con){

}else{
    die(mysqli-error($con));
}

?>