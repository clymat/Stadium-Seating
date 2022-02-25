<?php

include "stadium-model.php";
$Game_ID = $_GET['id'];
$game = getGamesById($Game_ID);
include "details-view2.php";
 ?>

