<?php
// http://localhost/sangeet/sangeet_back/

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
date_default_timezone_set('Asia/Kolkata');

echo json_encode([
    "backend_status"=>true,
    "time" => date("d_M_Y").date(" H:i:s")
]);


?>