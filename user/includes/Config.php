<?php
/**
 * Created by PhpStorm.
 * User: A's
 * Date: 24/03/2018
 * Time: 16:06
 */

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "paws");

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);