<?php

$db_conn = new mysqli('localhost','root','','crm-digi');
if ($db_conn->connect_error) {
    die('Connectivity Error..'. $db_conn->connect_error);
}