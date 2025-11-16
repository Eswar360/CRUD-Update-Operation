<?php
include "link.php";
$id=$_POST['id'];
$nm=$_POST['nm'];
$em=$_POST['em'];
$q=$conn->prepare("UPDATE users SET uname=?, uemail=? WHERE id=?");
$q->bind_param("ssi",$nm,$em,$id);
$ok=$q->execute();
?>
<!DOCTYPE html>
<html>
<head>
<title>Status</title>
<style>
body{background:#f2f2f2;font-family:Arial;padding-top:80px}
.box{background:white;width:380px;margin:auto;padding:25px;border-radius:12px;text-align:center;box-shadow:0 4px 12px rgba(0,0,0,0.1)}
.s{color:#2ecc71;font-size:22px}
.f{color:#e74c3c;font-size:22px}
.a{display:block;margin-top:20px;font-size:17px;color:#4b7bec;text-decoration:none}
</style>
</head>
<body>
<div class="box">
<div class="<?= $ok?'s':'f' ?>">
<?= $ok?'Profile Updated':'Update Failed' ?>
</div>
<a class="a" href="edit.php">Go Back</a>
</div>
</body>
</html>
