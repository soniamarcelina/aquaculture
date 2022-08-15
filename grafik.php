<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Sensor</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootsrap.min.css"/>
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery=latest.js"></script>

    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $('#responsecontainer').load('data.php');
        }, 1000);
    </script>

</head>
<body>
    <!-- <div class="container" style="text-align: center;">
        <h3>Grafik Sensor Realtime</h3>
    </div> -->

    <!-- tampilan grafik -->
    <div class="container">
        <div class="container" id="responsecontainer" style="width: 80%; text-align:center;">
        </div>
    </div>
    
    
</body>
</html>