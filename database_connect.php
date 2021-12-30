<?php
// مستضيف قاعدة البيانات
$database['host'] = 'localhost';
// اسم المستخدم لقاعدة البيانات
$database['username'] = 'id18196863_user';
// كلمة المرور لمستخدم قاعدة البيانات
$database['userpass'] = 'Abbasmasri_0';
// اسم قاعدة البيانات
$database['name'] = 'id18196863_santa';

// كود عمل رابط الإتصال بقاعدة البيانات
$conn_link = mysqli_connect($database['host'],$database['username'],$database['userpass'],$database['name']) or die(mysqli_connect_error());

?>