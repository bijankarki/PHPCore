<?php
include('class/CsvActivity.php');
$csvobj = new CsvActivity();
$data = $csvobj -> readCsv();

//print_r($data);
?>
<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme-min.css" />
        <link type="text/css" rel="stylesheet" href="css/mycss.css"
    </head>
    <body>
        <div class="col-md-12"id="container">
            <div class="col-md-12">
                <h3>Displaying All Clients</h3>
                <table class="table table-striped table-bordered table-hover" width="100%" id="mydata">
                  <thead>
                    <tr id="tablehead">
                        <th>S.No.</th><th>Name</th><th>Gender</th><th>Phone</th><th>Email</th><th>Address</th><th>Nationality</th>
                        <th>Dob</th><th>Education Background</th><th>Mode of Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=0;
                    foreach ($data as $key => $value) {
                      # code...
                      $i++;
                      echo '<tr>';
                      echo '<td>'.$i.'</td>';
                      echo '<td>'.$data[$key][0].'</td>';
                      echo '<td>'.$data[$key][1].'</td>';
                      echo '<td>'.$data[$key][2].'</td>';
                      echo '<td>'.$data[$key][3].'</td>';
                      echo '<td>'.$data[$key][4].'</td>';
                      echo '<td>'.$data[$key][5].'</td>';
                      echo '<td>'.$data[$key][6].'</td>';
                      echo '<td>'.$data[$key][7].'</td>';
                      echo '<td>'.$data[$key][8].'</td>';
                      echo '</tr>';
                    }
                    //foreach ($rows as $row){
                        /*echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[work_title]</td><td>$row[duration]</td>"
                                . "<td>$row[timestamp]</td><td><a href='updatemp.php?id=$row[id]'>update</a> &nbsp;"
                                . "<a href='../class/delete.php?id=$row[id]'>delete</a></td></tr>";
                    }*/
                    ?>
                  </tbody>
        </table>
            </div>
        </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script>
      $('#mydata').DataTable();
    </script>
</body>
</html>
