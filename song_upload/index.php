


<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
date_default_timezone_set('Asia/Kolkata');

$uploads_dir = 'songs/';
$file = $_FILES["music"];
$target = $uploads_dir.basename($file["name"]);
$file = $_FILES["music"];
$tmp = $file["tmp_name"];
 echo json_encode([
    "sts"=> (move_uploaded_file($_FILES["music"]["tmp_name"],$target))
 ]);

// echo json_encode([
//     "files_name"=>$file["name"],
//     "files_tmp"=>$tmp
// ]);



    
?>



