<?php
    include "../connection.php";
    $state = $_POST['state'];
    $nsql = "SELECT COUNT(*) FROM bloodbankdb_open_doc WHERE state = '$state'";
    $nsqlres = mysqli_query($con, $nsql);

    $row = mysqli_fetch_assoc($nsqlres);

    $num = $row['COUNT(*)']+1;
    $name = $_POST['hospitalname'];

    $in = "INSERT INTO bloodbankdb_open_doc (State, bbnumber, Address) VALUES('$state','$num','$name')";
    mysqli_query($con, $in);

