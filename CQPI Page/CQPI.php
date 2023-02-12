<?php
    $con=mysqli_connect("localhost","root","","rechner") or die("Could not connect to database");
    $StudentName = $_POST['StudentName'];
    $Roll = $_POST['Roll'];
    $S1 = $_POST['S1'];
    $C1 = $_POST['C1'];
    $G1 = $_POST['G1'];
    $S2 = $_POST['S2'];
    $C2 = $_POST['C2'];
    $G2 = $_POST['G2'];
    $S3 = $_POST['S3'];
    $C3 = $_POST['C3'];
    $G3 = $_POST['G3'];
    $S4 = $_POST['S4'];
    $C4 = $_POST['C4'];
    $G4 = $_POST['G4'];
    $S5 = $_POST['S5'];
    $C5 = $_POST['C5'];
    $G5 = $_POST['G5'];
    $S6 = $_POST['S6'];
    $C6 = $_POST['C6'];
    $G6 = $_POST['G6'];
    $S7 = $_POST['S7'];
    $C7 = $_POST['C7'];
    $G7 = $_POST['G7'];

    $C_total = $C1 + $C2 + $C3 + $C4 + $C5 + $C6 + $C7;
    $GPA = ($C1*$G1) + ($C2*$G2) + ($C3*$G3) + ($C4*$G4) + ($C5*$G5) + ($C6*$G6) + ($C7*$G7);
    
    $Cqpi = $GPA / $C_total;

    $insert1 = "INSERT INTO cqpi(StudentName,Roll,SubName,SubCredits,SubCgpa,Cqpi) values
    ('$StudentName','$Roll','$S1','$C1','$G1','$Cqpi'),('$StudentName','$Roll','$S2','$C2','$G2','$Cqpi'),('$StudentName','$Roll','$S3','$C3','$G3','$Cqpi'),('$StudentName','$Roll','$S4','$C4','$G4','$Cqpi'),('$StudentName','$Roll','$S5','$C5','$G5','$Cqpi'),('$StudentName','$Roll','$S6','$C6','$G6','$Cqpi'),('$StudentName','$Roll','$S7','$C7','$G7','$Cqpi');";
    
    $result2 = mysqli_query($con,$insert1) or die ( "error querying the db" );
    
    echo "Your CQPI is ".$Cqpi;


     mysqli_close($con);
?>