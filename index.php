<?php
require_once dirname(__FILE__).'/config.php';
header("Location: "._APP_URL."/app/calc.php");
include _ROOT_PATH.'/app/calc.php';
?>