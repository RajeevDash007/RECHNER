<?php 
    $con=mysqli_connect("localhost","root","","rechner") or die("Could not connect to database");
    $Student_Name = $_POST['StudentName'];
    $Roll_No = $_POST['Roll'];

    $insert1 = "DELETE FROM cqpi WHERE StudentName = '$Student_Name' and Roll = '$Roll_No'";
    $result = mysqli_query($con,$insert1);
    echo "Successfully deleted";
    mysqli_close($con);
?>