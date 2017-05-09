<?php
//****************************************************************************
//****************************************************************************
// Data Sources
//****************************************************************************
//****************************************************************************

// 1. source name
// 2. type (mysqli, pgsql, oracle)
// 3. server
// 4. port
// 5. source (table or directory)
// 6. user
// 7. password

//****************************************************************************
//****************************************************************************

//$i = "main";
//$data_arr[$i]["type"] = "mysqli";
//$data_arr[$i]["server"] = "db.example.com";
//$data_arr[$i]["port"] = 3306;
//$data_arr[$i]["source"] = "sample_db";
//$data_arr[$i]["user"] = "sample_user";
//$data_arr[$i]["pass"] = "sample_pass";

//***************************************************************************
// Main Database (uses MySQLi driver)
//***************************************************************************
$i = "healthbridge";
$data_arr[$i]["type"] = "mysqli";
$data_arr[$i]["port"] = 3306;
$data_arr[$i]["source"] = "healthbridge";
$data_arr[$i]["user"] = "root";
$data_arr[$i]["pass"] = "root";
$data_arr[$i]["server"] = "127.0.0.1";
$data_arr[$i]["backup_path"] = "/data/backups/mysql";

//***************************************************************************
// MPI Database (uses MySQLi driver)
//***************************************************************************
$i = "mpi";
$data_arr[$i]["type"] = "mysqli";
$data_arr[$i]["port"] = 3306;
$data_arr[$i]["source"] = "healthbridge_mpi";
$data_arr[$i]["user"] = "root";
$data_arr[$i]["pass"] = "root";
$data_arr[$i]["server"] = "127.0.0.1";
$data_arr[$i]["backup_path"] = "/data/backups/mysql";

/**
//***************************************************************************
// LWCMS
//***************************************************************************
$i = "lwcms";
$data_arr[$i]["type"] = "mysqli";
$data_arr[$i]["port"] = 3306;
$data_arr[$i]["source"] = "lwcms_swelldev";
$data_arr[$i]["user"] = "user";
$data_arr[$i]["pass"] = "pass";
$data_arr[$i]["server"] = "127.0.0.1";
$data_arr[$i]["backup_path"] = "/data/backups/mysql";

//***************************************************************************
// MongoDB Configuration
//***************************************************************************
$i = "cdn-mongo";
$data_arr[$i]["type"] = "mongodb";
$data_arr[$i]["port"] = 27017;
$data_arr[$i]["source"] = "healthbridge";
$data_arr[$i]["user"] = "user";
$data_arr[$i]["pass"] = "pass";
$data_arr[$i]["server"] = "127.0.0.1";
$data_arr[$i]["backup_path"] = "/data/backups/mongodb";
*/

