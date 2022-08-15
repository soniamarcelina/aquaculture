<?php
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "artemis");
    
    //baca data dari tabel
    //baca informasi tanggal dan waktu untuk semua data - sumbu x
    $tanggal = mysqli_query($conn, "SELECT tanggal_waktu FROM sensor ORDER BY ID ASC");
    //baca informasi suhu dalam untuk semua data - sumbu y
    $suhu1 = mysqli_query($conn, "SELECT kolamDalam FROM sensor ORDER BY ID ASC");
    //baca informasi suhu luar untuk semua data
    $suhu2 = mysqli_query($conn, "SELECT kolamLuar FROM sensor ORDER BY ID ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Sensor</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootsrap.min.css"/>
<head>
<body>
<div class="panel panel-primary">
    <div class="panel-heading">
        Grafik Sensor
    </div>

    <div class="panel-body">
        <canvas id="myChart"></canvas>

        <script type="text/javascript">
            var canvas = document.getElementById('myChart');
            var data = {
                labels : [
                    <?php
                       while($data_tanggal = mysqli_fetch_array($tanggal)) 
                       {
                        echo '"'.$data_tanggal['tanggal_waktu'].'",' ;
                       }
                    ?>
                ] , 
                datasets : [
                    {
                    label : "Suhu Kolam Artificial",
                    fill : true,
                    backgroundColor : "rgba(52, 231, 43, 0.5)",
                    borderColor: "rgba(52, 231, 43, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(52, 231, 43, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data : [
                        <?php
                             while($suhu_dalam= mysqli_fetch_array($suhu1)) 
                             {
                              echo $suhu_dalam['kolamDalam']. ',' ;
                             }
                        ?>
                    ]
                },

                {
                    label : "Suhu Kolam Alami",
                    fill : true,
                    backgroundColor: "rgba(78, 115, 223, 0.5)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                                    data : [
                        <?php
                             while($suhu_luar = mysqli_fetch_array($suhu2)) 
                             {
                              echo $suhu_luar['kolamLuar']. ',' ;
                             }
                        ?>
                    ]
                }
            ]
            };

            //option grafik
            var option = {
                showLines : true,
                animation : {duration: 0}
            };

            //cetak grafik ke dalam canvas
            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : {
                    animation : false,
                }
            }) ;

        </script>
    </div>
</div>
</body>
</html>
