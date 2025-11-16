<?php include "load.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>EditProfile</title>
<style>
body{margin:0;padding:0;font-family:Arial;background:#f2f2f2}
.wrap{max-width:450px;background:white;margin:60px auto;padding:30px;border-radius:15px;box-shadow:0 4px 15px rgba(0,0,0,0.1)}
.hd{font-size:26px;text-align:center;margin-bottom:20px;color:#444}
.inp{width:100%;padding:12px;border:1px solid #ccc;border-radius:8px;font-size:16px;margin-bottom:15px}
.btn{width:100%;padding:12px;background:#4b7bec;color:white;font-size:17px;border-radius:8px;border:none;cursor:pointer}
.msg{text-align:center;margin-top:15px;font-size:16px}
</style>
</head>
<body>
<div class="wrap">
<div class="hd">Edit Profile</div>
<form method="POST" action="save.php">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
<input class="inp" name="nm" value="<?= $data['uname'] ?>">
<input class="inp" name="em" value="<?= $data['uemail'] ?>">
<button class="btn">Update</button>
</form>
</div>
</body>
</html>
