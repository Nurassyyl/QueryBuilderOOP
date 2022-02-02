<?php
session_start();
$config = include "config.php";
include "database/QueryBuilder.php";
include "database/connect.php";
return new QueryBuilder(Connect::pdo($config['database']));