<?php
    $servername = "localhost";
    $username = "geon";
    $password = "geon";
    $dbname = "formsdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['snameunder'])){
        $snameunder=$_POST['snameunder'];
        $attdbname=$_POST['attdbname'];
        $scannedsid=$_POST['scannedsid'];
        $scannedsid = str_replace("FF24-", "", $scannedsid);
        $sess = $_POST['sess'];
        //$eid=$_POST['eid'];
        
        $sql= 'UPDATE  '.$attdbname.'  SET '.$snameunder .'= 1 WHERE id ='.$scannedsid.';';
        //echo $sql;
        mysqli_query($conn,$sql);
        echo('<h1><center>Attendance taken thank you</center></h1>');
        //header('Location:done.php?msg=attendance taken, thank you&id='.$scannedsid);
        header("Refresh:1; url=scansessatt.php?sid=$sess&attdbname=$attdbname");
    }  
?>
<html>
    <head>

    </head>
    <body style="background-color:powderblue;">
</body>
</html>