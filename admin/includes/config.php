<?php

$db_conn = new mysqli('localhost','root','','digicraftech');
if ($db_conn->connect_error) {
    die('Connectivity Error..'. $db_conn->connect_error);
}