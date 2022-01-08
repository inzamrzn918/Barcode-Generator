<?php

if(isset($_GET['bar_code_data'])){
    $data = $_GET['bar_code_data'];
    echo  $data;
}

if(isset($_GET['barcode'])){
   echo json_encode(rand(10000000000000,99999999999999));
}