
<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">

        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme-min.css" />



    </head>
    <body>
        <div class="col-md-8"  id="container">
            <h3>Client Dashboard</h3>
            <div class="col-md-5" id="btnarea">
                <button class="btn-default" onclick="location.href='addclient.php'">Add New Client</a></button>
                <button class="btn-default" onclick="location.href='viewall.php'">View All Clients</button>
            </div>
            <p id="display-status">
            <?php
            if(isset($_GET['msg']))
                {echo $_GET['msg']." !!";}
            ?>
            </p>

        </div>
    </body>


</html>
