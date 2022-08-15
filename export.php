<?php
error_reporting(0);

include('antares-php.php');
$antares = new antares_php();
$antares->set_key('89992da001a0228b:e5bd085df2cd162d');

// $datetime = $_POST["datetime"];
// $subs = $_POST["subs"];
// $newSubs = $_POST["newSubs"];

$yourall = $antares->get_all('Wifi_DO_SUHU', 'Aquaculture');

// if(array_key_exists('limit', $_POST)) { 
//     $limit = $_POST["limit"];
//     $yourlimit = $antares->get_limit($limit,'Wifi_DO_SUHU','Aquaculture');
//   }
//   else if (array_key_exists('limit2', $_POST)) { 
//     $limit2 = $_POST["limit2"];
//     $dscAllDataIDLimit = $antares->dscAllDataIDLimit($limit2,'Wifi_DO_SUHU','Aquaculture');
//   }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>
<body>
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Suhu Alami Kolam</th>
                <th>Suhu Alami Luar</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Suhu Artificial Kolam</th>
                <th>Suhu Artificial Luar</th>
                <th>Dyssolve Oxygen</th>
            </tr>
        </thead>
        <tbody>
            <?php
              foreach ($yourall as $key => $value) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $value["formatDate"]
                  ?>
                </td>
                <td>
                <?php
                    echo $value["formatTime"] 
                  ?>
                </td>
                <td>
                <?php
                    echo $value["Suhu B Air 1"] 
                  ?>
                </td>
                <td>
                <?php
                    echo $value["Suhu B Luar"] 
                  ?>
                </td>
                <td>
                    <?php
                    echo $value["Date"]
                  ?>
                </td>
                <td>
                <?php
                    echo $value["Time"] 
                  ?>
                </td>
                <td>
                <?php
                    echo $value["Suhu Alami Air"] 
                  ?>
                </td>
                <td>
                <?php
                    echo $value["Suhu Alami Luar"] 
                  ?>
                </td>
                <td>
                <?php
                    echo $value["DO (Mg/L)"] 
                  ?>
                </td>
            </tr>
            <?php
              }
            ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>

     <!-- script data table -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src=" https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
  </script>
</body>
</html>