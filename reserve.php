<?php
require_once('list.php');

// echo '<pre>';
// print_r($origins);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stadium Seats | Games</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style1.css">

</head>
<body style="background: url('images/stadium.jpg') center center no-repeat;background-size:cover; background-attachment: fixed;">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <h3>Stadium <span class="first-letter">S</span>eats</h3>
        </div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Buy a Ticket
                    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
        </ul>
    </div>
</nav>




<div class="container-fluid">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>
                    <center>CHOOSE MATCH</center>
                </h2>
                <div class="container-fluid">
                    <form class="form-horizontal" role="form" id="form-itinerary">
                        <center>

                            <div class="form-group">
                                <label for="">Select Match:</label>
                                <select class="btn btn-default" id="game-id" required>
                                    <?php foreach($games as $game): ?>
                                        <option value="<?= $game['Game_ID']; ?>" > <?= $game['Game_Type']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-success">NEXT
                                <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).on('submit', '#form-itinerary', function(event) {
        event.preventDefault();
        /* Act on the event */
        var validate = "";
        var match = $('select[id=game-id]').val();

        if(match.length == 0){
            alert('Please Select a match!');
        }else{
            $.ajax({
                url: '/session_itinerary.php',
                type: 'post',
                dataType: 'json',
                data: {
                    oid : match,
                },
                success: function (data) {
                    console.log(data);
                    if(data.valid == true){
                        window.location = data.url;
                        console.log('sss');
                    }
                },
                error: function(){
                    alert('Error: L161+');
                }
            });
        }//end dept kung == 0


    });



</script>

</body>
</html>