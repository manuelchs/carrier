<?php
$stringJSON = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/assets/db/productos.json');
$db = json_decode($stringJSON, true);