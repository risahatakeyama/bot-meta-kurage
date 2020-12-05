<?php

require_once QDIRQ . '/vender/autoload.php';

$inputString=file_get_contents('php://input');
error_log($inputString);

?>