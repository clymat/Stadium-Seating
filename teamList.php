<?php
$title = "List Of All Teams";
include "stadium-model.php";


$child= "#fd7e14";
$border= "border: 2px solid #000000;";
$padding= "8px";
$backColor= "#3498db";
$color= "#000000";
?>

<style>
    td, th{
        border:<?php echo $border ?>;
        padding:<?php echo $padding ?>;
    }

    th{
        background-color:<?php echo $backColor ?>;
        color<?php echo $color ?>;
    }
    tr:nth-child(even){
        background-color:<?php echo $child ?>;
    }
</style>



<?php

echo "<table>";
echo "<tr><th>VIEW TEAM</th><th>LEAGUE</th></tr>";

$teams = getAllTeams();
foreach ($teams as $team) {

    echo "<tr>";
    echo '<td><a href="teamDetails.php?id='.$team['Team_ID'].'">'. $team['Team_Name'] .'</a></td>';
    echo "<td>{$team['Team_League']}</td>";
    echo "</tr>";

}
echo "</table>";
?>
<section>
    <h1>Filter Teams </h1>
</section>


<?php
foreach($teams as $team){
    echo "<label for='{$team["Team_Name"]}'>";
    echo "<input type='radio' name='teams' class='teamBtn' value='{$team["Team_ID"]}' id='{$team["Team_Name"]}'>";
    echo "{$team["Team_Name"]}";
    echo "</label>";
}
?>
<div id="matching-games">
    <!-- matching games will be displayed in here -->
</div>
<script src="stadium-ajax.js"></script>
</body>
</html>
