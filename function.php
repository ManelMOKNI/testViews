<?php
session_start();
function submitform(){
    if(isset($_POST['submit'])){
        notify();
    }
}
function notify($type='nuetral',$message='hello world'){
    $_SESSION['notify']['type']=$type;
    $_SESSION['notify']['message']=$message;
}
function notification(){
    if(isset($_SESSION['notify'])){
        $type=$_SESSION['notify']['type'];
        $message=$_SESSION['notify']['message'];
        $html ='<div class="notify '.$type.'">'.$message.'</div>';
        unset($_SESSION['notify']);
            echo $html;

    }
}
?>
