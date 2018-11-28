<?php
// One Way Hashing
$username = 'demo@example.com';
$password = 'a1VsN64#q';
$hashed = hash('sha512', $username.$password);
if(strlen($password) <= 64) {
$trim = substr($hashed, strlen($password));    
$salt = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, strlen($password));
}
else {
$trim = substr($hashed, 64);    
$salt = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 64);
}
$dbPassword = $salt . $trim;


// Matching Password
$username = 'demo@example.com';
$password = 'a1VsN64#q';
$dbPassword = "qxcyka3m45f580c0288aeb99337a608a53099ebae02bd2718790e7f414e38b3fc7511d8705708b226fd37e6d0e602a5ce2f0d0b1ff65b475f0d80dcd2cdd5b41";
$hashed = hash('sha512', $username.$password);
if(strlen($password) <= 64) {
$trim = substr($hashed, strlen($password));
$dbtrim = substr($dbPassword, strlen($password));
}
else {
$trim = substr($hashed, 64);
$dbtrim = substr($dbPassword, 64);
}

if($trim == $dbtrim) {
    echo "Password Match";
}
else {
    echo "Wrong Credentials";
}
?>
