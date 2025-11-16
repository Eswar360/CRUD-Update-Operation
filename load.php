<?php
include "link.php";
$uid=1;
$q=$conn->prepare("SELECT * FROM users WHERE id=?");
$q->bind_param("i",$uid);
$q->execute();
$res=$q->get_result();
$data=$res->fetch_assoc();
?>
