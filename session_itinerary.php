<?php
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if( isset($_POST['oid']) ){
    $games = $_POST['oid'];

    $_SESSION['games'] = $games;

    $return['url'] = 'seats.php';
    $return['valid'] = true;

    echo json_encode($return);
}//end isset