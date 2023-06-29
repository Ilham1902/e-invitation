<?php 

    $conn = mysqli_connect('localhost','lincodem_e-inv_najma','@@s,l?t;z7Q=','lincodem_e-invitation_najma');

    $data = mysqli_query($conn,"select * from comment");
    while ($row = mysqli_fetch_assoc($data)) {
    	$comment[] = $row;
    }
    echo json_encode($comment);
