<?php
$Passwords = ["owner", "password" "june"];

$user = $_GET["user"] ?? "";

if (in_array($user, $Passwords)) {
    echo "true";
} else {
    echo "false";
}
?>
